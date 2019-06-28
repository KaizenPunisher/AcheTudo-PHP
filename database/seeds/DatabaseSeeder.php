<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory('App\Empresa', 5)->create();

        DB::table('servicos')->insert([
            'nome' => 'Pizzarias',
            'vip'  => '1',
        ]);
        
        DB::table('servicos')->insert([
            'nome' => 'Padarias',
            'vip'  => '1',
        ]);

        DB::table('servicos')->insert([
            'nome' => 'Chaveiros',
            'vip'  => '1',
        ]);
    }
}
