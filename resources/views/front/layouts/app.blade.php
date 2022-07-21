<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        @include('front.partials._headerlinks')</head>
        <body class="nav-md">
            <div class="container body">
                <div class="main_container">
                    @include('front.partials.header')
                    @yield('content')
                    @include('front.partials.footer')
                    @include('front.partials._footerlinks')
                </div>
            </div>
        </body>
        </html>
