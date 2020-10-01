@extends('layouts.app')
<style>
    .gg{
        margin: 0 40px;
    }
</style>

@section('content')

    <h1 class="gg">
        Hello, {{Auth::user()->name}}! <br>
        Your e-mail {{Auth::user()->email}} <br>
        Your account was created at {{Auth::user()->created_at}} <br>
        Your password {{Auth::user()->password}} on zakodirovan XD<br>
        <a href="{{ url('/logout') }}"
           onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
            Logout
        </a>
   </h1>
@endsection