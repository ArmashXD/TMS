<div class="">
  @if($updateMode)
  @include('livewire.tasks.edit')
  @else
  @include('livewire.tasks.create')
  @endif

  <br>
  <br>
  <table class="table table-striped" style="margin-top:20px;">
    <tr>
        <td>NO</td>
        <td>Title</td>
        <td>Content</td>
        <td>Created At</td>
        <td>Action</td>
    </tr>

    @foreach($tasks as $key => $row)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$row->heading}}</td>
            <td>{{$row->description}}</td>
            <td>
                {{ $row->created_at->diffForHumans() }}
            </td>
            <td>
              <button wire:click="edit({{$row->id}})" class="btn btn-sm btn-info py-0"><i class="fa fa-pen"></i></button> | 
              <button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-danger py-0"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
    @endforeach
</table>
</div>
