@extends('layout')

@section('content')

  <div class="row">
    <div class="col-lg-12">
      <form action="{{ route('todo.create')}}" method="post">
        <input type="text" name="todo" class="form-control input-lg" placeholder="create a new todo">
        {{ csrf_field() }}
      </form>
    </div>
  </div>

  <hr>
    @foreach ($todos as $todo)
      {{ $todo->todo }}
      <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger btn-xs">x</a>
      <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-success btn-xs">edit</a>

    <hr>
    @endforeach

@stop
