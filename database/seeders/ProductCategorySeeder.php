<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Producer;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counter = 100;
        $categories = $this->getData();

        // Create categories
        foreach ($categories as $categoryBase) {
            $category = Category::create([
                'name' => $categoryBase['name'],
                'sort_order' => $counter,
            ]);
            $counter += 100;

            $producer = Producer::firstOrCreate(['name' => $categoryBase['producer']]);
            $products = $categoryBase['products'];
            $product_sort = 100;
            foreach ($products as $product) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => $product[0],
                    'storage_units' => $product[1],
                    'price_each' => $product[2],
                    'sort_order' => $product_sort,
                    'is_root' => $categoryBase['is_root'],
                ]);
                $product_sort += 100;
            }
        }
    }

    private function getData(): array
    {
        return [
            ['name' => 'Metal Ore',
                'producer' => 'Mining',
                'is_root' => true,
                'products' => [
                    ['Aluminum Nugget', 1, 1.92],
                    ['Aluminum Ore', 5, 2.16],
                    ['Copper Nugget', 1, 1.60],
                    ['Copper Ore', 5, 3.00],
                    ['Elerium Dust', 0.1, 0.30],
                    ['Elerium Nugget', 1, 5.30],
                    ['Iron Nugget', 1, 1.14],
                    ['Iron Ore', 5, 2.16],
                ],
            ],
            ['name' => 'Mineral Ore',
                'producer' => 'Mining',
                'is_root' => true,
                'products' => [
                    ['a-Carbon', 1, 1.50],
                    ['Quartz Powder', 0.1, 0.37],
                    ['Sulfur', 0.1, 0.70],
                ],
            ],
            ['name' => 'Crystal',
                'producer' => 'Mining',
                'is_root' => true,
                'products' => [
                    ['Graphite Crystal', 0.5, 9.00],
                    ['Pyrite', 0.5, 10.00],
                    ['Quartz', 0.5, 11.00],
                ],
            ],
            ['name' => 'Scrap',
                'producer' => 'Mining',
                'is_root' => true,
                'products' => [
                    ['Huge Electronic Scrap', 5, 8.10],
                    ['Industrial Rubble', 5, 5.30],
                    ['Steel Scraps', 5, 7.80],
                    ['Wrecked Hull', 5, 7.80],
                ],
            ],
            ['name' => 'Luxury Item',
                'producer' => 'Mining',
                'is_root' => true,
                'products' => [
                    ['Beautiful Gemstone', 0.1, 35.00],
                    ['Fair Gemstone', 0.1, 10.00],
                    ['Marvelous Gemstone', 0.1, 100.00],
                ],
            ],
            ['name' => 'Ingot',
                'producer' => 'Smelter',
                'is_root' => false,
                'products' => [
                    ['Aluminum Ingot', 1, 9.60],
                    ['Copper Ingot', 1, 9.60],
                    ['Iron Ingot', 1, 9.60],
                    ['Silicon Ingot', 1, 9.60],
                ],
            ],
            ['name' => 'Crystal Matrix',
                'producer' => 'Crystallizer',
                'is_root' => false,
                'products' => [
                    ['c-Crystal Matrix', 0.1, 2.00],
                ],
            ],
            ['name' => 'Simple Product',
                'producer' => 'MULTI',
                'is_root' => false,
                'products' => [
                    ['Concrete', 1, 0.25],
                    ['Metal Sheet', 1, 3.00],
                    ['Nut and Bolt', 0.1, 0.74],
                    ['Wire', 0.5, 2.08],
                ],
            ],
            ['name' => 'Contraption',
                'producer' => 'Workbench',
                'is_root' => false,
                'products' => [
                    ['Magnetic Coil', 1, 9.50],
                    ['Motor', 2, 59.00],
                    ['Structural Beam', 2, 21.80],
                ],
            ],
            ['name' => 'Kit And Casing',
                'producer' => 'Assembler',
                'is_root' => false,
                'products' => [
                    ['Small Steel Part Casing', 10, 205.00],
                    ['Support Hardware', 10, 28.40],
                ],
            ],
            ['name' => 'Robotic Agents',
                'producer' => 'Workbench',
                'is_root' => false,
                'products' => [
                    ['Drone', 1, 79.00],
                ],
            ],
            ['name' => 'Heat Panel',
                'producer' => 'Workbench',
                'is_root' => false,
                'products' => [
                    ['Small Radiator', 10, 195.00],
                ],
            ],
            ['name' => 'Cockpit',
                'producer' => 'Workbench',
                'is_root' => false,
                'products' => [
                    ['"Brick" Cockpit', 20, 415.00],
                ],
            ],
            ['name' => 'Patch',
                'producer' => 'Exploring',
                'is_root' => false,
                'products' => [
                    ['FTL Patch: Mag-Plasma 1', 1, 31.70],
                    ['Laser Patch: Mining Power 1', 1, 27.30],
                    ['Laser Patch: Rare Find 1', 1, 23.00],
                ],
            ],
            ['name' => 'Blueprint',
                'producer' => 'Exploring',
                'is_root' => false,
                'products' => [
                    ['Blueprint: Kaolinite', 0, 10.00],
                    ['Blueprint: Metal Sheet', 0, 20.00],
                    ['Blueprint: Wire', 0, 10.00],
                ],
            ],
            ['name' => 'Contract Item',
                'producer' => 'Contract',
                'is_root' => false,
                'products' => [
                    ['Black Box', 1, 0],
                ],
            ],
            ['name' => 'Beacon Data',
                'producer' => 'Mining Bureau',
                'is_root' => false,
                'products' => [
                    ['Beacon-8726 - Restricted Area', 0.10, 25.60],
                ],
            ],
            ['name' => 'Other',
                'producer' => 'Exploring',
                'is_root' => false,
                'products' => [
                    ['Data - The Republic', 1, 0],
                ],
            ],
        ];
    }
}
