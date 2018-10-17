<?php

use App\SchClass;
use Illuminate\Database\Seeder;

class SchClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchClass::unguard();
        $this->data()->each(function($data) {
            SchClass::create($data);
        });
        SchClass::reguard();
    }

    /**
     * Supply data for seeding
     *
     * @return collection
     */
    private function data() {
        return collect([
            ['name' => 'Six', 'code' => 'six', 'description' => 'Class six / 6', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Seven', 'code' => 'seven', 'description' => 'Class seven / 7', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Eight', 'code' => 'eight', 'description' => 'Class eight / 8', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Nine', 'code' => 'nine', 'description' => 'Class nine / 9', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
            ['name' => 'Ten', 'code' => 'ten', 'description' => 'Class ten / 10', 'status_id' => 1, 'created_by' => 1, 'updated_by' => 1],
        ]);
    }
}
