@extends("layouts.application")
@section("content")
<div id="articles-list">
  @include('articles.list')
</div>
<input id="direction" type="hidden" value="asc" />
@stop
