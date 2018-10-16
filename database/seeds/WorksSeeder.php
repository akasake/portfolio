<?php

use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $work = new \App\Work();
        $work->title = "Muse";
        $work->description = "A team project I have worked on for the class PHP. We had to design and develop an inspiration app. This project was the first where we had to work on GITHUB in team. It was a challenge to work together on one project with different features that rely on each other. Each week, we had deadlines to work towards and it was interesting to learn the different challenges that comes with working in a team on one project."
        $work->type ="development"
        $work->cover_url = "/images/work/Muse.png"
        $work->save();

        $work = new \App\Work();
        $work->title = "Muse";
        $work->description = "A team project I have worked on for the class PHP. We had to design and develop an inspiration app. This project was the first where we had to work on GITHUB in team. It was a challenge to work together on one project with different features that rely on each other. Each week, we had deadlines to work towards and it was interesting to learn the different challenges that comes with working in a team on one project."
        $work->type ="development"
        $work->cover_url = "/images/work/Muse.png"
        $work->save();
    }
}
