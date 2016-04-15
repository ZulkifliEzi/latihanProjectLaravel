@extends("layouts.application")
@section("content")
  <div>
    <h1>{!! $user->name !!}</h1>
    <p>{!! $user->email!!}</p>
    <i>By {!! $user->role !!}</i>
  </div>

@stop
