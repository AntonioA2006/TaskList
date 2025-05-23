<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::view('/tasks/create', 'create')->name("tasks.create");
Route::get('/tasks', function ()  {
    $tasks = Task::latest()->get();
    return view("index", [
        'tasks' => $tasks
    ]);
})->name('tasks.index');

Route::get("tasks/{id}",function($id){


    return view('show', [
        'task' =>   Task::findOrFail($id)
    ]);
})->name('tasks.show');
Route::post('/tasks', function (Request $request){
    dd($request->all());
})->name('tasks.store');


