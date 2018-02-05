@extends('layout.app')

@section('content')
<h1>Todos</h1>
@if(count($todos))
    @foreach($todos as $todo)
        <div class="card mb-3">
            <h3 class="card-body"> <a href="todo/{{$todo->id}}">{{$todo->text}}</a> &nbsp; &nbsp;  <span class="badge badge-danger">{{$todo->due}}</span> <a href="todo/{{$todo->id}}/delete" class="btn  btn-lg delete-icon text-muted float-right">&times;</a></h3>
        </div>  
    @endforeach
@endif
@endsection

@section('scripts')
<script>
    $('.card').mouseover(function(){
        $(this).find('.delete-icon').css('visibility','visible');
    });
     $('.card').mouseout(function(){
        $(this).find('.delete-icon').css('visibility','hidden');
    });
</script>
@endsection