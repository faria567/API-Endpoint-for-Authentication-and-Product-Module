<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Unit;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Tax;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'sku' => $this->faker->unique()->ean13,
            'symbology' => 'Code 128',
            'brand_id' => Brand::factory(),
            'category_id' => Category::factory(),
            'unit_id' => Unit::factory(),
            'tax_id' => Tax::factory(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'qty' => $this->faker->numberBetween(1, 100),
            'alert_qty' => $this->faker->numberBetween(1, 10),
            'tax_method' => 'Inclusive',
            'is_active' => 1,
            'details' => $this->faker->paragraph,
        ];
    }
}

