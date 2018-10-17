<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::unguard();
        $this->data()->each(function($data) {
            Student::create($data);
        });
        Student::reguard();
    }

    /**
     * Supply data for seeding
     *
     * @return collection
     */
    private function data() {
        return collect([
            ['name' => 'Rahim', 'code' => '001', 'description' => 'Rahim Info', 'class_id' => 1, 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Karim', 'code' => '002', 'description' => 'Karim Info', 'class_id' => 1, 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Sattar', 'code' => '003', 'description' => 'Sattar Info', 'class_id' => 1, 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Sayed', 'code' => '004', 'description' => 'Sayed Info', 'class_id' => 1, 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Jamil', 'code' => '005', 'description' => 'Jamil Info', 'class_id' => 1, 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Kabir', 'code' => '006', 'description' => 'Kabir Info', 'class_id' => 1, 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Rahul', 'code' => '007', 'description' => 'Rahul Info', 'class_id' => 1, 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Rabbi', 'code' => '008', 'description' => 'Rabbi Info', 'class_id' => 1, 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Sikandar', 'code' => '009', 'description' => 'Sikandar Info', 'class_id' => 1, 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Kaushar', 'code' => '010', 'description' => 'Kaushar Info', 'class_id' => 1, 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
        ]);
    }
}
