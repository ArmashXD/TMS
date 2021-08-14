<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Helpers\Common;

class TaskController extends Controller
{


    public function index()
    {
        $tasks = Task::all()->map(function($task){
            return [
                'id' => $task->id,
                'heading' => $task->heading,
                'divider' => true,
                'description' => $task->description,
                'status' => $task->status,
                'created_at' => $task->created_at->diffForHumans(),
                'priority' => $task->priority->name,
            ];
        });
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
       $task = Task::create([
            'heading' => $request->get('heading'),
            'description' => $request->get('description'),
            'status' => true,
            'priority_id' => 1
        ]);
        return Common::json_response('Successfully Created', 200, 200, $task);
    }

    public function show($id)
    {
        return response()->json(Task::find($id));
    }

    public function update(Request $request)
    {
        $task = Task::find($request->get('id'));
        $task->update([
            'heading' => $request->get('heading'),
            'description' => $request->get('description') 
        ]);
  
        return Common::store_or_update_or_delete_json_response('Successfully Updated', 200, 200, $task);
    }

    public function destroy($id)
    {   
        $task = Task::find($id);
        return Common::store_or_update_or_delete_json_response('Successfully Removed Task', 200, 200, $task->delete());
    }
}
