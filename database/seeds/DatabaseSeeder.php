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
        // Create TestUser1 to TestUser3
        for ($i = 1; $i < 4; $i++) {
            $item = new App\User;
            $item->name = 'TestUser' . $i;
            $item->email = 'testuser' . $i . '@test.com';
            $item->password = Hash::make('testuser' . $i);
            $item->save();
        }

        // Added TestTag1 to TestTag10
        for ($i = 1; $i<11; $i++) {
            $item = new App\Tag;
            $item->tag_name = 'TestTag' . $i;
            $item->save();
        }

        // Add TestCat1 to TestCat2
        for ($i = 1; $i<3; $i++) {
            $item = new App\Category;
            $item->category_name = 'TestCat' . $i;
            $item->save();
        }

        // Add TestPost1 to TestPost10
        for ($i = 1; $i<4; $i++) {
            for ($j= 1; $j<6; $j++) {
                $item = new App\Post;
                $item->title = 'Test Post ' . $i;
                $item->slug = 'test-post-' . $i;
                $item->category_id = $i;
                $item->user_id = $i;
                $item->html = '<p> Test Post '. $i .'Content</p>';
                $item->markdown = 'null';
                $item->save();
            }
        }
    }
}
