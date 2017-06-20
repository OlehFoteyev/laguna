<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Test</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-inverse navbar-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Test</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ action('MainController@index') }}">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            @if(Auth::user()->isAdmin())
                                <li>
                                    <a href="{{ url('/admin') }}">
                                        Админка
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
            </ul>
            <div class="col-md-6 text-right">
                <form action="{{ action('SearchController@index') }}"  method="get" class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" name="s" placeholder="поиск..."
                        value="{{ isset($s)? $s : '' }}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Поиск</button>
                    </div>
                </form>
            </div>
            {{--<form action="/search" method="post">
                {{ csrf_field() }}
                <input type="text" name="search">
                <input type="submit" value="search">
            </form>--}}
        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')


<script>


</script>
<script src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') }}"></script>
<script src=" {{URL::asset('js/bootstrap.js') }}"></script>
</body>
</html>