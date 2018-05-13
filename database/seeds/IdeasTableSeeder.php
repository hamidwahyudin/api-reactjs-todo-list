<?php

use Illuminate\Database\Seeder;

class IdeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ideas')->insert([
            [
                'title' => 'Belajar API',
                'content' => 'API dengan Lumen',
            ],
            [
                'title' => 'Belajar ReactJs',
                'content' => 'Web dengan ReactJs',
            ],
            [
                'title' => 'Belajar Ruby',
                'content' => 'Belajar di Idrails',
            ]
        ]);
    }
}
