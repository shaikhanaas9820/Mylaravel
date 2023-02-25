<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User_info;

class User_infoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer               = new User_info();
        $customer->name         = 'anas';
        $customer->email        = 'anas@gmail.com';
        $customer->password     = '89698';
        $customer->dob          = '1998-06-20';
        $customer->address      = 'dbkjlasdfiljnsavaklf.';
        $customer->gender       = 'M';
        $customer->country      = 'India';
        $customer->state        = 'Maharshtra';
        $customer->city         = 'Mumbai';
        $customer->created_at   = date('Y-m-d H:i:s');
        $customer->status       = 1;
        $customer->is_deleted   = 0;
        $customer->save();
    }
}
