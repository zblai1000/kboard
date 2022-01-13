<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Admin::create([
            'name' => 'Admin Sample',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

    }
}
