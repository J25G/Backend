<?php

namespace App\Console\Commands;

use App\Models\Notice;
use Illuminate\Console\Command;

class ListNoticesCommand extends Command
{
    protected $signature = 'app:list-notices-command';
    protected $description = 'Command description';
    public function handle()
    {
        $notices = Notice::all();
        for ($i = 0; $i < sizeof($notices); $i++) {
            $this->info($notices[$i]->id);
            $this->warn($notices[$i]->title);
            $this->error($notices[$i]->content);
            $this->line('---------------------');
        }
    }
}
