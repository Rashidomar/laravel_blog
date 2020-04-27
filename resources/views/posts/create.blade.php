@extends('layout/master')

@section('title')
    Post Create
@endsection

@section('content')
        <a href="/posts" class="btn btn-primary">Go Back</a>
        <div class="container col-md-9 col-md-offset-1">
            <div class="well well bs-component">
                <form class="form-horizontal" method="post" action="{{url('posts/')}}">
                    @csrf
                    {{-- @method("put") --}}
                    <fieldset>
                        <legend>Write Your Post</legend>
                        <div class="form-group">
                            <label for="title" class="col-lg-2 control-label">Title</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="title" placeholder="Title"b name="title" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-lg-2 control-label">Body</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="content" name="body"></textarea>
                                <span class="help-block">Just feel free</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
@endsection
