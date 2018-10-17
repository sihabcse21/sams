<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::unguard();
        $this->data()->each(function($data) {
            Status::create($data);
        });
        Status::reguard();
    }

    /**
     * Supply data for seeding
     *
     * @return collection
     */
    private function data() {
        return collect([
            ['name' => 'Active', 'code' => 'ACTIVE'],
            ['name' => 'Inactive', 'code' => 'INACTIVE'],
        ]);
    }
}
