<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Packages;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        user::factory()->create([
            'name' => 'Abrsh',
            'email' => 'ab@example.com',
            'password' => bcrypt('123.321Aa'),
        ]);
        Feature::create([
            'image' => 'https://static-00.iconducl.com/assets.00/plus-icon-20
            8x2048-z6v59bd6.png',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'Calculate Sum of Two Numbers',
            'required_credits' => 1,
            'active' => true
        ]);
        Feature::create([
            'image' => 'https://static-00.iconducl.com/assets.00/minus-icon-20
            8x2048-z6v59bd6.png',
            'route_name' => 'feature2.index',
            'name' => 'Calculate Difference',
            'description' => 'Calculate d/ce of Two Numbers',
            'required_credits' => 3,
            'active' => true
        ]);
        Packages::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20
        ]);
        Packages::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100
        ]);
        Packages::create([
            'name' => 'Golden',
            'price' => 100,
            'credits' => 2000
        ]);
    }
}
