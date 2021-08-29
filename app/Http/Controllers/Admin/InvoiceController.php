<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\InvoiceRequest;
use App\Models\Project;
use App\Models\Client;
use App\Models\Invoice;
use Session;
use Auth;
use Crypt;
use Storage;

class InvoiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::with('project')->with('client')->get();
        return view('admin.view_invoice',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::with('client')->get();
        $serial = $this->generateSerial();
        return view('admin.new_invoice', compact('projects','serial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceRequest $request)
    {
        $data = $request->all();
        $data['issuedTo'] = Project::find($data['projectId'])->ownBy;
        $data['user_id'] = Auth::guard('admin')->user()->id;
        $data['user_type'] = 'App\Models\Admin';
        Invoice::create($data);
        
        $message['type'] = 'success';
        $message['content'] = 'Invoice Created Successfully';
        Session::flash('message',$message);

        return redirect()->route('admin.view.invoices');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::with('project')->with('client')->find(Crypt::decrypt($id));
        return view('admin.invoice_detail', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $project = Project::find(Crypt::decrypt($id));
        // $clients = Client::select('id','fname','username','avatar')->get();
        // return view('admin.edit_project', compact('project', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        $data = $request->all();
        if($request->hasFile('projectFile')){
            $fileName = $request->file('projectFile')->store('project files', 'public');
            $data['projectFile'] = $fileName;
        }

        Project::find(Crypt::decrypt($id))->update($data);
        
        $message['type'] = 'success';
        $message['content'] = 'Project Update Successful';
        Session::flash('message',$message);

        return redirect()->route('admin.show.project',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find(Crypt::decrypt($id));
        
        Storage::delete($invoice->paymentEvidence);
        
        $invoice->delete();

        $message['type'] = 'success';
        $message['content'] = 'Invoice Deleted Successfully';
        Session::flash('message',$message);

        return redirect()->route('admin.view.invoices');
    }

    public function download($id) {
        
    }

    public function generateRandomString($length = 10, $letters = true) {
        if(!$letters)
            $characters = '0123456789';
        if($letters)
            $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateSerial(){
        $digits = $this->generateRandomString(3,false);
        $letters = $this->generateRandomString(2,true);
        $serial = 'INV'.$digits.$letters;
        if(Invoice::where('invoiceSerial', $serial)->exists())
            $this->generateSerial();
        return $serial;
    }


}
