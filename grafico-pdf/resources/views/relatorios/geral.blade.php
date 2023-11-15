<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório de Veículos - Geral</title>
</head>
<body>
    <div style="width: 20%; float:left">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/img/logo.png'))) }}" width="96" height="96">
    </div>
    <div style="width: 80%; float:right">
        <h1 style="text-align: center;">Rent a Car: Sistema de Gerenciamento</h1>
        <h4 style="text-align: center;">Aluguel de Veículos</h4>
    </div>    
    <br><br><br><br><br><br><hr>
    <div style="text-align: center;">
        <h2>Relatório de Veículos: GERAL</h2>
    </div>
    <br>
    <table>
        <thead>
            <tr style="text-align: center;">
                <th style="width: 23px; border-style: solid; border-width: 1px;">MARCA/MODELO</th>
                <th style="width: 230px; border-style: solid; border-width: 1px;">COR</th>
                <th style="width: 230px; border-style: solid; border-width: 1px;">PLACA</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr style="text-align: center;"> 
                <td style="width: 230px;">{{ $item['marca'] }} - {{ $item['modelo'] }}</td>
                <td style="width: 230px;">{{ $item['cor'] }}</td>
                <td style="width: 230px;">{{ $item['placa'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>