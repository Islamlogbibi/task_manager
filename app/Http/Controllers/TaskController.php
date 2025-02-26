<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request){
        Task::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'praiority'=>$request->praiority
        ]);
    }
}
