<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Added TestTag1 to TestTag10
        for ($i = 1; $i<11; $i++) {
            $item = new App\Tag;
            $item->tag_name = 'TestTag' . $i;
            $item->save();
        }

        // Add TestCat1 to TestCat10
        for ($i = 1; $i<11; $i++) {
            $item = new App\Category;
            $item->category_name = 'TestCat' . $i;
            $item->save();
        }

        // Add TestPost1 to TestPost10
        //
    }
}
