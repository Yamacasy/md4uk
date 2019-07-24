<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<header>
        @include('includes.header')
</header>
@include('includes.jumbotron')
<div class="container">

    

    

            @yield('content')

</div>
<footer >
        @include('includes.footer')
    </footer>
</body>
</html>