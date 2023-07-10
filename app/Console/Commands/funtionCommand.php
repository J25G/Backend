<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class funtionCommand extends Command
{
  
    protected $signature = 'app:funtion-command';
    protected $description = 'Command description';

  
    public function handle()
    {
        $nums = [5,10,15,20,25,30];
        function calcularPromedio($nums){
        
        $average = 0;
        for ($i = 0; $i < sizeof ($nums); $i ++) { 
             $average += $nums [$i];

        }
        $average /=sizeof ($nums);
        return $average; 
        $this-> info("el promedio es. $average");
    }
      
    }
}
