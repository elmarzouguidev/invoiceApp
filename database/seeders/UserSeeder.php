<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $user = [
            'nom' => 'Elmarzougui',
            'prenom' => 'Abdelghafour',
            'telephone' => '0612345600',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ];

        $admin = User::whereEmail('admin@gmail.com')->first();

        if (!$admin) {
            $newAdmin = User::create($user);
            $newAdmin->assignRole('SuperAdmin');
        } else {
            $admin->assignRole('SuperAdmin');
        }
    }
}
