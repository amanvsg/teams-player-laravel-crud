<?php

use App\Player;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Player::create([
        //     'name' => Str::random(10),
        //     'country' => Str::random(50),
        // ]);

        factory(Player::class,100)->create();
    }
}
