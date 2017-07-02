<?php

use Illuminate\Database\Seeder;

class CuotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Meses en los que se pagan cuotas
        \DB::table('cuotas')->insert([
        	'id' => 1,
        	'mes' => 'Marzo',
        	]);
        \DB::table('cuotas')->insert([
        	'id' => 2,
        	'mes' => 'Abril',
        	]);
        \DB::table('cuotas')->insert([
        	'id' => 3,
        	'mes' => 'Mayo',
        	]);
        \DB::table('cuotas')->insert([
        	'id' => 4,
        	'mes' => 'Junio',
        	]);
        \DB::table('cuotas')->insert([
        	'id' => 5,
        	'mes' => 'Julio',
        	]);
        \DB::table('cuotas')->insert([
        	'id' => 6,
        	'mes' => 'Agosto',
        	]);
        \DB::table('cuotas')->insert([
        	'id' => 7,
        	'mes' => 'Septiembre',
        	]);
        \DB::table('cuotas')->insert([
        	'id' => 8,
        	'mes' => 'Octubre',
        	]);
        \DB::table('cuotas')->insert([
        	'id' => 9,
        	'mes' => 'Noviembre',
        	]);
        \DB::table('cuotas')->insert([
        	'id' => 10,
        	'mes' => 'Diciembre',
        	]);
    }
}
