<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserToken;
use App\Models\IndexText;
use App\Models\Contact;
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

        $indexTitle = new IndexText();
        $indexTitle->about_title = 'about title';
        $indexTitle->save();

        $contact = new Contact();
        $contact->email1 = 'email1@email.com';
        $contact->business_hours1 = 'business_hours1';
        $contact->business_hours2 = 'business_hours2';
        $contact->business_hours3 = 'business_hours3';
        $contact->address1 = 'address1';
        $contact->address2 = 'address2';
        $contact->address3 = 'address3';
        $contact->map_lat = '11.5073509';
        $contact->map_len = '-0.1277583';
        $contact->save();
    }
}
