<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

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

        DB::table('empresas')->insert([
            'nomeFantasia'         => 'Pao na chapa',
            'razaoSocial'          => 'Pao na chapa',
            'cnpj'                 => '646464646464',
            'horarioDeAtendimento' => '06:00 as 20:00',
            'descricao'            => 'Testando texto Testando texto Testando texto ',
            'servico_id'           => '2',
        ]);

        DB::table('empresas')->insert([
            'nomeFantasia'         => 'Manoel torrada',
            'razaoSocial'          => 'Manoel torrada',
            'cnpj'                 => '589898989898',
            'horarioDeAtendimento' => '06:00 as 20:00',
            'descricao'            => 'Testando texto Testando texto Testando texto ',
            'servico_id'           => '2',
        ]);

        DB::table('empresas')->insert([
            'nomeFantasia'         => 'Abrindo as suas coisas',
            'razaoSocial'          => 'Abrindo as suas coisas',
            'cnpj'                 => '32424234234234',
            'horarioDeAtendimento' => '08:00 as 23:00',
            'descricao'            => 'Testando texto Testando texto Testando texto ',
            'servico_id'           => '3',
        ]);
        
        DB::table('empresas')->insert([
            'nomeFantasia'         => 'Tranca porta',
            'razaoSocial'          => 'Tranca porta',
            'cnpj'                 => '4646464646464',
            'horarioDeAtendimento' => '08:00 as 23:00',
            'descricao'            => 'Testando texto Testando texto Testando texto ',
            'servico_id'           => '3',
        ]);

        DB::table('empresas')->insert([
            'nomeFantasia'         => 'Mão abre tudo',
            'razaoSocial'          => 'Mão abre tudo',
            'cnpj'                 => '9797979797979797',
            'horarioDeAtendimento' => '08:00 as 23:00',
            'descricao'            => 'Testando texto Testando texto Testando texto ',
            'servico_id'           => '3',
        ]);
        
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
