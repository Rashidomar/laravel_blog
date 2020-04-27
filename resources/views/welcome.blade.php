@extends('layout.master')

@section('title')
    Home
@endsection

@section('content')
    <h1> Login Page </h1>
    <form method="POST" action="">
        Username :
        <br>
        <input type="text" name="username">
        <br>
        Email :
        <br>
        <input type="text" name="email">
        <br>
        Password :
        <br>
        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" name="signup" value="Sign Up">
        <input type="hidden" name="_token" value="">
    </form>
@endsection
