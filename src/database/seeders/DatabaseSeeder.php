<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Shibaji\Admin\Database\Seeders\BusinessSeeder;
use Shibaji\Admin\Database\Seeders\PostSeeder;
use Shibaji\Admin\Database\Seeders\RolesAndPermissionsSeeder;
use Shibaji\Admin\Database\Seeders\SettingSeeder;
use Shibaji\Admin\Database\Seeders\CountriesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@abc.com',
            'password' => Hash::make('password')
        ]);
        $this->call([
            CountriesTableSeeder::class,
            RolesAndPermissionsSeeder::class,
            PostSeeder::class,
            SettingSeeder::class,
            BusinessSeeder::class
        ]);
    }
}
