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
    public function create()
    {
        $types=array(
            1=>"book",
            2=>"music",
            3=>"movie"
        );
        

        return view('colection.create',compact('types'));
        
    }
    public function store(Request $request)
    {
     //dump(request()->all());
     /*
      $validatedAttributes=request()->validate([
        'title'=>['request','min:2','max:255 '],
        //'title'=>'required',
        'descripton'=>'required',
        'type'=>'required'
        
        ]);
        */


      $my_colection=new My_colection();
      $my_colection->title=request('title');
      $my_colection->description=request('description');
      $my_colection->color=request('color');
      $my_colection->link=request('link');
      $my_colection->type=request('type');
     

      $my_colection->save();

      return redirect('/');
      
    }
}
