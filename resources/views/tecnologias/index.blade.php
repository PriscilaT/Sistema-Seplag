<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnologia</title>
</head>
<body>

    <a href="/tecnologia/cadastrar">Cadastrar nova tecnologia</a>

    <h1>Tecnologias</h1>
    @foreach($tecnologias as $tecnologia)
        <tr>
            <td> 
                <div> {{ $tecnologia->nome }} </div>
            </td>
        </tr>
    @endforeach
    
</body>
</html>