<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Practice;
use Illuminate\Database\Seeder;

// TODO: ファイル自体は最初からあるのでカリキュラムとズレあり
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Movie::factory(10)->create();
    }
}
