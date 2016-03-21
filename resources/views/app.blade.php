<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>测试wenda</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/all.css">

</head>
<body>

    @include('partials.nav')

    @include('flash::message')

    <div class="container navbar navbar-default" style="color: #ff8a00;margin-bottom: 60px" >

        @yield('content')


</div>

<script src="/js/all.js"></script>
    @yield('footer')
    <footer class="navbar navbar-default navbar-fixed-bottom" style="text-align: center;line-height: 40px">

        <p>© 2016 By 这是一个测试页面</p>

    </footer>


</body>
</html>