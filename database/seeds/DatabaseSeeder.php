<?php

use Illuminate\Database\Seeder;
use App\preu;

class DatabaseSeeder extends Seeder

{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self::seedCatalog();    
  		$this->command->info('Tabla catálogo inicializada con datos!');
    }


	public function seedCatalog()
    {
    	$csv = array_map('str_getcsv', file('C:\laragon\www\OpenData\public\2018_lloguer_preu_trim.csv'));

		DB::table('preu')->delete();
    	foreach( $csv as $preu ) {
	    $p = new preu;
	    $p->any = $preu[0];
	    $p->trimestre = $preu[1];
	    $p->codi_districte = $preu[2];
	    $p->nom_districte = $preu[3];
	    $p->codi_barri = $preu[4];
	    $p->nom_barri = $preu[5];
	    $p->lloguer_mitja = $preu[6];
	    $p->preu = $preu[7];
	    $p->save();
	}
	}
}
