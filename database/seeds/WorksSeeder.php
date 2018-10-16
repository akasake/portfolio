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
         //1
         $muse = new \App\Work();
         $muse->title = "Muse";
         $muse->description = "A team project I have worked on for the class PHP. We had to design and develop an inspiration app. This project was the first where we had to work on GITHUB in team. It was a challenge to work together on one project with different features that rely on each other. Each week, we had deadlines to work towards and it was interesting to learn the different challenges that comes with working in a team on one project.";
         $muse->type ="development";
         $muse->cover_url = "/images/work/Muse.png";
         $muse->save();
         
         //2
         $recipe = new \App\Work();
         $recipe->title = "IMD Recipe";
         $recipe->description = "For the IMD cookbook project, we had to draw a visual cooking recipe. Together with other 20 people, mine was chosen to be put in the physical recipe book of IMD. I had a lot of fun drawing it in Illustrator. I went with a colorful style and chose to imitate the anime feel. It was the first complicated Illustrator drawing job that I was content with. ";
         $recipe->type ="design";
         $recipe->cover_url = "/images/work/IMD recipe.png";
         $recipe->save();
 
         //3
         $sc = new \App\Work();
         $sc->title = "IMD Snapchat Filter";
         $sc->description = "When this project was briefed, we were asked to think about what IMD is. We wanted new students to know more about us. What better way is there than to make a custom snapchat filter? Because IMD was about design and development, I decided to go with a doodly feel.";
         $sc->type ="design";
         $sc->cover_url = "/images/work/IMD snapchat filter.png";
         $sc->save();
 
         //4
         $bookarun = new \App\Work();
         $bookarun->title = "BookARun";
         $bookarun->description = "This is project done for actual clients. BookaRun is a small startup. They wanted a playful, cool and sporty yellow theme. Together with 10 others, mine was chosen to be pitched in front of the actual clients.";
         $bookarun->type ="design";
         $bookarun->cover_url = "/images/work/running app.png";
         $bookarun->save();
 
         //5
         $ga = new \App\Work();
         $ga->title = "IMD Running Club Ga";
         $ga->description = "A team project I have worked on for IMD running club. This is a project designed around 3 core values we had to chose for ourselves. Our core values were “empower”, “unite” and “inspire”. We also chose for a mid-80’s design. With it, we hope to bring the feeling of the “good old times” when technology is not yet an addiction and inspire people to go outside. This has won us the Jury’s favor as the most consistent and best fitting design. ";
         $ga->type ="design";
         $ga->cover_url = "/images/work/Running club.png";
         $ga->save();
 
         //6
         $bob = new \App\Work();
         $bob->title = "BitesOnBudget";
         $bob->description = "BitesOnBudget is an app designed for students and young adults. The purpose of this project is learning to design for a target group. For the course research, we were tasked to write down the concept we made ourselves and back it up with interviews and research. I went for pastel colors for a fresh and fun feel. Contrasting the boring and tiring feeling that comes with budgeting the food.";
         $bob->type ="design";
         $bob->cover_url = "/images/work/BitesOnBudget.png";
         $bob->save();
 
         //7
         $drupal = new \App\Work();
         $drupal->title = "Drupal portfolio";
         $drupal->description = "For our first CMS course we are assigned to work on a portfolio in Drupal. It was my very first time developing in a Content Management System. It was not easy to do and working with views and layout was complicated. Even then, I still managed to finish the project independently.";
         $drupal->type ="development";
         $drupal->cover_url = "/images/work/Drupal.png";
         $drupal->save();
 
         //8
         $todo = new \App\Work();
         $todo->title = "To do App in ES6";
         $todo->description = "For web development class, which is an optional course, we learned how to write JavaScript 6. With this language we are asked to make a to do application.";
         $todo->type ="development";
         $todo->cover_url = "/images/work/Codingprojects.png";
         $todo->save();;
 
         //9
         $kweeni = new \App\Work();
         $kweeni->title = "Kweeni Website in Node.js";
         $kweeni->description = "Team project for web development class. Kweeni is a forum where you can ask questions to teachers and fellow students. The design was already decided and all we had to do is develop it. This is the project where I learned to work in an MVC model. This design pattern was at first not easy, but after getting used to it, it became logical and structured. ";
         $kweeni->type ="development";
         $kweeni->cover_url = "/images/work/Codingprojects.png";
         $kweeni->save();
 
    }
}
