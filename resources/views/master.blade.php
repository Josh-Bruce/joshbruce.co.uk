<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Josh Bruce')</title>

    @yield('fonts')

    <!-- CSS -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63582751-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
    <!-- Header -->
    <header>

    </header>

    <!-- Main Content -->
    <main class="main" role="main">
        <div class="container">
            @yield('main')
        </div>
    </main>

    <!-- Footer -->
    <footer class="navbar-fixed-bottom">
        <div class="container">
            @yield('footer')
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ elixir('js/app.js') }}"></script>
    <script src="https://use.fontawesome.com/4f266d8fc1.js"></script>
</body>
</html>