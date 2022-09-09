<?php

use App\Category;
use App\Course;
use App\User;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $slugify = new Slugify();

        $course = new Course();
        $course->title = "Les bases de Symfony 4";
        $course->subtitle = "Apprendre à créer avec Symfony";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy";
        $course->price = 19.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();

        $course = new Course();
        $course->title = "Créer un site ecommerce avec wordpress";
        $course->subtitle = "Apprendre à créer avec wordpress";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy";
        $course->price = 14.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();

        $course = new Course();
        $course->title = "Les bases de Laravel";
        $course->subtitle = "Apprendre à créer un site avec Laravel";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy";
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->price = 16.99;
        $course->save();
    }
}
