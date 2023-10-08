<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $product_1 = new Products();
        $product_1->name = 'Margarita';
        $product_1->description = 'Tomate, mozzarella, albahaca y aceite de oliva. Es una pizza italiana clásica.'; 
        $product_1->price = '55.00'; 
        $product_1->save();

        $product_2 = new Products();
        $product_2->name = 'Pepperoni';
        $product_2->description = 'Queso mozzarella y pepperoni (salami de pimienta) en rodajas.'; 
        $product_2->price = '70.00'; 
        $product_2->save();

        $product_3 = new Products();
        $product_3->name = 'Hawaiana';
        $product_3->description = 'Jamón, piña y queso mozzarella.'; 
        $product_3->price = '85.00'; 
        $product_3->save();

        $product_4 = new Products();
        $product_4->name = 'BBQ';
        $product_4->description = 'Salsa de barbacoa, pollo a la parrilla, cebolla y queso.'; 
        $product_4->price = '85.00'; 
        $product_4->save();

        $product_5 = new Products();
        $product_5->name = 'Vegetariana';
        $product_5->description = 'Variedad de verduras como pimientos, champiñones, cebolla y aceitunas negras con queso mozzarella.'; 
        $product_5->price = '70.00'; 
        $product_5->save();

        $product_6 = new Products();
        $product_6->name = 'Cuatro Quesos';
        $product_6->description = 'Una mezcla de cuatro quesos diferentes, como mozzarella, gorgonzola, parmesano y provolone.'; 
        $product_6->price = '85.00'; 
        $product_6->save();

        $product_7 = new Products();
        $product_7->name = 'Napolitana';
        $product_7->description = 'Tomate, ajo, orégano y aceite de oliva.'; 
        $product_7->price = '55.00'; 
        $product_7->save();
    }
}
