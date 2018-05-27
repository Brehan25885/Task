@extends('layouts.app')


@section('content')
<div class="container">
<h1 class="text-center">Tasks Index</h1>
<a href="tasks/create" class="btn btn-success">Create New Post </a>

<table class="table">
<tbody>
@foreach ($tasks as $task)
<tr>
<td>
{{ $task->tasks_list }} </td>
<td>
{{ $task->user->name }} </td>
@endforeach
</table>
</div>

@endsection
