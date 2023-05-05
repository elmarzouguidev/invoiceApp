<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Utilities\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * @return void
     */
    public $cates = [
        [
            'name' => 'SA',
            'is_active' => true,
        ],
        [
            'name' => 'PME',
            'is_active' => false,
        ],
    ];

    public function run()
    {
        if (Category::count() <= 0) {
            foreach ($this->cates as $category) {
                Category::create($category);
            }
        }
    }
}
