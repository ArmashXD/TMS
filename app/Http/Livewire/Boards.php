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
        return view('livewire.boards.index', ['news' => TaskBoard::BoardById(1)->OrderByDesc()->get(), 
        'in_progress' => TaskBoard::BoardById(2)->OrderByDesc()->get(), 
        'pendings' => TaskBoard::BoardById(3)->OrderByDesc()->get(),
        'completed' => TaskBoard::BoardById(4)->OrderByDesc()->get(),
        'dues' =>TaskBoard::BoardById(5)->OrderByDesc()->get()
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
