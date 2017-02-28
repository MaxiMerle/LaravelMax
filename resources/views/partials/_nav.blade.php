

    <!-- Default Bootstrap Navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BlogMaster @yield('title')</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
            <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>

            <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">A Propos</a></li>
            <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenue {{ Auth::user()->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('posts.index')}}">Espace Admin</a></li>
                 <li><a href="/resizeImage">Ajouter une image</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">{{ link_to_route('logout', 'Deconnexion') }}</a></li>
              </ul>
            </li>
            @else
            <a href="/login" class="btn btn-default" style="margin-top: 10px;">Connexion</a>
            <a href="users/create" class="btn btn-default" style="margin-top: 10px;">Inscription</a>
            @endif
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>