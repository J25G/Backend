<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ArrayCommand extends Command
{
   
      
     
    protected $signature = 'app:array-command';

    
     
    protected $description = 'Command description';

   
    public function handle()
    {
       $elements = [1, 40, 30, 3, 5, 10, 60];
       $valor = $this -> info(`ingresa el valor a buscar:`);
       
       if ([$elements,$valor]) {
        $this -> info (`el valor . $valor  esta presente en el arreglo `);
        }else {
            $this -> info (`el valor . $valor  no esta presente en el arreglo `); 
        } 

    }
}
