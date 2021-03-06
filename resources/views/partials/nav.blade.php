<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom  navbar-fixed-top" style="
    background-color: #222;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/">LikeAshraful</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a class="" href="/">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/resume">Resume</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="/blog">Blog</a>
                    </li>
                    
                     @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    @endif
                    
                    <li>
                    {!! Form::open(['url'=>'/blog', 'method' => 'GET', 'class' => 'navbar-form', 'role' => 'search']) !!}
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    </li>
                                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>