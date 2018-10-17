<?php

use App\StudentSubjectMapping;
use Illuminate\Database\Seeder;

class StudentSubjectMappingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentSubjectMapping::unguard();
        $this->data()->each(function($data) {
            StudentSubjectMapping::create($data);
        });
        StudentSubjectMapping::reguard();
    }

    /**
     * Supply data for seeding
     *
     * @return collection
     */
    private function data() {
        return collect([
            ['student_id' => 1, 'subject_id' => 1],
            ['student_id' => 1, 'subject_id' => 2],
            ['student_id' => 1, 'subject_id' => 3],
            ['student_id' => 1, 'subject_id' => 4],
            ['student_id' => 2, 'subject_id' => 1],
            ['student_id' => 2, 'subject_id' => 2],
            ['student_id' => 2, 'subject_id' => 3],
            ['student_id' => 2, 'subject_id' => 4],
            ['student_id' => 3, 'subject_id' => 1],
            ['student_id' => 3, 'subject_id' => 2],
            ['student_id' => 3, 'subject_id' => 3],
            ['student_id' => 3, 'subject_id' => 4],
            ['student_id' => 4, 'subject_id' => 1],
            ['student_id' => 4, 'subject_id' => 2],
            ['student_id' => 4, 'subject_id' => 3],
            ['student_id' => 4, 'subject_id' => 4],
            ['student_id' => 5, 'subject_id' => 1],
            ['student_id' => 5, 'subject_id' => 2],
            ['student_id' => 5, 'subject_id' => 3],
            ['student_id' => 5, 'subject_id' => 4],
            ['student_id' => 6, 'subject_id' => 1],
            ['student_id' => 6, 'subject_id' => 2],
            ['student_id' => 6, 'subject_id' => 3],
            ['student_id' => 6, 'subject_id' => 4],
            ['student_id' => 7, 'subject_id' => 1],
            ['student_id' => 7, 'subject_id' => 2],
            ['student_id' => 7, 'subject_id' => 3],
            ['student_id' => 7, 'subject_id' => 4],
            ['student_id' => 8, 'subject_id' => 1],
            ['student_id' => 8, 'subject_id' => 2],
            ['student_id' => 8, 'subject_id' => 3],
            ['student_id' => 8, 'subject_id' => 4],
            ['student_id' => 9, 'subject_id' => 1],
            ['student_id' => 9, 'subject_id' => 2],
            ['student_id' => 9, 'subject_id' => 3],
            ['student_id' => 9, 'subject_id' => 4],
            ['student_id' => 10, 'subject_id' => 1],
            ['student_id' => 10, 'subject_id' => 2],
            ['student_id' => 10, 'subject_id' => 3],
            ['student_id' => 10, 'subject_id' => 4],
        ]);
    }
}
