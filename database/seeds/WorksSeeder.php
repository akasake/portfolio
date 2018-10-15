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
        $work->description = "A team project I have done for the class PHP. We had to design and work out an app made for inspiration. This project was the first project where we had to work on GITHUB in team. It was definitly a challenge to work on one project with different features that rely on eachother. Each week, we had deadlines to work towards and it was interesting to learn the different challenges that comes with working in a team on one project."
        $work->cover_url = "/images/work/muse.svg"
        $work->save();
    }
}
