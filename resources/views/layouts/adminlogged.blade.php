<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @include('includes.adminnavbar')
        <div>
            @yield('content')
        </div>
    </body>
</html>