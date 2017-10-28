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

  {{-- @if(!empty($todos)) --}}
  @if($todos->count()>0)
    @foreach ($todos as $todo)
      {{ $todo->todo }}
      <a href="{{ route('todo.view', ['id' => $todo->id]) }}" class="btn btn-success btn-xs">view</a>
      <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-warning btn-xs">edit</a>
      <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">x</a>
    <hr>
    @endforeach
  @else
    <div class="alert alert-danger">You have no data</div>
  @endif

  {{-- {!! $todos->render() !!} --}}
  {!! $todos->links() !!}
@stop
