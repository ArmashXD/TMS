@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">DASHBOARD 

        <a href="{{ route('tasks.index') }}" class="btn btn-success font-weight-bolder text-white float-right">YOUR TASKS</a>
    </h1>
@stop

@section('content')
    <div>
        <livewire:boards/>
    </div>
@stop
