<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hunt;
use App\Models\Hunter;
use App\Models\Kill;
use App\Models\Role;
use App\Models\User;
use Database\Factories\RoleFactory;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Factory::create('fr_FR');
        $roles = Role::factory(2)->create();
        $hunter = Hunter::factory(3)->create();
        $hunt = Hunt::factory(3)->create();
        $kill = Kill::factory(3)->create();
        $user = User::factory(3) -> create();

    }
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
}