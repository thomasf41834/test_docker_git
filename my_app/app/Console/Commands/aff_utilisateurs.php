<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class aff_utilisateurs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aff_utilisateurs';

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
function handle()
    {
	//$results = DB::connection('mysql')->table('utilisateurs')->get();
	$this->db = DB::connection('mysql')->getPdo();
	$sth = $this->db->prepare("SELECT * FROM utilisateurs");
	$sth->execute();
	$results = $sth->fetch(\PDO::FETCH_NAMED);
	echo "les utilisateurs sont : \n";
	foreach ($results as $res) {
		echo "nom : ".$res->nom."prenom : ".$res->prenom."email : ".$res->email."\n";
	} 
    }
}
