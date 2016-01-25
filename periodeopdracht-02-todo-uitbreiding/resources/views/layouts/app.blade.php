<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Periodeopdracht 2</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .copyright {
            float: none !important;
            text-align: center;
            width: 100%;
            margin-top: 12.5px;
        }

        .success {
            color: #468847;
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
        }

        .modal {
            margin: 5px 0px;
            padding: 5px;
            border-radius: 5px;
        }

        .activate {
            position: relative;
            border:0;
            background-color:transparent;
            margin:0;
            padding:0 0 0 22px;
            cursor:pointer;
            outline-width:0;
        }

        .activate:before {
            content:"";
            position:absolute;
            top:2px;
            left:0;
            width:18px;
            height:18px;
            display:block;
            background-color:lightgrey;
            border-radius:100%;
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.08);
        }

        .positive {
            color: #468847;
        }

        .negative {
            color: #b94a48;
        }

        #toDo
        {
            
        }

        #toDo:hover
        {
            text-decoration: line-through;
        }

        #toDo:hover:before
        {
            content:"";
            background-color: #55F855;

        }

        #finished
        {
            text-decoration: line-through;
        }

        #finished:before
        {
            content:"";
            background-color: #55F855;
        }

        #finished:hover
        {
            text-decoration: none;
        }

        #finished:hover:before
        {
            background-color:lightgrey;
        }

        .toggleLink {
            color: inherit;
            text-decoration: none;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Jos's TODO LIST
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/tasks') }}">ToDos</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Logged in as {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout ({{ Auth::user()->email }})</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- FOOTER -->
    <footer>
        <nav class="navbar navbar-default">
            <p class="copyright">A Product by Jonas Van Eeckhout</p>
        </nav>
    </footer>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
