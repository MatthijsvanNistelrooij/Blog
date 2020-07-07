<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Laravels Blog',
            'address' => 'Russia, Petersburg',
            'contact_number' => '850 55050550',
            'contact_email' => 'info@laravel.nl'
        ]);
    }
}
