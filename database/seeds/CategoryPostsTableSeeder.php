<?php

use Illuminate\Database\Seeder;

class CategoryPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_posts')->insert([
            [
                'name' => 'Teste',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]
        ]);
    }
}
