<!DOCTYPE html>
<html lang="en">
<head>
@include('partials._head')
@yield('stylesheets')
</head>
@include('partials._load')
<body id="app-layout">
@include('partials._nav')
    @yield('content')
@include('partials._footer')
   
    
</body>
</html>