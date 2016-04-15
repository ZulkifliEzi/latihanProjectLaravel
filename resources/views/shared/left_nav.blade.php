<div class="col-xs-12 col-sm-3 side pull-left sidebar-offcanvas" id="sidebar" role="navigation">
  <div class="list-group">
    @if(Auth::check())
    <h4>Hello :{!! ucfirst(Auth::user()->name) !!}</h4>
    @else
    <h1> Jambal Ralavel </h1>
    @endif
  </div>
</div>
