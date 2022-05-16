<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);
        
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'Location' => 'Boston, MA',
        //     'email' => 'emaill@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet
        //     consectetur adipisicing elit. Ipsam minima et
        //     illo reprehenderit quas possimus voluptas
        //     repudiandae cum expedita, eveniet aliquid, quam
        //     illum quaerat consequatur! Expedita ab
        //     consectetur tenetur delensiti?'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Senior Engineer',
        //   'tags' => 'c#, python',
        //   'company' => 'Google',
        //   'Location' => 'New York, NY',
        //   'email' => 'test@email.com',
        //   'website' => 'https://www.google.com',
        //   'description' => 'Lorem ipsum dolor sit amet
        //   consectetur adipisicing elit. Ipsam minima et
        //   illo reprehenderit quas possimus voluptas
        //   repudiandae cum expedita, eveniet aliquid, quam
        //   illum quaerat consequatur! Expedita ab
        //   consectetur tenetur delensiti?'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
