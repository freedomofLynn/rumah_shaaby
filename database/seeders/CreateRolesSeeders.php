<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateRolesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => "Admin",
            ],
            [
                'id' => 2,
                'name' => "User",
            ]
        ];

        // foreach ($roles as $key => $value) {
            Role::insert($value);
        // }
    }
}
