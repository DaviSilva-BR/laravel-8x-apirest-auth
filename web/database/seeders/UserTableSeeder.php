<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => '123'
        ]);
    }
}
