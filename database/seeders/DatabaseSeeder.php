<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Catch_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Akbar',
            'email' => 'akbar@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Dodi',
            'email' => 'dod@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque corporis ab exercitationem alias asperiores hic. Minus dicta quae ad. Commodi repudiandae neque impedit labore sit voluptate tenetur culpa earum quae.',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque corporis ab exercitationem alias asperiores hic. Minus dicta quae ad. Commodi repudiandae neque impedit labore sit voluptate tenetur culpa earum quae.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga doloremque incidunt dolor illum asperiores, ex reiciendis eos, placeat ipsa, facere neque rerum dignissimos ipsum debitis quisquam pariatur repellendus laudantium quae. Nostrum amet iste eius doloremque velit corporis inventore fugit cum maiores facilis sit vero consectetur sunt, quos excepturi voluptatum deserunt provident commodi exercitationem iure? Similique velit, totam fugiat adipisci incidunt nam doloribus! Eligendi pariatur culpa quia deleniti, cum excepturi voluptas minus, sunt molestiae distinctio nulla exercitationem ducimus hic, ullam mollitia! Eum, culpa. Voluptates, accusamus et. Ad, veniam quaerat? Iusto sint repellat atque voluptas voluptatum. Amet alias eveniet sequi soluta odio.</p>',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque corporis ab exercitationem alias asperiores hic. Minus dicta quae ad. Commodi repudiandae neque impedit labore sit voluptate tenetur culpa earum quae.',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque corporis ab exercitationem alias asperiores hic. Minus dicta quae ad. Commodi repudiandae neque impedit labore sit voluptate tenetur culpa earum quae.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga doloremque incidunt dolor illum asperiores, ex reiciendis eos, placeat ipsa, facere neque rerum dignissimos ipsum debitis quisquam pariatur repellendus laudantium quae. Nostrum amet iste eius doloremque velit corporis inventore fugit cum maiores facilis sit vero consectetur sunt, quos excepturi voluptatum deserunt provident commodi exercitationem iure? Similique velit, totam fugiat adipisci incidunt nam doloribus! Eligendi pariatur culpa quia deleniti, cum excepturi voluptas minus, sunt molestiae distinctio nulla exercitationem ducimus hic, ullam mollitia! Eum, culpa. Voluptates, accusamus et. Ad, veniam quaerat? Iusto sint repellat atque voluptas voluptatum. Amet alias eveniet sequi soluta odio.</p>',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque corporis ab exercitationem alias asperiores hic. Minus dicta quae ad. Commodi repudiandae neque impedit labore sit voluptate tenetur culpa earum quae.',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque corporis ab exercitationem alias asperiores hic. Minus dicta quae ad. Commodi repudiandae neque impedit labore sit voluptate tenetur culpa earum quae.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga doloremque incidunt dolor illum asperiores, ex reiciendis eos, placeat ipsa, facere neque rerum dignissimos ipsum debitis quisquam pariatur repellendus laudantium quae. Nostrum amet iste eius doloremque velit corporis inventore fugit cum maiores facilis sit vero consectetur sunt, quos excepturi voluptatum deserunt provident commodi exercitationem iure? Similique velit, totam fugiat adipisci incidunt nam doloribus! Eligendi pariatur culpa quia deleniti, cum excepturi voluptas minus, sunt molestiae distinctio nulla exercitationem ducimus hic, ullam mollitia! Eum, culpa. Voluptates, accusamus et. Ad, veniam quaerat? Iusto sint repellat atque voluptas voluptatum. Amet alias eveniet sequi soluta odio.</p>',
            'category_id' => 2,
            'user_id' => 2,
        ]);
    }
}
