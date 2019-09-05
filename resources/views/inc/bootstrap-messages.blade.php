@if(count($errors) or session('error') or session('success'))
    <div class="container">
@if(count($errors))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif


@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif


@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@endif
    </div>