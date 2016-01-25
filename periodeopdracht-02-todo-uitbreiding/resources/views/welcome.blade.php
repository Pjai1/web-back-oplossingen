@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    This is the Landing Page of the Application "periodeodracht-02-todo-uitbreiding". Please <a href="{{ url('/register') }}">Register</a> to build and maintain a ToDo List or <a href="{{ url('/login') }}">Login</a> to check-out your ToDo List.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
