<div class="card shadow-lg rounded">
    <form  wire:submit.prevent="update()">

    <div class="card-header">
        Your Profile Settings
    </div>
    <div class="card-body">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" style="text-decoration: none; color: white">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      @if(Session::has('success'))
      <div class="alert alert-success">
        <div class="close" data-dismiss="alert">&times;</div>
        <strong>Success </strong>{{ Session::get('success') }}
      </div>
    @endif
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
