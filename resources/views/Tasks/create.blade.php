<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Task</title>
</head>

<body>
    <form action="{{ url('tasks/store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Título de la tarea">
        <br><br>
        <input type="text" name="description" placeholder="Descripción de la tarea">
        <br><br>



        <button type="submit">Crear</button>
    </form>
</body>

</html>

use App\Http\Controllers\Web\Tasks\CreateTaskController;
Route::get('tasks/create', CreateTaskController::class);

use App\Http\Controllers\Web\Tasks\CreateTaskController;
Route::get('tasks/create', CreateTaskController::class);
Route::post('tasks/store', ) 

use App\Http\Controllers\Web\Tasks\CreateTaskController;
use App\Http\Controllers\Web\Tasks\StoreTaskController;
Route::get('tasks/create', CreateTaskController::class);
Route::post('tasks/store', StoreTaskController::class);
