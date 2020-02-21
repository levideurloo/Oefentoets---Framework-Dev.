<?php

use App\Owl;
use Illuminate\Database\Seeder;

class OwlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Owl::class, 10)->create();
    }
}
