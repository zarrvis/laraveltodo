@extends('layout')

@section('content')

  <div class="row">
    <div class="col-lg-12">
      <form action="{{ route('todo.save', ['id' => $todo->id ]) }}" method="post">
        <input type="text" name="todo" class="form-control input-lg" value="{{ $todo->todo }}" placeholder="create a new todo" >
        {{ csrf_field() }}
      </form>
    </div>
  </div>

@stop
