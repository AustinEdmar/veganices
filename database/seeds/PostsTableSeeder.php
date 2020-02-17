<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /* factory(\App\Post::class, 12)->create();  */
         DB::table('posts')->insert([
            [
                'uri' => 'blabla bçla bala bla',
                'user_id' => 1,
                'Category_id' => 1,
                'title' => 'power rangers',
                'subtitle' => 'homemm aranha',
                'cover'=>'imagem masssa',
                'content' =>'conteudo massa',
                'views' => 30,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
           /*  [
                'name' => 'Ana',
                'email' => 'ana@veganices.com.br',
                'password' => Hash::make('1234'),
                'avatar' => '2.jpg',
                'provider' => false,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Edmar',
                'email' => 'edmar@veganices.com.br',
                'password' => Hash::make('1234'),
                'avatar' => '3.jpg',
                'provider' => false,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Meg',
                'email' => 'meg@veganices.com.br',
                'password' => Hash::make('1234'),
                'avatar' => '4.jpg',
                'provider' => false,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Teste provider',
                'email' => 'teste@veganices.com.br',
                'password' => Hash::make('1234'),
                'avatar' => null,
                'provider' => true,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],  */
        ]);
    }
}
