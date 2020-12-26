<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create(['name' => 'PHP', 'version' => '7']);
        Language::create(['name' => 'PHP', 'version' => '8']);
        Language::create(['name' => 'Dart', 'version' => '1']);
    }
}
