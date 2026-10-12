<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.Remplir la table artists avec des données test.
     */
    public function run(): void
    {
        //1.Empty the table first(pour ne pas créer des doublons)
	Artist::truncate();

	//2.Define data
	$artists =[
	    ['firstname' => 'Daniel',     'lastname' => 'Marcelin'],
            ['firstname' => 'Philippe',   'lastname' => 'Laurent'],
            ['firstname' => 'Marius',     'lastname' => 'Von Mayenburg'],
            ['firstname' => 'Olivier',    'lastname' => 'Boudon'],
            ['firstname' => 'Anne Marie', 'lastname' => 'Loop'],
            ['firstname' => 'Pietro',     'lastname' => 'Varasso'],
            ['firstname' => 'Laurent',    'lastname' => 'Caron'],
            ['firstname' => 'Élena',      'lastname' => 'Perez'],
            ['firstname' => 'Guillaume',  'lastname' => 'Alexandre'],
            ['firstname' => 'Claude',     'lastname' => 'Semal'],
            ['firstname' => 'Laurence',   'lastname' => 'Warin'],
            ['firstname' => 'Pierre',     'lastname' => 'Wayburn'],
            ['firstname' => 'Gwendoline', 'lastname' => 'Gauthier'],
	];

	//3. Insert data in the table.
	DB::table('artists')->insert($artists);
    }
}
