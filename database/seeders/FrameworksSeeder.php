<?php

namespace Database\Seeders;

use App\Models\Framework;
use Illuminate\Database\Seeder;

class FrameworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Framework::create(['name' => 'Laravel', 'version' => '6']);
        Framework::create(['name' => 'Laravel', 'version' => '7']);
        Framework::create(['name' => 'Laravel', 'version' => '8']);
        Framework::create(['name' => 'Vue', 'version' => '2']);
        Framework::create(['name' => 'Vue', 'version' => '3']);
        Framework::create(['name' => 'Tailwind', 'version' => '2']);
        Framework::create(['name' => 'Inertia', 'version' => '2']);
        Framework::create(['name' => 'Bootstrap', 'version' => '3']);
        Framework::create(['name' => 'Bootstrap', 'version' => '4']);
        Framework::create(['name' => 'Flutter', 'version' => '1']);
    }
}
