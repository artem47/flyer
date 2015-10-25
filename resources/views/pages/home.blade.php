@extends('layout')


@section('content')

    <div class="jumbotron">
        <h1>ProjectFlyer</h1>

        <p>
            This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point
            to create something more unique by building on or modifying it.
        </p>

        @if($signedIn)
            <a href="/flyers/create" class="btn btn-primary">Создать флаер</a>
        @else
            <a href="/auth/register" class="btn btn-primary">SignUp</a>
            or
            <a href="/auth/login" class="btn btn-primary">SignIn</a>
        @endif
    </div>

@stop
