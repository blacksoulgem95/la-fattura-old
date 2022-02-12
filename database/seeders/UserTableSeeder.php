<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
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
        // create standard admin user
        if (User::all()->count() === 0)
            User::create([
                'name' => 'Adre',
                'surname' => 'Lorde',
                'email' => 'changeme@lafattura.xyz',
                'password' => Hash::make('ChangeMe,1'),
                'is_customer' => false,
                'email_verified_at' => Carbon::now()
            ]);
    }
}
