<div class="card shadow-lg rounded">
  <div class="card-title">

    <h2 style="margin: 10px"> Edit Task</h2>
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
    
      <form wire:submit.prevent="update()">
        <input type="hidden" wire:model="selected_id">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" wire:model="title" aria-describedby="emailHelp" placeholder="Enter Heading">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <textarea class="form-control" wire:model="content"></textarea>
        </div>
    
        <button type="submit" class="btn btn-success rounded shadow-lg float-right" >UPDATE</button>
      </form>
      <button class="btn btn-danger shadow-lg float-right font-weight-bold" style="margin-right: 4px;" wire:click="cancel()"> CANCEL</button>

  </div>  
</div>