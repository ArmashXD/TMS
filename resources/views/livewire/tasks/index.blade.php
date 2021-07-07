<div class="">
  @if($updateMode)
  @include('livewire.tasks.edit')
  @else
  @include('livewire.tasks.create')
  @endif

  <br>
  <br>
 
    @foreach($tasks as $key => $row)
        <div class="card">
            <div class="card-title" style="margin: 10px">
                <h3>{{$row->heading}}</h3>
                <hr>
        </div>
        <div class="card-body">
            <p>{{$row->description}}</p>
            <td>
                {{ $row->created_at->diffForHumans() }}
            </td>
            <div style="display: flex">
              <button wire:click="edit({{$row->id}})" class="btn btn-sm btn-info py-0"><i class="fa fa-pen"></i></button> | 
              <button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-danger py-0"><i class="fa fa-trash"></i></button>
            </div>
        </div>
        </div>
    @endforeach
</div>
