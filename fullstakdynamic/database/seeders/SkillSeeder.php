<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {

        $skills = [
            [
                'user_id' => 1,
                'name' => 'HTML / CSS / JavaScript',
                'type' => 'technical',
                'level' => 'expert',
                'logo' => null
            ],
            [
                'user_id' => 1,
                'name' => 'PHP / Laravel',
                'type' => 'technical',
                'level' => 'expert',
                'logo' => null
            ],
            [
                'user_id' => 1,
                'name' => 'MySQL / Database Design',
                'type' => 'technical',
                'level' => 'intermediate',
                'logo' => null
            ],
            [
                'user_id' => 1,
                'name' => 'Flutter (Mobile App)',
                'type' => 'technical',
                'level' => 'intermediate',
                'logo' => null
            ],
            [
                'user_id' => 1,
                'name' => 'Machine Learning (Python)',
                'type' => 'technical',
                'level' => 'intermediate',
                'logo' => null
            ],
            [
                'user_id' => 1,
                'name' => 'Programming Language (C, C++)',
                'type' => 'technical',
                'level' => 'expert',
                'logo' => null
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
