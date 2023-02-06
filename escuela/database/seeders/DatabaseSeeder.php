<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //\App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'PÉREZ SÁNCHEZ, GUILLERMO',
            'email' => 'guillermops@gmail.com',
            'password'=> 'Guillermo1',
            'img'=> '838a3238692c8f5a69391a1121a845c8.png',
            'dateOfBirth'=> '2018/09/17',
            'adress'=> 'calle San simón 6, Málaga 29007',
            'telephone'=> '+34626547849',
            'academicRecord'=> 'chrome-extension://efaidnbmnnnibpcajpcglclefindmkaj/https://www.juntadeandalucia.es/educacion/portals/delegate/content/82cc0a7a-3ce6-42f1-8e38-d43ecf41049d/EXPEDIENTE%20ACADEM%C3%8DCO',
            'remarks'=> 'Es muy adelantado para su edad, tiene que ir a la universidad',
            ]);
            User::factory(25)->create();
        }
}

