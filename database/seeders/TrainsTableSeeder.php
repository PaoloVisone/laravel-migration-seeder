<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $trains = [
            [
                'codice_treno' => 11,
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Roma Termini',
                'stazione_di_arrivo' => 'Milano Centrale',
                'orario_di_partenza' => '2024-05-21 08:30:00',
                'orario_di_arrivo' => '2024-05-21 11:45:00',
                'totale_carrozze' => 12,
                'cancellato' => false,
                'in_orario' => true
            ],
            [
                'codice_treno' => 12,
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Napoli Centrale',
                'stazione_di_arrivo' => 'Torino Porta Nuova',
                'orario_di_partenza' => '2024-05-21 10:15:00',
                'orario_di_arrivo' => '2024-05-21 15:30:00',
                'totale_carrozze' => 10,
                'cancellato' => false,
                'in_orario' => false
            ],
            [
                'codice_treno' => 13,
                'azienda' => 'Trenord',
                'stazione_di_partenza' => 'Milano Cadorna',
                'stazione_di_arrivo' => 'Como Lago',
                'orario_di_partenza' => '2024-05-21 09:00:00',
                'orario_di_arrivo' => '2024-05-21 10:15:00',
                'totale_carrozze' => 6,
                'cancellato' => true,
                'in_orario' => false
            ],
            [
                'codice_treno' => 14,
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Firenze Santa Maria Novella',
                'stazione_di_arrivo' => 'Venezia Santa Lucia',
                'orario_di_partenza' => '2024-05-21 12:20:00',
                'orario_di_arrivo' => '2024-05-21 15:40:00',
                'totale_carrozze' => 8,
                'cancellato' => false,
                'in_orario' => true
            ]
        ];

        foreach ($trains as $train) {

            $newTrain = new Train();

            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->totale_carrozze = $train['totale_carrozze'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->in_orario = $train['in_orario'];

            $newTrain->save();
        }
    }
}
