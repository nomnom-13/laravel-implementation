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
            'course' => "Bachelor of Science in Information Technology",
            'address' => "Cenon Perez St. Bonga Menor, Bustos, Bulacan",
            'birthday' => "2000-04-13",
            'age' => 24,
            'status' => "single",
            'sex' => "male",
            'nationality' => "filipino",
            'elem' => "Bonga Menor Elementary School",
            'elemAcadYear' => "2006-2012",
            'jhs' => "Tibagan National High School",
            'jhsAcadYear' => "2012-2016",
            'shs' => "Dalubhasaang Politekniko ng Lungsod ng Baliwag",
            'shsAcadYear' => "2016-2018",
            'college' => "Dalubhasaang Politekniko ng Lungsod ng Baliwag",
            'collegeAcadYear' => "2021-Present",
        ]);

        $hobbies = ["playing games", "reading", "watching"];

        foreach ($hobbies as $hobby) {
            DB::table('hobbies')->insert([
                'detailID' => 1,
                'hobby' => $hobby,
            ]);
        }
        

        DB::table('links')->insert([
            'detailID' => 1,
            'fbLink' => "https://www.facebook.com/raymondsantos.13",
            'igLink' => "https://www.instagram.com/ar_ey_es_13/",
            'githubLink' => "https://github.com/santos-raymond",
        ]);
    }
}
