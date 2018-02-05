@extends('layout.app')

@section('content')
    <a href="/" class="btn btn-primary">Go back</a>
    <h1 class="card-body"> <a href="/todo/{{$todo->id}}">{{$todo->text}}</a></h1>
    <div class="badge badge-danger">{{$todo->due}}</div>
    <hr>
    <p>{{$todo->body}}</p>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-warning">Edit</a> &nbsp;
    <a href="/todo/{{$todo->id}}/delete" class="btn btn-danger">Delete</a>
@endsection