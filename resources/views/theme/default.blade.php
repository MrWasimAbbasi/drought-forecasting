<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Compass Starter by Ariona, Rian</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="{!! asset ('theme/fonts/font-awesome.min.css')!!}" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="{!! asset('theme/style.css')!!}">



</head>
<body>
<div class="site-content">
    <div class="site-header">
        @include('theme.header')
    </div>
    @yield('onlyhome')
    <main class="main-content">
        @yield('content')
    </main>
    <footer class="site-footer">
        @include('theme.footer')
    </footer>
</div>


<!--[if lt IE 9]>
<script src="{!! asset('theme/js/ie-support/html5.js')!!}"></script>
<script src="{!! asset('theme/js/ie-support/respond.js')!!}"></script>
<![endif]-->
<script src="{!! asset('theme/js/jquery-1.11.1.min.js') !!}"></script>
<script src="{!! asset('theme/js/plugins.js') !!}"></script>
<script src="{!! asset('theme/js/app.js') !!}"></script>
</body>
</html>

