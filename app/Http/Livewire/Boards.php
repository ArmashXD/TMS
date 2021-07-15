<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Boards extends Component
{
    public $tasks;

    public function render()
    {
        return view('livewire.boards.index');
    }

    public function updateBoard()
    {

    }
}
