<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Page;
use App\Models\Ticket;
use App\Models\User;
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
        Page::factory(10)->create();
        Event::factory(10)->create()->each(function ($event) {
            Ticket::factory(10)->create(['event_id' => $event->id]);
        });

        $this->call(RoleSeeder::class);

        User::factory(10)->create();
    }
}
