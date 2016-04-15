@extends("layouts.application")
@section("content")
<div id="users-list">
  @include('users.list')
</div>
<input id="direction" type="hidden" value="asc" />
@stop
