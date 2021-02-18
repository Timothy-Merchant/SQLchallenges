<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <title>@yield("title")</title>
</head>

<body>

    @include("_partials/nav")

    <div class="container">
        <header>
        <h1 class="text-center">@yield('header') From the Veterinary Practice</h1>           
        </header>
    </div>

    <main>
        @yield("content")
    </main>

    @include("_partials/footer")
</body>

</html>
