<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>
<body>


    <h1>Oi</h1>
    @foreach($funcionarios as $funcionario)
        <tr>
            <td>
                {{ $funcionario->nome }}
            </td>        
        </tr>
    @endforeach
    
    
</body>
</html>