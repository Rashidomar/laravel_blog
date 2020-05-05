@extends('layout/master')

@section('title')
    Dashboard
@endsection

@section('content')
<h1>Dash Board</h1>
<div class="card-body">
    Welcome {{ Auth()->user()->username }}
@endsection
