<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- CSS build by TailwindCSS -->
    <!-- Dont' forget to re-link -->
    {{-- <link rel="stylesheet" href="{{ asset('../css/style.css') }}" /> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- -------------------------------------------------------------------------------------- -->
    <!-- | To make it resposively: Need to add these class to all direct element after <body> | -->
    <!-- |           class="px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50"              | -->
    <!-- -------------------------------------------------------------------------------------- -->

    {{-- HEADER COMPONENT --}}
    @include('frontend.body.header')

    @yield('main')

    {{-- FOOTER COMPONENT --}}
    @include('frontend.body.footer')

</body>

</html>
