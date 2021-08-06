<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
</head>
<body>

    <a href="/curso/cadastrar">Cadastrar novo curso</a>

    <h1>Cursos</h1>
    @foreach($cursos as $curso)
        <tr>
            <td> 
                <div> {{ $curso->nome }} </div>
            </td>
        </tr>
    @endforeach
    
</body>
</html>