<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Organisme: Hidup dan Beradaptasi',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores quidem excepturi fugiat maiores recusandae, eius nesciunt dolorum aperiam deserunt voluptatum iure incidunt pariatur ad ut officiis voluptate quod beatae eligendi autem amet impedit assumenda! Voluptate nisi, reprehenderit voluptatibus provident voluptatem repellat aliquam obcaecati aut nam repellendus fugiat hic numquam voluptates labore nulla accusantium laboriosam minima libero voluptatum, sapiente consequatur. Tenetur aliquid earum aut, repellat sed magni delectus quidem nobis. Placeat in corporis temporibus. Placeat soluta, corrupti nobis molestias ipsa dolores, facilis quos culpa veritatis cumque iste optio. Magni suscipit modi ipsum doloremque quas. Voluptas, fuga quia dicta officiis doloribus vero?',
                'category_id' => 1,
                'file_path' => 'modul/example.pdf',
                'file_type' => 'pdf',
            ],
            [
                'title' => 'Dinamika Kelompok Dalam Suatu] Populasi',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores quidem excepturi fugiat maiores recusandae, eius nesciunt dolorum aperiam deserunt voluptatum iure incidunt pariatur ad ut officiis voluptate quod beatae eligendi autem amet impedit assumenda! Voluptate nisi, reprehenderit voluptatibus provident voluptatem repellat aliquam obcaecati aut nam repellendus fugiat hic numquam voluptates labore nulla accusantium laboriosam minima libero voluptatum, sapiente consequatur. Tenetur aliquid earum aut, repellat sed magni delectus quidem nobis. Placeat in corporis temporibus. Placeat soluta, corrupti nobis molestias ipsa dolores, facilis quos culpa veritatis cumque iste optio. Magni suscipit modi ipsum doloremque quas. Voluptas, fuga quia dicta officiis doloribus vero?',
                'category_id' => 1,
                'file_path' => 'modul/example.pdf',
                'file_type' => 'pdf',
            ],
            [
                'title' => 'Keseimbangan Dalam Keberagaman Hayat',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores quidem excepturi fugiat maiores recusandae, eius nesciunt dolorum aperiam deserunt voluptatum iure incidunt pariatur ad ut officiis voluptate quod beatae eligendi autem amet impedit assumenda! Voluptate nisi, reprehenderit voluptatibus provident voluptatem repellat aliquam obcaecati aut nam repellendus fugiat hic numquam voluptates labore nulla accusantium laboriosam minima libero voluptatum, sapiente consequatur. Tenetur aliquid earum aut, repellat sed magni delectus quidem nobis. Placeat in corporis temporibus. Placeat soluta, corrupti nobis molestias ipsa dolores, facilis quos culpa veritatis cumque iste optio. Magni suscipit modi ipsum doloremque quas. Voluptas, fuga quia dicta officiis doloribus vero?',
                'category_id' => 1,
                'file_path' => 'modul/example.pdf',
                'file_type' => 'pdf',
            ],
        ];

        DB::table('modules')->insert($data);
    }
}
