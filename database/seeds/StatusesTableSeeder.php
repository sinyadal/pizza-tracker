<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => 'Order Placed',
            'percent' => 10,
        ]);

        Status::create([
            'name' => 'Prep',
            'percent' => 30,
        ]);

        Status::create([
            'name' => 'Bake',
            'percent' => 50,
        ]);

        Status::create([
            'name' => 'Quality Check',
            'percent' => 70,
        ]);

        Status::create([
            'name' => 'Out for Delivery',
            'percent' => 100,
        ]);
    }
}
