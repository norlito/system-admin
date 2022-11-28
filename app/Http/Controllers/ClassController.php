<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        return view ('class.index')->with('classes', $classes);
    }
    public function list()
    {
        $classes = Classes::all();
        return view ('class.list')->with('classes', $classes);
    }


    public function create()
    {
        return view('class.create');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        Classes::create($input);
        return redirect('class')->with('flash_message', 'Classes Addedd!');  
    }

    public function show($id)
    {
        $class = Classes::find($id);
        return view('classes.show')->with('classes', $classes);
    }


    public function edit($id)
    {
        $class = Classes::find($id);
        return view('classes.edit')->with('classes', $classes);
    }

 
    public function update(Request $request, $id)
    {
        $contact = Classes::find($id);
        $input = $request->all();
        $classess->update($input);
        return redirect('class')->with('flash_message', 'class Updated!');  
    }


    public function destroy($id)
    {
        Classes::destroy($id);
        return redirect('class/list')->with('flash_message', 'Class deleted!');  
    }
}
