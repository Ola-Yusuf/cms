<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Accountant;
use App\Models\Client;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
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
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function accountantValidator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accountants'],
            'tel' => ['required', 'string', 'unique:accountants'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new accountant instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Models\Accountant
     */
    protected function createAccountant(array $data)
    {
        return Accountant::create([
            'fname' => $data['fname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'password' => Hash::make('CMS-Accountant'),
        ]);

    }

    public function registerAccountant(Request $request)
    {
        $this->accountantValidator($request->all())->validate();

        event(new Registered($user = $this->createAccountant($request->all())));

        Session::flash('status','Accountant Created Successfully.'); 

        return redirect()->route('admin.home');
    }

     /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function clientValidator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'tel' => ['required', 'string', 'unique:clients'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new accountant instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Models\Accountant
     */
    protected function createClient(array $data)
    {
        return Client::create([
            'fname' => $data['fname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'password' => Hash::make('CMS-Client'),
        ]);

    }

    public function registerClient(Request $request)
    {
        $this->clientValidator($request->all())->validate();

        event(new Registered($user = $this->createClient($request->all())));

        Session::flash('status','Client Created Successfully.'); 

        return redirect()->route('admin.home');
    }

}
