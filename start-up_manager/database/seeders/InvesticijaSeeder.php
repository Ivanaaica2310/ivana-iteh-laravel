<?php

namespace Database\Seeders;

use App\Models\Investicija;
use App\Models\Investitor;
use App\Models\Startup;

use Illuminate\Database\Seeder;


class InvesticijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $investitor = Investitor::factory()->create();
        $startup1 = Startup::factory()->create();
        $startup2 = Startup::factory()->create();

        Investicija::factory(10)->create([
            'investitor_id'=>$investitor->id,
            'startup_id'=>$startup1->id
           ]);

           Investicija::factory(5)->create([
            'investitor_id'=>$investitor->id,
            'startup_id'=>$startup2->id
           ]);
    }
}
