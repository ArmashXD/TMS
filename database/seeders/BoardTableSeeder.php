<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Board;
class BoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $boards = [
            [
                'name' => "New"
            ],
            [
                'name' => 'In Progress'
            ],
            [
                'name' => 'Pending'
            ],
            [
                'name' => 'Done'
            ],
            [
                'name' => 'Due',
            ],
            [
                'name' => 'Completed'
            ]
        ];

        foreach($boards as $board)
        {
            Board::create(['title' => $board['name']]);
        }
    }
}
