<!DOCTYPE HTML>
<html>
<head>
    <title> @yield('title') - {{$user->name}}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
</head>
<body class="is-preload">
@yield('content')
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>
</body>
</html>