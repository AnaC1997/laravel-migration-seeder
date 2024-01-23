<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Roma Termini',
                'stazione_arrivo' => 'Milano Centrale',
                'orario_partenza' => '2024-01-23 08:00:00',
                'orario_arrivo' => '2024-01-23 12:00:00',
                'codice_treno' => 101,
                'numero_carrozze' => 8,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Italo',
                'stazione_partenza' => 'Napoli Centrale',
                'stazione_arrivo' => 'Firenze Santa Maria Novella',
                'orario_partenza' => '2024-01-23 09:30:00',
                'orario_arrivo' => '2024-01-23 13:45:00',
                'codice_treno' => 202,
                'numero_carrozze' => 10,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Frecciarossa',
                'stazione_partenza' => 'Torino Porta Nuova',
                'stazione_arrivo' => 'Venezia Santa Lucia',
                'orario_partenza' => '2024-01-23 11:15:00',
                'orario_arrivo' => '2024-01-23 15:30:00',
                'codice_treno' => 303,
                'numero_carrozze' => 12,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Trenord',
                'stazione_partenza' => 'Brescia',
                'stazione_arrivo' => 'Verona Porta Nuova',
                'orario_partenza' => '2024-01-23 13:45:00',
                'orario_arrivo' => '2024-01-23 16:20:00',
                'codice_treno' => 404,
                'numero_carrozze' => 6,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
        ];

        foreach ($trains as $train) {
            $nuovoTrain = new Train();
            $nuovoTrain->azienda= $train['azienda'];
            $nuovoTrain->stazione_partenza = $train['stazione_partenza'];
            $nuovoTrain->stazione_arrivo = $train['stazione_arrivo'];
            $nuovoTrain->orario_partenza = $train['orario_partenza'];
            $nuovoTrain->orario_arrivo = $train['orario_arrivo'];
            $nuovoTrain->codice_treno = $train['codice_treno'];
            $nuovoTrain->numero_carrozze = $train['numero_carrozze'];
            $nuovoTrain->in_orario = $train['in_orario'];
            $nuovoTrain->cancellato = $train['cancellato'];
            $nuovoTrain->save();
        }
        for ($i = 0; $i < 5; $i++) {
            $nuovoTrain = new Train();
            $nuovoTrain->azienda= $faker->sentence;
            $nuovoTrain->stazione_partenza = $faker->sentence;
            $nuovoTrain->stazione_arrivo = $faker->sentence;
            $nuovoTrain->orario_partenza = $faker->dateTime;
            $nuovoTrain->orario_arrivo =$faker->dateTime;
            $nuovoTrain->codice_treno = $faker->randomNumber(2);
            $nuovoTrain->numero_carrozze = $faker->randomNumber(2);
            $nuovoTrain->in_orario = true;
            $nuovoTrain->cancellato = false;
            $nuovoTrain->save();
        }
        
    }
}
