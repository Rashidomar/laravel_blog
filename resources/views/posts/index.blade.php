@extends('layout/master')

@section('title')
    Posts
@endsection

@section('content')
    <p>Posts</p>
    @if (count($posts) > 0)
        @foreach ( $posts as $post)
            <div class="well">
               <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a> </h4>
               <small>{{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>There is no Posts</p>
    @endif

@endsection
