<?php

use App\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Team::create([
        //     'name' => Str::random(10),
        //     'country' => Str::random(50),
        // ]);

        factory(Team::class, 10)->create();

    }
}





// $table->id();
// $table->string('name');
// $table->string('country');
// $table->timestamps();