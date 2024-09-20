<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReserveDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'reservationID' => 1,
            'roomID' => 34,
            'stayDate' => '2024-05-18',
            'price' => 60000
        ];
        DB::table('reserve_details')->insert($param);

        $param = [
            'reservationID' => 2,
            'roomID' => 3,
            'stayDate' => '2024-06-13',
            'price' => 20000
        ];
        DB::table('reserve_details')->insert($param);
    }
}
