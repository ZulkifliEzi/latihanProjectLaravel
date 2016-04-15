<div>
  {!! link_to('articles/create', 'Write Article', array('class' => 'btn btn-success')) !!}
</div>
<br />
<p>Sort Article by : <a href="#" id="id">Sort ID  &nbsp;<i id="ic-direction"></i></a></p>
<br />
  @foreach ($articles as $article)
    <div>
      <p>{{$article->id}}</p>
      <h1>{{$article->title}}</h1>
      <p>{{$article->content}}</p>
      <i>By {{$article->author}}</i>

      <div>
          @if(Auth::user()->role == 'reader')
            {!! link_to('articles/'.$article->id, 'Show', array('class' => 'btn btn-info')) !!}
          @else
          {!! link_to('articles/'.$article->id, 'Show', array('class' => 'btn btn-info')) !!}
          {!! link_to('articles/'.$article->id.'/edit', 'Edit', array('class' => 'btn btn-warning')) !!}
          {!! Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')) !!}
            {!! Form::submit('Delete', array('class' => 'btn btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
          {!! Form::close() !!}
          @endif
      </div>
    </div>
  @endforeach
  <div>
    {!! $articles->render() !!}
  </div>
