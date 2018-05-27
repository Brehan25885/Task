@extends('layouts.app')


@section('content')
<div class="container">
<h1 class="text-center">Tasks Index</h1>
<a href="tasks/create" class="btn btn-success">Create New Task </a>

<table class="table">
<tbody>
@foreach ($tasks as $task)
<tr>
<td>
{{ $task->tasks_list }} </td>
<td>
{{ $task->user->name }} </td>
<td >
<form method="post" action="/tasks/{{$task->id}}" >
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button onclick="return confirm('are you sure')" type="submit" class="btn btn-danger" > Delete </button>
</form>
</td>
@endforeach
</table>
</div>

@endsection
