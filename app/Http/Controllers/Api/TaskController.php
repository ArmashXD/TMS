<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //

    public function index()
    {
        $tasks = Task::all();
        $mapped = $tasks->map(function($task){
            return [
                'heading' => $task->heading,
                'divider' => true,
                'descripton' => $task->description,
                'status' => $task->status,
                'created_at' => $task->created_at->diffForHumans(),
                'priority' => $task->priority->name,
            ];
        });
        return response()->json($mapped);
    }
}
