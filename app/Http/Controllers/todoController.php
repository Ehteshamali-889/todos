<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class todoController extends Controller
{
    function index(){
        $todos=todos::all();
        $data=compact('todos');
        return view("allToDoIndex")->with($data);
    }
    function createTodo(Request $request){
        
        $request->validate([
            'name' => 'required',
            'work' => 'required',
            'status' => 'required'
        ]);
        $todo=new todos;
        $todo->name=$request->name;
        $todo->work=$request->work;
        $todo->status=$request->status;
        $todo->save();
        session()->flash('success', 'Todo added successfully!');
        return redirect(route("todo.home"));
    }

    public function delete($id){
        $todo=todos::find($id);
        $todo->delete();
        return redirect(route("todo.home"));
    }

    public function edit($id){
        $todo=todos::find($id);
        $data=compact('todo');
        return view("updateIndex")->with($data);
    }

    function updateTodo(Request $request){
        // print_r($request->all());
        $request->validate([
            'name' => 'required',
            'work' => 'required',
            'status' => 'required'
        ]);
        $id=$request->id;
        $todo=todos::find($id);
        $todo->name=$request->name;
        $todo->work=$request->work;
        $todo->status=$request->status;
        $todo->save();
        return redirect(route("todo.home"));
    }
}
