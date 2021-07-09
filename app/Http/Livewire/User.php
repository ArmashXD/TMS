<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as ModelUser;

class User extends Component
{
    public $email, $name;

    public function render()
    {
        return view('livewire.user.profile', [$this->email => auth()->user()->email, $this->name => auth()->user()->name]);
    }

    public function update()
    {
       $this->validate([
            'name' => 'required|min:4|max:20',
            'email' => 'required',
        ]);
  
      $user = ModelUser::find(auth()->id());
      $user->update([
        'name' => $this->name,
        'email' => $this->email,
      ]);

      session()->flash('success','Updated Successfully');
    }

}
