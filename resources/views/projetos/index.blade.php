<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos</title>
</head>
<body>

    <a href="/projeto/cadastrar">Cadastrar novo projeto</a>

    <h1>Projetos</h1>
    @foreach($projetos as $projeto)
        <tr>
            <td> 
                <div> {{ $projeto->nome }} </div>
            </td>
        </tr>
    @endforeach
    
</body>
</html>