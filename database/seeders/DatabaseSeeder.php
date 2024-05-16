<?php

namespace Database\Seeders;

use App\Practice;
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
        Practice::factory(10)->create();
    }
}
