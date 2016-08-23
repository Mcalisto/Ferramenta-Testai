<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;
use Faker\Factory as Faker;
use App\File;
use App\Notes;
use Carbon\Carbon;

class NotaSeed extends Seeder
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


        foreach (range(1, 10) as $index) {
          Notes::create(array(
            'title' => $faker->randomElement($array = array('Atividade-1', 'Atividade-2', 'Atividade-3', 'Atividade-4')),
            'user_name' => $faker->randomElement(User::lists('username')->toArray()),
            'body' => $faker->sentence($nbWords = 15, $variableNbWords = true),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

          ));
        }
    }
}
