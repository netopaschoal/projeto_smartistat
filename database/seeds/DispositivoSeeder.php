<?php

use Illuminate\Database\Seeder;

class DispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dispositivos')->insert(['nome_dispositivo' => 'Sala 01',
                                    'user_id' => 1]);
        
         DB::table('dispositivos')->insert(['nome_dispositivo' => 'Sala 02',
        'user_id' => 1]);

        DB::table('dispositivos')->insert(['nome_dispositivo' => 'Sala 02',
        'user_id' => 2]);
    }
}
