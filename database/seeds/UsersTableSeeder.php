<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
        $this->data()->each(function($data) {
            User::create($data);
        });
        User::reguard();
    }

    /**
     * Supply data for seeding
     *
     * @return collection
     */
    private function data() {
        return collect([
            ['name' => 'Sihab', 'user_name' => 'sihab', 'email' => 'sihab.babl@gmail.com', 'password' => '123456', 'role_id' => 1, 'status_id' => 1],
            ['name' => 'UserAdmin', 'user_name' => 'user_admin', 'email' => 'user.admin@gmail.com', 'password' => '123456', 'role_id' => 1, 'status_id' => 1],
        ]);
    }
}
