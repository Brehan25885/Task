@extends('layouts.app')


@section('content')
<div class="container">
<h1 class="text-center">Tasks Index</h1>
<table class="table">
<tbody>
@foreach ($tasks as $task)
<tr>
<td>
{{ $task->tasks_list }} </td>
<td>
{{ $post->user->name }} </td>
@endforeach
</table>
</div>

@endsection
