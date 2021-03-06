<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Huỳnh Bá Vinh',
            'username' => 'huynhbavinh',
            'email' => 'huynhbavinh@gmail.vn',
            'role_id'=>1,
            'password' => Hash::make('123123123'),
            
        ]);
        User::create([
            'name' => 'Chung Thành Lưu',
            'username' => 'trungthanhluu',
            'email' => 'trungthanh@gmail.vn',
            'role_id'=>1,
            'password' => Hash::make('123123123'),
            
        ]);
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.vn',
            'role_id'=>2,
            'password' => Hash::make('123123123'),        
        ]);
    }
}
