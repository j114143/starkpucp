<html>
<head>
    <title></title>
</head>
<body>
<h1>Iniciar Sesion</h1>
<form method="post">
    {!! csrf_field() !!}
<p>
    <label>Usuario:</label>
    <input type="text" name="usuario">
</p>
<p><input type="submit" value="Enviar"></p>
</form>

</body>
</html>