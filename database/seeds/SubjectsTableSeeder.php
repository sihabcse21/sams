<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::unguard();
        $this->data()->each(function($data) {
            Subject::create($data);
        });
        Subject::reguard();
    }

    /**
     * Supply data for seeding
     *
     * @return collection
     */
    private function data() {
        return collect([
            ['name' => 'Bangla', 'code' => 'bangla', 'description' => 'Bangla 1st/2nd Part', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'English', 'code' => 'english', 'description' => 'English 1st/2nd Part', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Mathematics', 'code' => 'math', 'description' => 'Mathematics', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'General Science', 'code' => 'science', 'description' => 'General Science', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Computer', 'code' => 'computer', 'description' => 'Computer', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Physics', 'code' => 'physics', 'description' => 'Physics', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Chemistry', 'code' => 'chemistry', 'description' => 'Chemistry', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Biology', 'code' => 'biology', 'description' => 'Biology', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Higher Math', 'code' => 'highermath', 'description' => 'Higher Math', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
        ]);
    }
}
