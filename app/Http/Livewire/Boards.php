<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Models\Board;
use App\Models\TaskBoard;
use DB;
class Boards extends Component
{
    public $tasks;

    public function render()
    {
        return view('livewire.boards.index', ['news' => TaskBoard::where('board_id', 1)->orderBy('id','desc')->get(), 
        'in_progress' => TaskBoard::where('board_id', 2)->orderBy('id','desc')->get(), 
        'pendings' => TaskBoard::where('board_id', 3)->orderBy('id','desc')->get(),
        'completed' => TaskBoard::where('board_id', 4)->orderBy('id','desc')->get(),
        'dues' =>TaskBoard::where('board_id', 5)->orderBy('id','desc')->get()
    ]);
    }

    public function updateBoard($taskId, $board)
    {
        DB::transaction(function() use($taskId, $board){
            $task = DB::table('task_boards')->where(['task_id' => $taskId])->delete();
            TaskBoard::create(['task_id' => $taskId, 'board_id' => $board]);
        });
    }
}
