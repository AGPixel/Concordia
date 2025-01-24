<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserToken;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('a'),
        ]);

        $userToken = new UserToken();
        $userToken->user_id = 1;
        $userToken->token = '';
        $userToken->expire_at = Carbon::now()->format("Y-m-d H:i:s");
        $userToken->save();
    }
}
