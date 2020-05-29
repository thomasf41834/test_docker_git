<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class test_date extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test_date';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
	    echo date('d/m/y')."\n";
	    sleep(5);
	    echo date('d/m/y')."\n";
    }
}
