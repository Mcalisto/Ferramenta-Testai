<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;
use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('users')->truncate();
        $fakerBrazil = Faker::create('pt_BR');
        $faker = Faker::create();



        User::create(array(
          'name' => 'Administrador',
          'username' => 'admin',
          'password' => Hash::make('admin'),
          'email' => 'admin@testai.com',
          'type' => '1',

        ));

        User::create(array(
          'name' => 'marcus',
          'username' => 'marcus',
          'password' => Hash::make('password'),
          'email' => 'marcus@testai.com',
          'type' => '2',
        ));

        foreach (range(1, 10) as $index) {
          User::create(array(
            'name' => $fakerBrazil->name,
            'username' => $faker->userName,
            'password' => Hash::make('password'),
            'email' => $faker->safeEmail,
            'type' => '2',
          ));
        }
    }
}
