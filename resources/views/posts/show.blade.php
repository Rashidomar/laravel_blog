@extends('layout/master')

@section('title')
    Post Details
@endsection

@section('content')
        <a href="/posts" class="btn btn-primary">Go Back</a>
        <div class="well">
           <h2>{{$post->title}}</h2>
           <p>{{$post->body}}</p>
           <small>{{$post->created_at}}</small>
        </div>
@endsection
