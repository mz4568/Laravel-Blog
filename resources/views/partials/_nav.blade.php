
 <div class="container-fluid"> 
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{url('home')}}">Home</a></li>
        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="{{url('about')}}">About</a></li>
        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="{{url('contact')}}">Contact</a></li>

      </ul>
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('posts.index') }}">Posts</a></li>
        <li><a href="{{ route('categories.index') }}">Categories</a></li>
        <li><a href="{{ route('tags.index') }}">Tags</a></li>
        <li><a href="{{url('blog')}}">Blog</a></li>
         <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="">Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('logOut')}}">Logout</a></li>
          </ul>
        </li>
        
        @if(Auth::check())
        <li><a href="">Login Name:{{Auth::user()->name}}</a></li>
        @endif

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>