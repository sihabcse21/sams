<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::unguard();
        $this->data()->each(function($data) {
            Role::create($data);
        });
        Role::reguard();
    }

    /**
     * Supply data for seeding
     *
     * @return collection
     */
    private function data() {
        return collect([
            ['name' => 'Admin', 'code' => 'ADMIN', 'status_id' => 1],
            ['name' => 'User', 'code' => 'USER', 'status_id' => 1],
        ]);
    }
}
