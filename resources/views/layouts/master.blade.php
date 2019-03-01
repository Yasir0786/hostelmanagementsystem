<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href={{ asset( 'css/app.css') }} rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href={{asset( 'dist/css/bootstrap.min.css')}} rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{asset( "css/starter-template.css ")}} rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>

<nav class="navbar navbar-expand-md navbar-light bg-secondary fixed-top">
    <a class="navbar-brand" href="#">Hostel Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('people.create') }}">Add new Person </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('people.index') }}">View All People </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('rooms.create') }}">Add New Room</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('rooms.index') }}">View All Rooms </a>
            </li>


        </ul>

    </div>
</nav>

<main role="main" class="container">

    @yield('main-content')

</main>
<!-- /.container -->

<!-- Bootstrap core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="{{asset("assets/js/vendor/jquery-slim.min.js")}}"><\/script>')
</script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>

</body>

</html>