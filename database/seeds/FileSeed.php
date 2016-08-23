<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;
use Faker\Factory as Faker;
use App\File;
use Carbon\Carbon;

class FileSeed extends Seeder
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
          File::create(array(
            'user_name' => $faker->randomElement(User::lists('username')->toArray()),
            'file' => $faker->word. ".class",
            'tested' => $faker->randomElement($array = array('OK', 'Falhou')),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

          ));
        }
    }
}
