<div class="card shadow-lg rounded">
    <form  wire:submit.prevent="update">

    <div class="card-header">
        Your Profile Settings
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="name" aria-describedby="emailHelp" placeholder="{{ auth()->user()->name }}" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email address</label>
            <input type="email" wire:model="email" class="form-control" id="exampleInputPassword1" placeholder="{{ auth()->user()->email }}" >
          </div>
      
    </div>
    <div class="card-footer">
        <button class="btn btn-success shadow-lg rounded float-right font-weight-bold" >UPDATE</button>
    </div>
</form>

</div>
