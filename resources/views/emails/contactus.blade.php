<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border: 1px solid #84BFC4;
            border-radius: 5px;
            padding: 0 20px 40px 20px;
        }
    </style>
</head>
<body>
    <table style="color: #20868F;text-align: center;margin: 0 auto; background-color: white; width: 80%; height: 500px;">
        
        <tr style="padding: 0">
            <th style="">
                <img src="http://localhost/ClinicaDental/public/img/catalina.png" style="width: 200px;" alt="">
                <h1>Nuevo Mensaje de Contacto</h1>
                <h3>Nombre: {{$correo->name}}</h3>
                <h3>Email: {{$correo->email}}</h3>
                <h3>Rut: {{$correo->rut}}</h3>
            </th>
        </tr>
        <tr>
            <td>
                <h2>Asunto,</h2>
                <p style="font-size: 1.1rem;padding: 0 20px;">{{$correo->description}}</p>
            </td>
        </tr>
        
    </table>
</body>
</html>