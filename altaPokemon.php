<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex</title>
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">
    <label for="numero">Ingrese número de Pokémon:</label>
    <input type="text" required name="numero" id="numero">
    <br>
    <br>

    <label for="imagen">Ingrese imagen</label>
    <input type="file" required name="imagen" id="imagen">
    <br>
    <br>

    <label for="nombre">Ingrese nombre del Pokémon:</label>
    <input type="text" required name="nombre" id="nombre">
    <br>
    <br>

    <label for="tipo">Seleccione el tipo del Pokémon:</label>
    <select required name="tipo" id="tipo">
        <option value=""></option>
        <option value="1">Agua</option>
        <option value="2">Fuego</option>
        <option value="3">Electrico</option>
        <option value="4">Psíquico</option>
        <option value="5">Tierra</option>
    </select>
    <br>
    <br>

    <label for="descripcion">Escriba una descripcion:</label>
    <textarea name="descripcion" required id="descripcion" cols="30" rows="10">
    </textarea>
    <br>
    <br>

    <button type="submit" name="submit">Subir Pokémon</button>
    <br>
</form>
</body>
</html>
<?php
