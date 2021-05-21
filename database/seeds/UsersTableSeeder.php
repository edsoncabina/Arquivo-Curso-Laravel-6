<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create(); //Gerar 10 ocorrencia na Base de dados 
        /*
        User::create([
            "name" => "Carlos Ferreira",
            "email" => "carlos@especializati.co.br",
            "password" => bcrypt('12345678'),
            ]);
            */
    }
}
