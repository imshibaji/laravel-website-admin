<?php

namespace Shibaji\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('businesses')->delete();

        $data = [[
            'name' => 'Medust Technology Pvt. Ltd.',
            'type' => 'Pvt. Ltd.',
            'trading_name' => 'MEDUST',
            'registration_no' => 'web12389909373h37',
            'tax_registration_no' => '23456734567867',
            'contact_no' => '8981009499',
            'email' => 'info@medust.com',
            'address' => 'Dum Dum',
            'city' => 'Kolkata',
            'state' => 'West Bengal',
            'country' => 'in',
            'is_active' => 'on',
            'default' => 'on'
        ],
        [
            'name' => 'LARNR Education',
            'type' => 'Ownership',
            'trading_name' => 'LARNR',
            'registration_no' => 'web12389909373h37',
            'tax_registration_no' => '23456734567867',
            'contact_no' => '8981009499',
            'email' => 'info@larnr.com',
            'address' => 'Dum Dum',
            'city' => 'Kolkata',
            'state' => 'West Bengal',
            'country' => 'in',
            'is_active' => 'on',
            'default' => 'off'
        ]];

        DB::table('businesses')->insert($data);
    }
}
