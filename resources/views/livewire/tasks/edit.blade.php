<div class="card shadow-lg rounded">
  <div class="card-title">

    <h2 style="margin: 10px"> EDIT TASK</h2>
  </div>
  <div class="card-body">
      <form wire:submit.prevent="update()">
        <input type="hidden" wire:model="selected_id">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" wire:model="title" aria-describedby="emailHelp" placeholder="Enter Heading">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <textarea class="form-control" wire:model="content" rows="10"></textarea>
        </div>
    
        <button type="submit" class="btn btn-success rounded shadow-lg float-right" >UPDATE</button>
      </form>
      <button class="btn btn-danger shadow-lg float-right font-weight-bold" style="margin-right: 4px;" wire:click="cancel()"> CANCEL</button>

  </div>  
</div>