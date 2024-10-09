<?php

namespace App\Console\Commands;

use App\Imports\ImportCaen;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportCaenCodes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-caen-codes';

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
        Excel::import(new ImportCaen, 'lista_caen.xlsx');
    }
}
