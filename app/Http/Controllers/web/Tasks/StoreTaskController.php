<?php

namespace App\Http\Controllers\Web\Tasks;

use App\Models\Task;
use Illuminate\Http\Request;

class StoreTaskController
{
    public function __invoke(Request $request)
    {
        $newTitle = $request->get('title');
        $newDescription = $request->get('description');
        Task::create([
            'title' => $newTitle,
            'description' => $newDescription,
            'state' => 'todo'
        ]);



        return redirect('tasks');
    }
}
