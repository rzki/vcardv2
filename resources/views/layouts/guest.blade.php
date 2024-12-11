<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

    <title>@yield('title') - {{ env('APP_NAME') }}</title>

    <link href="{{ asset('assets/css/adminkit.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="mx-auto col-sm-10 col-md-8 col-lg-6 col-xl-5 d-table h-100">
                    <div class="align-middle d-table-cell">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('assets/js/adminkit.js') }}"></script>

</body>

</html>
