@extends('layout/master')

@section('title')
    Post Details
@endsection

@section('content')
        <a href="/posts" class="btn btn-primary">Go Back</a>
        <hr>
        <div class="well">
           <h2>{{$post->title}}</h2>
           <p>{{$post->body}}</p>
           <small>{{$post->created_at}}</small>
           <hr>
           <a class="btn btn-primary" href="/posts/{{$post->id}}/edit"> Edit </a>
           <form method="POST" action="/posts/{{$post->id}}" class="pull-right">
            @csrf
            @method("delete")
                <input type="submit" class="btn btn-danger" value="Delete">
           </form>
        </div>
@endsection
