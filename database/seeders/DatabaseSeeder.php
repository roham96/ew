<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $defaultWallet = Config::get('wallet.wallet.default');

        User::factory()->create([
            'national_code' => '2620449243',
            'mobile' => '09034295981',
            'mobile_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            // password
            'remember_token' => Str::random(10),
        ])->createWallet($defaultWallet);
        User::factory(9)->create()->each(function ($user) use ($defaultWallet) {
            $user->createWallet($defaultWallet);
        });

        $this->call([
            //
        ]);
    }
}
