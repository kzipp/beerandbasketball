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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // create 6 episodes and populate with default data
        \App\Models\Episode::create([
            'title' => 'Tip-Off: Cheers to Beer & Basketball!',
            'description' => 'Join us for the grand tip-off of our podcast journey as we blend the world of beer and basketball, exploring iconic arenas and savoring local brews.',
            'slug' => 'tip-off-cheers-to-beer-and-basketball',
            'published_date' => '2023-07-01 10:00:00',
            'listen_link' => '/coming-soon',
        ]);

        \App\Models\Episode::create([
            'title' => 'Miami\'s Magic: Arena Heat and Coastal Brews',
            'description' => 'We dribble into Miami\'s basketball passion at the Heat\'s arena and explore its vibrant craft beer scene, enjoying coastal flavors in every sip',
            'slug' => 'miamis-magic-arena-heat-and-coastal-brews',
            'published_date' => '2023-07-05 10:00:00',
            'listen_link' => '/coming-soon',
        ]);

        \App\Models\Episode::create([
            'title' => 'Boston\'s Bounce: Celtics Pride and Beantown Breweries',
            'description' => 'Discover the heart of basketball in Boston, from the TD Garden\'s roar to historic breweries. We raise a pint to the Celtics and local ales.',
            'slug' => 'bostons-bounce-celtics-pride-and-beantown-breweries',
            'published_date' => '2023-07-15 10:00:00',
            'listen_link' => '/coming-soon',
        ]);

        \App\Models\Episode::create([
            'title' => 'Rip City Rhythms and Refreshments',
            'description' => 'We score a three-pointer in Portland, where Blazers\' passion meets a craft beer haven. Join us for a slam dunk of flavors.',
            'slug' => 'rip-city-rhythms-and-refreshments',
            'published_date' => '2023-07-20 10:00:00',
            'listen_link' => '/coming-soon',
        ]);

        \App\Models\Episode::create([
            'title' => 'The Mile High Dunks and Drafts',
            'description' => 'Denver\'s basketball fervor takes center court alongside its top-notch breweries. Tune in as we taste the Mile High\'s finest brews.',
            'slug' => 'mile-high-dunks-and-drafts',
            'published_date' => '2023-07-25 10:00:00',
            'listen_link' => '/coming-soon',
        ]);

        \App\Models\Episode::create([
            'title' => 'Windy City Courtside and Craftsmanship',
            'description' => 'Chicago\'s Bulls make history, and so do its breweries. Our episode navigates the courtside action and taps into Chicago\'s beer culture.',
            'slug' => 'windy-city-courtside-and-craftsmanship',
            'published_date' => '2023-07-30 10:00:00',
            'listen_link' => '/coming-soon',
        ]);
    }
}
