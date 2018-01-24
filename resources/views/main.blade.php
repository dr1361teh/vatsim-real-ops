<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>

<body>
@include('partials._nav')
<div class="container-fluid maincontent">
    @include('partials._messages')
    @yield('content')
</div>
<br>
<div class="container-fluid footer">
    @include('partials._footer')
</div>
@include('partials._javascript')

@yield('scripts')
</body>
</html>