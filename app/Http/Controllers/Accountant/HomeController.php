<?php

namespace App\Http\Controllers\Accountant;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('accountant.auth:accountant');
    }

    /**
     * Show the Accountant dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('accountant.home');
    }
}
