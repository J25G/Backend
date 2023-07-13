<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Contacto</title>
</head>

<body>
    <h1>
        Crear contacto,
        <a href="{{ url('contacts') }}">Volver al listado</a>
    </h1>
    <form action="{{ url('contacts/store') }}" method="POST">
        @csrf

        HTML Básico y CRud Web 5

        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="phone">Teléfono</label>
        <input type="text" name="phone" id="phone">
        <br>
        <button type="submit">Crear contacto</button>
    </form>
</body>

</html>

<body>
    <h2>Crear contacto</h2>
    <form action="{{ url('contacts/store') }}" method="POST">
        @csrf

        <label for="full_name">Nombre completo</label>
        <input type="text" id="full_name" name="full_name">