<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return response()->json($tasks);
    }
    public function store(Request $request){
        $create = Task::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'praiority'=>$request->praiority
        ]);
        return response()->json($create, 201);
    }

    public function update(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json($task, 200);
    }
}
