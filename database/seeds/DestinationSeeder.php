<?php

use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=> "Eddie Gingco",
                'address'=>'Danao, Bohol',
                'type'=> 'First Class',
                'rating'=> '5 Star',
            ],
            [
                'name'=> "Alex Xander",
                'address'=>'Amapa, Brazil',
                'type'=> 'Second Class',
                'rating'=> '5 Star',
            ],
            [
                'name'=> "Eddie Uwu",
                'address'=>'Los Angeles, California',
                'type'=> 'Third Class',
                'rating'=> '5 Star',
            ],
        ];
        foreach($data as $d){
            \App\Destination::create($d);
        }
    }
}