<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituição</title>
</head>
<body>

    <a href="/instituicao/cadastrar">Cadastrar nova instituição</a>

    <h1>Instituição</h1>
    @foreach($instituicoes as $instituicao)
        <tr>
            <td>
                <div> {{ $instituicao->nome }} </div>
            </td>
        </tr>
    @endforeach
    
</body>
</html>