<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'company_name' => 'Admin',
            'site_company' => 'site.com.br',
            'email_company' => 'admin@admin.com',
            'responsible_name' => 'Naruto',
            'password' => Hash::make('123456')
        ]);
    }
}
