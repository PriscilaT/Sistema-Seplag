<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos</title>
</head>
<body>

    <a href="/cargo/cadastrar">Cadastrar novo cargo</a>

    <h1>Cargos</h1>
    @foreach($cargos as $cargo)
        <tr>
            <td> 
                <div> {{ $cargo->nome }} </div>
            </td>
        </tr>
    @endforeach
    
</body>
</html>