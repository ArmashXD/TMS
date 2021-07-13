<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Priority;

class PriorityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $array = [
            [
                'name' => 'High',
                'level' => 3,
            ],
            [
                'name' => 'Medium',
                'level' => 2,
            ],
            [
                'name' => 'Low',
                'level' => 1,
            ],
        ];


        foreach($array as $arr)
        {
            Priority::create([
                'name' => $arr['name'],
                'level' => $arr['level']
            ]);
        }
    }
}
