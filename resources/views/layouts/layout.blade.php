<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
            <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all">
    <style>
        body {
            background-color: wheat;
            background-size: cover;
            background-position: center;
        }
        .tittle{
            font-weight: bold;
            font-family: 'Palatino';
            font-size: 50px;
        }
    </style>
</head>
<body>
    <main class="py-5">
        @yield('content_welcome')
    </main>
    <script type="module">
        $('body').html('<h1>Hello World!</h1>');
    </script>
    @yield('scripts')
</body>
</html>