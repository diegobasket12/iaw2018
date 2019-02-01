<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NIF</title>
    <style>
        body{
            text-align: center;
        }
        button,input{
            width: 40%;
            height: 2em;
        }
        button{
            color: white;
            background-color: blue;
            outline: none;
            border: none;
        }
    </style>
</head>
<body>
<h1>Validación DNI</h1>
<form>
    <label for="nif">Introduzca su nif</label><br>
    <input type="text" id="nif" name="nif"><br>
    <button id="validar" type="button">Validar</button>
</form>
<p id="resultado"></p>
<script src="jquery-3.3.1.js"></script>
<script src="accion.js?v=1"></script>
</body>
</html>