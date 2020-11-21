<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\My_colection;
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
        $my_colection=My_Colection::get()->all();
        return view('home',compact('my_colection'));
    }
}
