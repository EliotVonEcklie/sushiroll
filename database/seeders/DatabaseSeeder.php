<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(4)
            ->has(
                \App\Models\Channel::factory(1)
                    ->has(
                        \App\Models\Roll::factory(16)
                            ->hasComments(16)
                    )
            )
            ->has(
                \App\Models\Community::factory(1)
                    ->has(
                        \App\Models\Thread::factory(1)
                            ->hasComments(16)
                            ->state(function (array $attributes, \App\Models\Community $community) {
                                return ['user_id' => $community->user->id];
                            })
                    )
            )
            ->has(
                \App\Models\Thread::factory(4)
                    ->hasComments(16)
            )
            ->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);s
    }
}
