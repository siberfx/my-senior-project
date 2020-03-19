<?php

use App\Models\Membership;
use Illuminate\Database\Seeder;

class MembershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Standard'
            ],
            [
                'name' => 'Gold'
            ],
            [
                'name' => 'Platinum'
            ],
        ];

        if (Membership::count() === 0) {
            foreach ($data as $single) {
                Membership::create($single);
            }
        }
    }
}
