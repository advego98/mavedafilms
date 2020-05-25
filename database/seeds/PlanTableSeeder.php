<?php

use Illuminate\Database\Seeder;
use App\Plans;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = new Plans();
        $plan->plan_name = 'Basico';
        $plan->screens = 1;
        $plan->price = 8;
        $plan->quality = 'hd';
        $plan->save();

        $plan = new Plans();
        $plan->plan_name = 'Estandar';
        $plan->screens = 2;
        $plan->price = 12;
        $plan->quality = 'fhd';
        $plan->save();

        $plan = new Plans();
        $plan->plan_name = 'Premium';
        $plan->screens = 4;
        $plan->price = 16;
        $plan->quality = 'uhd';
        $plan->save();
    }
}
