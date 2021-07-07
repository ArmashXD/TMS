<div>
    <h2> Create A New Task</h2>

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
    
      <form wire:submit.prevent="storeTask()">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" wire:model="title" aria-describedby="emailHelp" placeholder="Enter Heading">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <textarea class="form-control" wire:model="content"></textarea>
        </div>
    
        <button type="submit" class="btn btn-success rounded shadow-lg float-right" >Submit</button>
      </form>
    
</div>