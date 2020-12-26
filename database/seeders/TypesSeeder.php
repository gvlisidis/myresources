<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['name' => 'Article']);
        Type::create(['name' => 'Video']);
        Type::create(['name' => 'Github']);
        Type::create(['name' => 'Blog']);
    }
}
