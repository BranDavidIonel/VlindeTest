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
        
        
        $my_colection=new My_colection();
        $types=$my_colection->getTypes();
        return view('colection.create',compact('types'));
        
    }
    public function store(Request $request)
    {
     //dump(request()->all());
     
      $validatedAttributes=request()->validate([
        //'title'=>['requered','min:2','max:255 '],
        'title'=>'required',
        'descripton'=>'required',
        'type'=>'required'
        
        ]);
        


      $my_colection=new My_colection();
      $my_colection->title=request('title');
      $my_colection->description=request('description');
      $my_colection->color=request('color');
      $my_colection->link=request('link');
      $my_colection->type=request('type');
     

      $my_colection->save();

      return redirect()->route('my_colection.index');
      
    }
    public function edit($id)
    {
        
        $colection=My_colection::find($id);
            
        return view('colection.edit',compact('colection','types'));

    }

 
    public function update(Request $request, $id)
    {
        $validatedAttributes=request()->validate([
            //'title'=>['requered','min:2','max:255 '],
            'title'=>'required',
            'type'=>'required'
            
            ]);
        $my_colection=My_colection::find($id);
        $my_colection->title=request('title');
        $my_colection->description=request('description');
        $my_colection->color=request('color');
        $my_colection->link=request('link');
        $my_colection->type=request('type');
        $my_colection->update();
 


     return redirect()->route('my_colection.index')
                        ->with('success','Colectin updated successfully!');


    }
    public function delete($id)
    {
        $my_colection=My_colection::find($id);
        $my_colection->delete();
        return redirect()->route('my_colection.index')
                        ->with('success','Colectin delete successfully!');
    }
}
