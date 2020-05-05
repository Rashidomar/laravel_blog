@extends('layout/master')

@section('title')
    Sign Up Page
@endsection

@section('content')
        <div class="container col-md-9 col-md-offset-1">
            <div class="well well bs-component">
                <form class="form-horizontal" method="post" action="/user/register_user">
                    @csrf
                    <fieldset>
                        <legend>Sign Up</legend>
                        <div class="form-group">
                            <label for="title" class="col-lg-2 control-label">Username</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder="Username" name="username" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder="Email" name="email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder="Password" name="password" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                                <a href="/user" class="pull-right btn btn-default">Log In instead</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
@endsection
