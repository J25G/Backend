<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
class MainCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:main-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $salaryMonth = 1_160_000;
        $numbMonth = 12;
        
        $salaryAnnual = $salaryMonth * $numbMonth;
        
        echo "Salario anual bruto: " . $salaryAnnual;
        
        
        echo "\n";
        
        // -----------------
        
        $salaryMonthGross = 1_160_000;
        $salaryMonthNet = $salaryMonthGross - (($salaryMonthGross * 0.04) + ($salaryMonthGross * 0.04)); // SALUD Y PENSIÓN
        $numbMonth = 12;
        $numbMonthAditional = 2; // Cesantías + Primas
        
        $salaryNetAnnual = ($salaryMonthNet * $numbMonth) + ($salaryMonthGross * $numbMonthAditional);
        
        echo "El salario anual neto de una persona es: " . $salaryNetAnnual;  //
    }
}
