@extends('layouts.master')


@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
<form method="post" action="/tasks">
{{csrf_field()}}
Task :- 
<input name="tasks_list"></input>
<br>
<br>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
</div>
@endsection