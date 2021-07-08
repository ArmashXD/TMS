@extends('adminlte::page')

@section('title', 'Profile Settings')

@section('content_header')
    <h1 class="m-0 text-dark">Your Profile</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
                    <livewire:user/>
        </div>
    </div>
@stop
