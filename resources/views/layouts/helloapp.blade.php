<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>@yield('title')</h1>
            @section('menubar')
        <h2 class="menutitle">メニュー</h2>
        <ul>
            <li>@show</li>
        </ul>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>
