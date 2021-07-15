<div class="row">
    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
        <div class="card shadow-lg rounded">
            <div class="card-header" style="background-image: linear-gradient(to right,#2193b0, #6dd5ed); color: white;">
                <div class="card-title font-weight-bolder">
                    New
                </div>
            </div>
            <div class="card-body">
                    @foreach ($news as $new)
                    <div class="card" style="border-radius: 10px">
               
                          <div class="card-body">
                            {{ $new->task->heading }}
                            <div class="float-right">
                                <div class="dropdown">
                                    <div class="dropdown-toggle" type="button" id="dropdownMenu{{ $new->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu{{ $new->id }}">
                                      <input class="dropdown-item" wire:click="updateBoard({{$new->task->id}},2)" type="text" readonly value="In Progress" style="cursor: pointer"/>
                                      <input class="dropdown-item" wire:click="updateBoard({{$new->task->id}},3)"  type="text" readonly value="Pending" style="cursor: pointer"/>
                                      <input class="dropdown-item" wire:click="updateBoard({{$new->task->id}},4)"  type="text" readonly value="Completed" style="cursor: pointer"/>
                                      <input class="dropdown-item" wire:click="updateBoard({{$new->task->id}},5)"  type="text" readonly value="Due" style="cursor: pointer"/>
                                    </div>
                                  </div>
                            </div>
                          </div>
                          <div class="card-footer" style="background: transparent;">
                            <div class="float-right mt-2">
                                <span class="badge badge-primary">{{ $new->task->created_at->diffForHumans() }}</span>
                                <span class="badge badge-primary">{{ $new->task->priority->name }}</span>
                            </div>
                          </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
        <div class="card shadow-lg rounded">
            <div class="card-header" style="background-image: linear-gradient(to right,#fc4a1a, #f7b733); color: white;">
                <div class="card-title font-weight-bolder">
                    In Progress
                </div>
            </div>
            <div class="card-body">
                @foreach ($in_progress as $in)
                <div class="card" style="border-radius: 10px">
                    <div class="card-body">
                        {{ $in->task->heading }}
                        <div class="float-right">
                            <div class="dropdown">
                                <div class="dropdown-toggle" type="button" id="dropdownMenu{{ $in->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu{{ $in->id }}">
                                  <input class="dropdown-item" wire:click="updateBoard({{$in->task->id}},2)" type="text" readonly value="In Progress" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$in->task->id}},3)"  type="text" readonly value="Pending" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$in->task->id}},4)"  type="text" readonly value="Completed" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$in->task->id}},5)"  type="text" readonly value="Due" style="cursor: pointer"/>
                                </div>
                              </div>
                        </div>
                      </div>
                      <div class="card-footer" style="background: transparent;">
                        <div class="float-right mt-2">
                            <span class="badge badge-primary">{{ $in->task->created_at->diffForHumans() }}</span>
                            <span class="badge badge-primary">{{ $in->task->priority->name }}</span>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
        <div class="card shadow-lg rounded" >
            <div class="card-header" style="background-image: linear-gradient(to right,#CAC531, #F3F9A7); color: white;">
                <div class="card-title font-weight-bolder">
                    Pending
                </div>
            </div>
            <div class="card-body">
                @foreach ($pendings as $pending)
                <div class="card" style="border-radius: 10px">
                    <div class="card-body">
                        {{ $pending->task->heading }}
                        <div class="float-right">
                            <div class="dropdown">
                                <div class="dropdown-toggle" type="button" id="dropdownMenu{{ $pending->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu{{ $pending->id }}">
                                  <input class="dropdown-item" wire:click="updateBoard({{$pending->task->id}},2)" type="text" readonly value="In Progress" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$pending->task->id}},3)"  type="text" readonly value="Pending" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$pending->task->id}},4)"  type="text" readonly value="Completed" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$pending->task->id}},5)"  type="text" readonly value="Due" style="cursor: pointer"/>
                                </div>
                              </div>
                        </div>
                      </div>
                      <div class="card-footer" style="background: transparent;">
                        <div class="float-right mt-2">
                            <span class="badge badge-primary">{{ $pending->task->created_at->diffForHumans() }}</span>
                            <span class="badge badge-primary">{{ $pending->task->priority->name }}</span>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
        <div class="card shadow-lg rounded">
            <div class="card-header" style="background-image: linear-gradient(to right,#11998e, #38ef7d); color: white;">
                <div class="card-title font-weight-bolder">
                    Completed
                </div>
            </div>
            <div class="card-body">
                @foreach ($completed as $complete)
                <div class="card" style="border-radius: 10px">
                    <div class="card-body">
                        {{ $complete->task->heading }}
                        <div class="float-right">
                            <div class="dropdown">
                                <div class="dropdown-toggle" type="button" id="dropdownMenu{{ $complete->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu{{ $complete->id }}">
                                  <input class="dropdown-item" wire:click="updateBoard({{$complete->task->id}},2)" type="text" readonly value="In Progress" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$complete->task->id}},3)"  type="text" readonly value="Pending" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$complete->task->id}},4)"  type="text" readonly value="Completed" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$complete->task->id}},5)"  type="text" readonly value="Due" style="cursor: pointer"/>
                                </div>
                              </div>
                        </div>
                      </div>
                      <div class="card-footer" style="background: transparent;">
                        <div class="float-right mt-2">
                            <span class="badge badge-primary">{{ $complete->task->created_at->diffForHumans() }}</span>
                            <span class="badge badge-primary">{{ $complete->task->priority->name }}</span>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
        <div class="card shadow-lg rounded">
            <div class="card-header " style="background-image: linear-gradient(to right,#ED213A, #93291E); color: white;">
                <div class="card-title font-weight-bolder">
                    Due
                </div>
            </div>
            <div class="card-body">
                @foreach ($dues as $due)
                <div class="card" style="border-radius: 10px">
                    <div class="card-body">
                        {{ $due->task->heading }}
                        <div class="float-right">
                            <div class="dropdown">
                                <div class="dropdown-toggle" type="button" id="dropdownMenu{{ $due->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu{{ $due->id }}">
                                  <input class="dropdown-item" wire:click="updateBoard({{$due->task->id}},2)" type="text" readonly value="In Progress" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$due->task->id}},3)"  type="text" readonly value="Pending" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$due->task->id}},4)"  type="text" readonly value="Completed" style="cursor: pointer"/>
                                  <input class="dropdown-item" wire:click="updateBoard({{$due->task->id}},5)"  type="text" readonly value="Due" style="cursor: pointer"/>
                                </div>
                              </div>
                        </div>
                      </div>
                      <div class="card-footer" style="background: transparent;">
                        <div class="float-right mt-2">
                            <span class="badge badge-primary">{{ $due->task->created_at->diffForHumans() }}</span>
                            <span class="badge badge-primary">{{ $due->task->priority->name }}</span>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
