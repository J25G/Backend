<?php

namespace App\Http\Controllers\Web\Tasks;

use Illuminate\Http\Request;


class CreateTaskController
{
    public function __invoke()
    {
        return view('tasks.create');
    
    }
}
