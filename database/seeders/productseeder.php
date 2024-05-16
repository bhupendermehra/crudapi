<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
use Faker\Factory as Faker;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i <=100; $i++) { 
            
            $items = new Products();
            $items->name=$faker->name;
        $items->price=$faker->numberBetween(10,1000);
        $items->quantity=$faker->numberBetween(0,400);
        $items->description=$faker->text;
        $items->save();
    }
    }
}
