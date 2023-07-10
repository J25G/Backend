<?php

namespace App\Repositories;

use App\Models\Notice;

class NoticeRepository
{
    public function create(
        string $title,
        string $content,
        string $priority
    ): Notice {
        return Notice::create([
            'title' => $title,
            'content' => $content,
            'priority' => $priority
        ]);
    }
}
