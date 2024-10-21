<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('details')->insert([
            'firstName' => "raymond",
            'lastName' => "santos",
            'address' => "Cenon Perez St. Bonga Menor, Bustos, Bulacan",
            'birthday' => "April 13, 2000",
            'age' => 24,
            'status' => "single",
            'sex' => "male",
            'nationality' => "filipino",
            'elem' => "Bonga Menor Elementary School",
            'jhs' => "Tibagan National High School",
            'shs' => "Dalubhasaang Politekniko ng Lungsod ng Baliwag",
            'college' => "Dalubhasaang Politekniko ng Lungsod ng Baliwag",
            'hobby_1' => "playing games",
            'hobby_2' => "reading",
            'hobby_3' => "watching",
        ]);
    }
}
