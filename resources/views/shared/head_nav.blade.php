<!--bagian navigation-->
<!--meta name="csrf-token" content="{!! csrf_token() !!}"/-->
    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"/>
            <span class="icon-bar"/>
            <span class="icon-bar"/>
          </button>

          {!! link_to('/','Training Boostrap',['class'=>'navbar-brand']) !!}
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#" id="article_link">Article</a>
            </li>
            <li>
                	{!! link_to('users', 'Users') !!}
            </li>
            <li>
            	{!! link_to('users/create', 'Signup') !!}
            </li>

            @if (Auth::check())
            <li>
              {!! link_to('/logout','Logout') !!}
            </li>
            @else
            <li>
              {!! link_to('sessions/create', 'Login') !!}
            </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
