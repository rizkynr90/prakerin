@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h2>Dashboard</h2>

@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col ">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Selamat Datang <b>{{Auth::user()->name}}</b>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')

@stop
