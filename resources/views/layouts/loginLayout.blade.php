<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$seo['title'] ?? 'ecommerce'}}</title>
    <link rel="icon" href="assets/servers/images/favicon.html" type="image/x-icon">

    <!-- project css file  -->
    <link rel="stylesheet" href="assets/servers/css/ebazar.style.min.css">

</head>

<body>
    <div class="main ">
        <main>
            @yield('content')
        </main>

    </div>


    <!-- Jquery Core Js -->
    <script src="assets/servers/bundles/libscripts.bundle.js"></script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>


</html>