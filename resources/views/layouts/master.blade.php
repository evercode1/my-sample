<!DOCTYPE html>
<html lang="en">
<head>

    @include(('layouts.meta'))

    @yield('title')

    @include('layouts.css')

    @yield('css')

</head>

<body role="document">

<div id="app">

@include('layouts.facebook')

@include('layouts.nav')

<div class="container theme-showcase" role="main">

    @yield('content')

    @include('layouts.bottom')

</div>

</div>

@include('layouts.scripts')

@include('Alerts::show')

@yield('scripts')

</body>
</html>