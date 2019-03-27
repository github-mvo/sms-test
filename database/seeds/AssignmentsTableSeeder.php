<?php

use App\Assignment;
use Illuminate\Database\Seeder;

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assignment::create([
            'title' => 'Notebook',
            'description' => 'Pass Note book',
            'deadline' => '2017-12-24 12:23:01',
            'subject_id' => 1,
            'teacher_id' => 1,
        ]);

        Assignment::create([
            'title' => 'Book1',
            'description' => 'Pass Clear book',
            'deadline' => '2017-12-20 12:23:01',
            'subject_id' => 1,
            'teacher_id' => 1,
        ]);

        Assignment::create([
            'title' => 'Report',
            'description' => 'Report on monday',
            'deadline' => '2017-12-20 12:23:01',
            'subject_id' => 1,
            'teacher_id' => 2,
        ]);

    }
}
