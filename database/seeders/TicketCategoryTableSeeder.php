<?php

namespace Database\Seeders;

use App\Models\TicketCategory;
use Illuminate\Database\Seeder;

class TicketCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketCategory::create(['categoryName' => "Category 1"]);
        TicketCategory::create(['categoryName' => "Category 2"]);
        TicketCategory::create(['categoryName' => "Category 3"]);
    }
}
