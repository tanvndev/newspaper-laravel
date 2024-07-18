<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    {{-- head --}}
    @include('clients.includes.head')

</head>

<body class="home home-2">
    <!-- Site wrapper -->
    <div class="site-wrapper">
        {{-- header --}}
        @include('clients.includes.header')
        <main>
            @yield('content')
        </main>

        {{-- footer --}}
        @include('clients.includes.footer')
    </div>

    {{-- Alert sweetalert --}}
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    {{-- Script --}}
    @include('clients.includes.script')


</body>


</html>