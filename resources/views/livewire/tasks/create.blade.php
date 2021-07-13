<div class="card shadow-lg rounded">
  <div class="card-title">

    <h2 style="margin: 10px"> ADD NEW TASK
    </h2>
  </div>
  <div class="card-body">

    
      <form wire:submit.prevent="storeTask()">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
            <div class="form-group ">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" wire:model="title" aria-describedby="emailHelp" placeholder="Enter Heading">
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
            <div class="form-group ">
              <label for="exampleInputEmail1">Priority</label>
              <select type="text" class="form-control" wire:model="priority">
                <option value="">Please Select</option>
                @php 
                $priorities = App\Models\Priority::orderBy('id','desc')->get();
                @endphp
                @foreach ($priorities as $item)
                    <option value="{{ $item->id }}">{{ $item->name }} (LEVEL {{ $item->level }}) </option>
                @endforeach
              </select>
            </div>
          </div>
          
          <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <div class="form-group ">
              <label for="exampleInputPassword1">Content</label>
              <textarea class="form-control" wire:model="content" rows="10"></textarea>
            </div>
          </div>
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