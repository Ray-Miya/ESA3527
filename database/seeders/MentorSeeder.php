<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mentors')->insert([
            [
                'name' => '中居正広',
                'tel' => '090-1234-5678',
                'teaching_languages' => 'PHP, JavaScript',
                'experience_years' => 5,
                'introduction' => '私はアナウンサーが好きです。',
            ],
            [
                'name' => '木村拓哉',
                'tel' => '090-2345-6789',
                'teaching_languages' => 'Ruby, Python',
                'experience_years' => 8,
                'introduction' => 'グランメゾン',
            ],
            [
                'name' => '香取慎吾',
                'tel' => '090-3456-7890',
                'teaching_languages' => 'Java, Swift',
                'experience_years' => 6,
                'introduction' => '僕だけ真面目です。',
            ],
            [
                'name' => '草彅剛',
                'tel' => '090-4567-8901',
                'teaching_languages' => 'C++, Python',
                'experience_years' => 10,
                'introduction' => '公園で捕まった記憶があります。',
            ],
        ]);
    }
}
