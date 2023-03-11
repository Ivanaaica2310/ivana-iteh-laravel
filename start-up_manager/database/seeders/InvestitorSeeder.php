<?php

namespace Database\Seeders;

use App\Models\Investitor;
use Illuminate\Database\Seeder;

class InvestitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $investitor = Investitor::factory()->create();
    }
}
