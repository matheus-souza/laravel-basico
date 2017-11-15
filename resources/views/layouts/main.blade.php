<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <title>Laravel Básico @yield('page-title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Bem vindo ao mundo Laravel!</h1>

        @yield('content')
    </div>
</body>
</html>