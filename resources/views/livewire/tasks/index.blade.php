<div class="">
    <h4>YOUR TASKS
      
        @if($createMode)
        <button class="btn btn-danger float-right shadow-lg rounded font-weight-bold" wire:click="$set('createMode', false)"> 
            CANCEL
         </button>
        @else
        <button class="btn btn-success float-right shadow-lg rounded font-weight-bold" wire:click="$set('createMode', true)"> 
            ADD NEW
        </button>
        @endif
        <a href="{{ route('home') }}" class="btn btn-default float-right shadow-lg rounded font-weight-bold mr-2"> 
            BACK
        </a>
    </h4>
  <br><br>
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
  @if($updateMode)
  @include('livewire.tasks.edit')
  @else
  @if($createMode)
  @include('livewire.tasks.create')
  @endif
  @endif

  <br>
  <br>
 <div class="row">
    @foreach($tasks as $key => $row)
    <div class="col-md-4">
    <div class="card rounded shadow"> 
            <div class="card-header" style="margin: 10px">
                <h3>{{$row->heading}}
                    <i class="fa fa-times float-right"
                    style="font-size: 1rem; margin-top: 1.4%; color: red; cursor: pointer;"  onclick="confirm('Are you sure you want to remove the Task ?') || event.stopImmediatePropagation()" 
                      wire:click="destroy({{$row->id}})"></i>
                   </h3>
        
        </div>
        <div class="card-body">
            <p>@php echo StringHelper::readMore($row->description, 320); @endphp</p>
        </div>
        <div class="card-footer"> 
            <button wire:click="edit({{$row->id}})" class="btn btn-info py-0"><i class="fa fa-pen"></i></button> 
            <span  wire:click="changeStatus({{ $row->id }})" class="badge badge-{{ $row->status ? 'success' : 'danger' }}" style="margin-top: 4px;">{{ $row->status ? 'ACTIVE' : 'IN-ACTIVE' }}</span>
            {{-- @if ($show == true)
            <button wire:click="$set('show', false)" class="btn btn-secondary py-0"><i class="fa fa-eye"></i></button> 
            @else
            <button wire:click="$set('show', true)" class="btn btn-outline-secondary py-0"><i class="fa fa-eye"></i></button> 
            @endif --}}
            <span class="badge badge-primary float-right" style="margin-top: 4px;">
                {{ $row->created_at->diffForHumans() }}
              </span>
        </div>
    </div>
</div>
<br>
      
    @endforeach
</div>

</div>
