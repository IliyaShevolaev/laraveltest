<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function addUser()
    {
        DB::table('users')->insertGetId([
            'name' => 'Новый Пользователь',
            'login' => 'new_user',
            'email' => 'new_user@example.com',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return "Пользователь добавлен";
    }

    public function addThreeUsers()
    {
        for ($i = 1; $i <= 3; $i++) {
            DB::table('users')->insert([
                'name' => "Пользователь $i",
                'login' => "user$i",
                'email' => "user$i@example.com",
                'password' => Hash::make("password$i"),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return "Пользователи добавлены";
    }

    public function updateUser()
    {
        DB::table('users')->where('id', 2)->update([
                'login' => 'updated_user2',
                'email' => 'updated_user2@example.com',
                'updated_at' => now(),
            ]);

        return "Пользователь обновлен";
    }

    public function deleteUser()
    {
        DB::table('users')->where('id', 3)->delete();

        return "Пользователь удален";
    }
}
