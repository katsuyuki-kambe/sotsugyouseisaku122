<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('topindex');
        //topindexに変更
    }
    public function study()
    {
        return view('study');
        //sutdyに変更
    }
    public function useredit()
    {
        return view('useredit');
        //usereditに変更
    }
   


}
