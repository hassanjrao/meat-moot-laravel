<?php

namespace Database\Seeders;

use App\Models\InvestorPageStep;
use Illuminate\Database\Seeder;

class InvestorPageStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<7; $i++){

            InvestorPageStep::create([
                'title'=>'Inquiry'.$i,
                'description'=>'As the initial step in the Franchise process, we invite you to complete our franchise Inquiry Form if you are interested in gaining further insights into becominh a Meat Moot partner',
            ]);

        }
    }
}
