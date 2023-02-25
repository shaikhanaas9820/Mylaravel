<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class Customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker                  = Faker::create();
        for ($i=1; $i <= 100; $i++) 
        { 
            $customer               = new Customer();
            $customer->name         = $faker->name;
            $customer->email        = $faker->email;
            $customer->password     = $faker->password;
            $customer->dob          = now();
            $customer->address      = $faker->address;
            $customer->gender       = 'M';
            $customer->country      = $faker->country;
            $customer->state        = $faker->state;
            $customer->city         = $faker->city;
            $customer->created_at   = date('Y-m-d H:i:s');
            $customer->status       = 1;
            $customer->is_deleted   = 0;
            $customer->save();
        }
    }
}
