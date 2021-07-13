<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Helpers\StringHelper;

class Tasks extends Component
{
    public $userId, $title, $content, $selected_id;
    public $updateMode = false;
    public $createMode = false;
    public $description = "";

    public function render()
    {
        return view('livewire.tasks.index', ['tasks' => Task::all()]);
    }

    public function changeStatus($id)
    {
        $task = Task::find($id);
        $task->status = $task->status == false ? true : false;
        $task->update();
    }

    public function storeTask()
    {
        $this->validate([
            'title' => 'required|min:5',
        ]);
        Task::create([
            'user_id' => auth()->id(),
            'heading' => $this->title,
            'description' => $this->content,
        ]);      
        session()->flash('success','Stored Successfully');
        $this->resetInput();

    }

    public function edit($id)
    {
        $task = Task::findOrfail($id);
        $this->selected_id = $id;
        $this->title = $task->heading;
        $this->content = $task->description;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'title' => 'required|min:5',
        ]);
        if ($this->selected_id) {
            $record = Task::find($this->selected_id);
            $record->update([
                'heading' => $this->title,
                'description' => $this->content,
            ]);
            $this->updateMode = false;
        }
        session()->flash('success','Updated Successfully');
        $this->resetInput();
    }

    public function destroy($id)
    {
        $task = Task::findOrfail($id);
        $task->delete($id);
        session()->flash('success','Deleted Successfully');
    }

    public function cancel()
    {
        $this->updateMode = false;
    }

    public function resetInput()
    {
        $this->title = '';
        $this->content = '';
    }
}
