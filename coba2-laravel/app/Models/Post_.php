<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Riczky",
            "body" => "
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti animi molestias harum aut autem porro. Quasi id asperiores cupiditate iste? Delectus odit reiciendis voluptates mollitia et similique veniam laudantium, eaque, inventore iusto minima vitae distinctio eum repudiandae. Doloribus eos dicta quia culpa nulla ullam fugiat assumenda deleniti rerum dolorum molestiae aut exercitationem sapiente totam dolores, esse, ab obcaecati eum doloremque nemo a, nihil nam architecto minima? Ad delectus autem, tempora deserunt harum iste assumenda nesciunt nisi, accusamus quam rem quas."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy",
            "body" => "
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sit aspernatur ipsum natus minima reiciendis quod eaque quibusdam perspiciatis id voluptas maxime tempora obcaecati expedita commodi sed, amet voluptatibus quidem sequi ipsa illo quis? Veniam voluptates ratione ea aut fugiat, eveniet saepe quasi quia facilis necessitatibus eos deleniti ad possimus. Ducimus aut blanditiis odit temporibus velit sunt quae consequatur vero quidem cumque numquam nobis, repellat adipisci earum in cum porro? Id sunt porro non libero tempora, sequi animi laborum quaerat commodi nobis, corrupti placeat doloremque numquam voluptatum ad aliquid illo sapiente. Mollitia, voluptatibus quae voluptas recusandae fuga maxime facilis esse!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
