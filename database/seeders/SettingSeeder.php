<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Settings::create([
            'app_name' => 'Point Of Sales | PPKD JP',
            'address' => 'jl karet baru',
            'phone_number' => '08823445671'
        ]);

        // DB::table('settings')->create([]);
    }
}
