<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('items')->insert([
                'name' => 'Carrots',
                'image_url' => 'carrots.png',
                'stock' => 10,
                'price' => 20,
        ]);
    }
}
