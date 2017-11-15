<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <title>Laravel Básico</title>
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