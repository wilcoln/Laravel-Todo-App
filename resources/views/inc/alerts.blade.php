@if(count($errors))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <i class="close" data-dismiss="alert">&times;</i>
             {{$error}}
        </div> 
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        <span class="close" data-dismiss="alert">&times;</span>
         {{session('success')}}
    </div> 
@endif