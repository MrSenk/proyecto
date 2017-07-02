<?php

use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Estados de las cuotas
        \DB::table('estados')->insert([
        	'id' => 1,
        	'descripcion' => 'Pagado',
        	]);
        \DB::table('estados')->insert([
        	'id' => 2,
        	'descripcion' => 'No Pagado',
        	]);
    }
}
