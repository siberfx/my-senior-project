<?php

use App\Models\Membership;
use App\Models\Users;
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
        $data = [
            'name' => 'Root Admin',
            'permission' => Users::ADMIN_PERMISSION,
            'membership_id' => 0,
            'email' => 'admin@example.com',
            'email_verified_at' => null,
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];

        if (! Users::whereEmail('admin@example.com')->first()) {
                Users::create($data);
        }
    }
}
