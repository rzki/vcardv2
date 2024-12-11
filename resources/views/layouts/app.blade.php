<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') - {{ env('APP_NAME') }}</title>

    <link href="{{ asset('assets/css/adminkit.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        @include('components.sidebar')
        <div class="main">
            @include('components.navbar')
            <main class="content">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('assets/js/adminkit.js') }}"></script>
</body>

</html>
