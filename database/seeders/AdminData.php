<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class AdminData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User ::create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
