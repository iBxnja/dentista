<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [[
         'event' => 'Cita #1',
         'stard_date' => '2024-12-16 00:10',
         'end_date' => '2024-12-16 11:00',
        ],
        $events = [
         'event' => 'Cita #2',
         'stard_date' => '2024-12-16 8:10',
         'end_date' => '2024-12-16 11:00',
        ],
        $events = [
         'event' => 'Cita #3',
         'stard_date' => '2024-12-16 9:10',
         'end_date' => '2024-12-16 11:00',
        ]
    ];
        foreach($events as $event){
            Event::create($event);
        }



    }
}
