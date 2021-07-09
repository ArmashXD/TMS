<div class="card shadow-lg rounded">
  <div class="card-title">

    <h2 style="margin: 10px"> ADD NEW TASK
    </h2>
  </div>
  <div class="card-body">

    
      <form wire:submit.prevent="storeTask()">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" wire:model="title" aria-describedby="emailHelp" placeholder="Enter Heading">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <textarea class="form-control" wire:model="content" id="mytextarea"></textarea>
        </div>
    
        <button type="submit" class="btn btn-success rounded shadow-lg float-right font-weight-bold" >CREATE</button>
      </form>
    </div>

</div>

<script>
    // tinymce.init({
    //     selector: '#mytextarea'
    //   });
</script>