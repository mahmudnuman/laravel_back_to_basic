<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){

       // $todos=todo::all();
        return view('todo.index')->with('todos',Todo::all());

    }

    public function show( todo $todo){

        //dd($todo);

        return view('todo.show')->with('todo',$todo);

    }

    public function create()
    {
       return view('todo.create');
    }

    public function store( Request $request)
    {
       //sdd(request()->all());

       $this->validate(request(),[

        'name' =>'required|min:6|max:20',
        'description' =>'required|min:10'

       ]);

       $data= new Todo();
       $data->name=$request->name;
       
       $data->description=$request->description;
       $data->completed=FALSE;
       //dd($data);
       $data->save();

       session()->flash('success','ToDo Created Successfully');

       return redirect('/todo');

    }

    public function edit(todo $todo){

        //dd($todo);

        return view('todo.edit')->with('todo',$todo);

    }

    public function update(Request $request)
    {
       //dd(request()->all());

       $this->validate(request(),[

        'name' =>'required|min:6|max:50',
        'description' =>'required|min:10'

       ]);

       $id=$request->id;
       $data= Todo::Find($id);
       $data->name=$request->name;
       
       $data->description=$request->description;
       $data->completed=FALSE;
       //dd($data);
       $data->save();

       session()->flash('success','ToDo Updated Successfully');

       return redirect('/todo');

    }

    public function complete(todo $todo)
    {
       
        $todo->completed= TRUE;  
        $todo->save();

       session()->flash('success','ToDo Completed Successfully');

       return redirect('/todo');

    }

    public function destroy(todo $todo){

        $todo->delete();   
        session()->flash('success','ToDo Deleted Successfully');
        
       return redirect('/todo');

    } 
}
