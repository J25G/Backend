<?php

namespace App\Console\Commands;

use App\Repositories\NoticeRepository;
use Illuminate\Console\Command;

class CreateNoticeCommand extends Command
{
    protected $signature = 'app:create-notice-command';
    protected $description = 'Este comando permite crear avisos';
    public function handle()
    {
        $this->info('CREANDO UN AVISO');
        $title = $this->ask('Ingrese el título: ');
        $content = $this->ask('Ingrese el contenido: ');
        $priority = $this->choice('Ingrese la prioridad: ', ['hight', 'medium', 'low']);
        $noticeRepository = new NoticeRepository();
        $noticeRepository->create($title, $content, $priority);
        $this->info('Aviso creado');
    }
}
