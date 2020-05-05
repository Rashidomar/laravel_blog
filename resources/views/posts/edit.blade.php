@extends('layout/master')

@section('title')
    Edit Post
@endsection

@section('content')
        <div class="container col-md-9 col-md-offset-1">
            <div class="well well bs-component">
                <form class="form-horizontal" method="post" action="/posts/{{$post->id}}">
                    @csrf
                     @method("put")
                    <fieldset>
                        <legend>Edit Your Post</legend>
                        <div class="form-group">
                            <label for="title" class="col-lg-2 control-label">Title</label>
                            <div class="col-lg-10">
                                <input  type="text" class="form-control" placeholder="Title" name="title" value="{{$post->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-lg-2 control-label">Body</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" name="body">{{$post->body}}</textarea>
                                <span class="help-block">Just feel free</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <a href="/posts/{{$post->id}}" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
@endsection
