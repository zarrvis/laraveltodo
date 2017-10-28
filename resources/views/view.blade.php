@extends('layout')

@section('content')

  <div class="row">
    <div class="col-lg-12">
      <form class="form-horizontal">
        <div class="alert alert-info">
          {{ $views->todo }}
        </div>
        <a href="{{ route('todos') }}" class="btn btn-info">back to home</a>
        {{-- give button back here --}}
        {{ csrf_field() }}
      </form>
    </div>
  </div>

@stop
