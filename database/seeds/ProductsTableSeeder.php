<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ejecutamos para que cree datos falsos para productos
        factory(App\Product::class, 80)->create();
    }
}
