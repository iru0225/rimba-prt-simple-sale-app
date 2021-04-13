<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;
use App\Models\User;
use App\Models\Pic;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->insert([
            'nama' => 'PT. '.Str::random(15),
            'contact' => '081209123100',
            'email' => Str::random(10).'@mail.com',
            'alamat' => Str::random(50),
            'password' => Hash::make('password')
        ]);

        DB::table('pics')->insert(
            [
                'user_id' => 1,
                'name' => Str::random(15),
                'email' => Str::random(10).'@mail.com',
                'password' => Hash::make('password')
            ],
            [
                'user_id' => 1,
                'name' => Str::random(15),
                'email' => Str::random(10).'@mail.com',
                'password' => Hash::make('password')
            ]
        );
    }
}
