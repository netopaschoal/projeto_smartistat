<?php

use Illuminate\Database\Seeder;

class DadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dados')->insert(['temperatura' => '25',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-01-22 06:42:02']);
        DB::table('dados')->insert(['temperatura' => '48',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-01-22 06:45:02']);
        DB::table('dados')->insert(['temperatura' => '35',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-01-22 06:47:02']);
        DB::table('dados')->insert(['temperatura' => '38',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-01-22 06:49:02']);
        DB::table('dados')->insert(['temperatura' => '35',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-02-22 06:32:02']);
        DB::table('dados')->insert(['temperatura' => '44',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-02-22 06:35:02']);
        DB::table('dados')->insert(['temperatura' => '46',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-03-22 06:35:02']);
        DB::table('dados')->insert(['temperatura' => '48',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-03-22 06:37:02']);
        DB::table('dados')->insert(['temperatura' => '40',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-03-23 10:40:02']);
        DB::table('dados')->insert(['temperatura' => '38',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-03-23 10:42:02']);
        DB::table('dados')->insert(['temperatura' => '42',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-03-23 10:44:02']);
        DB::table('dados')->insert(['temperatura' => '38',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-03-24 11:22:02']);
        DB::table('dados')->insert(['temperatura' => '42',
                                            'dispositivo_id' => 1,
                                            'created_at' => '2020-03-24 11:24:02']);

        DB::table('dados')->insert(['temperatura' => '50',
                                            'dispositivo_id' => 2,
                                            'created_at' => '2020-01-24 11:24:02']);
        DB::table('dados')->insert(['temperatura' => '30',
                                            'dispositivo_id' => 2,
                                            'created_at' => '2020-01-24 11:26:02']);
         DB::table('dados')->insert(['temperatura' => '42',
                                            'dispositivo_id' => 2,
                                            'created_at' => '2020-02-11 08:24:02']);
        DB::table('dados')->insert(['temperatura' => '47',
                                            'dispositivo_id' => 2,
                                            'created_at' => '2020-02-24 08:26:02']);
        DB::table('dados')->insert(['temperatura' => '37',
                                            'dispositivo_id' => 2,
                                            'created_at' => '2020-03-24 15:35:02']);
        DB::table('dados')->insert(['temperatura' => '39',
                                            'dispositivo_id' => 2,
                                            'created_at' => '2020-03-24 15:37:02']);
    }
}
