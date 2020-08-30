<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ToDoList;

class ToDoListController extends Controller
{
    public function create()
    {
        return view('ToDoList.create');
    }


    public function store()
    {

        //Validate the data
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required'
        
        ]);
        //Method 1 of saving the data

        // $todolist = new ToDoList();
        // $todolist->title = $req->title;
        // $todolist->description = $req->description;
        // $todolist->save();

        //Method 2 of saving the data to db using Model
        $todolist = ToDoList::create($data);
        
        return redirect('/home');
    }

    
    public function show(ToDoList $todolist)
    {
        return view('ToDoList.show', compact('todolist'));
    }


    public function edit(ToDoList $todolist)
    {
        return view('ToDoList.edit', compact('todolist'));
    }


    public function update(Request $req, ToDoList $todolist)
    {
        $todolist = ToDoList::findOrFail($todolist->id);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);


        $input = $req->all();

        $todolist->fill($input);
        $todolist->save();


        return redirect('/home');
    }

    public function destroy(ToDoList $todolist)
    {
        $todolists = ToDoList::find($todolist->id);

        $todolists->delete();

        return redirect('/home');
    }
}
