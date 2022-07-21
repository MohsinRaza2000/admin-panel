<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Blog Admin-Blog</title>
    @include('admin.partials._headerlinks')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('admin.partials.header')
            @include('admin.partials._sidebar')
            @yield('content')
            @include('admin.partials.footer')
            @include('admin.partials._footerlinks')
        </div>
    </div>
</body>

</html>
