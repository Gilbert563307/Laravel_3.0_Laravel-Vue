<?php

namespace Database\Seeders;

use App\Models\Todos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$faker = Faker::create();
        // DB::table('todos')->insert([
        //     'title' => $faker->title,
        //     'description' => $faker->description,
        // ]);
        Todos::factory()->count(15)->create();
    }
}
