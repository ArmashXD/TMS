@extends('adminlte::page')

@section('title', 'Tasks')

@section('content_header')
    <h1 class="m-0 text-dark">Your Tasks</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
         
                    <livewire:tasks/>
            
        </div>
    </div>
@stop
