<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Listado de contactos</title>
</head>
<body>
<h1>
Listado de contactos, <a href="{{ url('contacts/create') }}">Crear contacto</a>
</h1>
<table border="1">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Teléfono</th>
</tr>
@for ($i = 0; $i < sizeof($contacts); $i++)
<tr>
<td>{{ $contacts[$i]->id }}</td>
<td>{{ $contacts[$i]->name }}</td>
<td>{{ $contacts[$i]->phone }}</td>
</tr>
@endfor
</table>
</body>
</html>
