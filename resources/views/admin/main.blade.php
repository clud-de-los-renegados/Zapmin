<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>@yield('title','default')| Página inicial</title>
     <!-- <link rel="stylesheet" href="../public/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    @include('admin.patrials.nav')

    <section>
        @yield('content')
    </section>

    
    <footer>
        @include('admin.patrials.pie')
    </footer>
    
    <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>