@extends('layout.app')

@section('content')
<form action="/todo/{{$todo->id}}/update" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="text">Text</label>
        <input type="text"  id="text" name="text" class="form-control" placeholder="todo text" value="{{$todo->text}}">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea id="body" name="body" class="form-control" placeholder="todo body" rows="4">{{$todo->body}}</textarea>
    </div>
     <div class="form-group">
        <label for="text">Due</label>
        <input type="date" id="due" name="due" class="form-control" value="{{$todo->due}}">
    </div>
    <input type="submit" class="btn btn-primary btn-lg" value="save">
</form>
@endsection