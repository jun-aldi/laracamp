<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro TechStack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Imac Pro Display'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certifation'
            ],
            [
                'camp_id' => 1,
                'name' => 'Oflline Course Video'
            ],
            [
                'camp_id' => 1,
                'name' => 'Futere Job Opoortunity'
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Ceritifaction'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos'
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
