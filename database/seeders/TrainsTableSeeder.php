<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        

        for ($i=0; $i < 10; $i++) { 

            $newTrain = new Train();

            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            if($i % 2 == 0) {
                $newTrain->giorno_partenza = date("Y/m/d");
            }
            else {
                $newTrain->giorno_partenza = $faker->date();
            }
            $newTrain->giorno_arrivo = date("Y/m/d");
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(5, true);
            $newTrain->numero_carrozze = $faker->randomDigitNot(0);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();

            $newTrain->save();
        } 
    }
}
