<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\My_colection;
class MyColectionController extends Controller
{
    public function index(){
        $my_colection=My_Colection::get()->all();
        return view('home',compact('my_colection'));
    }
}
