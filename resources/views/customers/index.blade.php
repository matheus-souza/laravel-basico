<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <title>Laravel Básico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Bem vindo ao mundo Laravel!</h1>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Cidade/Estado</th>
                <th>Nascimento</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->cyte }} {{ $customer->state }}</td>
                    <td>{{ $customer->birthdate }}</td>
                    <td width="1%" nowrap="">
                        <a href="" class="btn btn-xs btn-primary">Editar</a>
                        <a href="" class="btn btn-xs btn-primary">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>