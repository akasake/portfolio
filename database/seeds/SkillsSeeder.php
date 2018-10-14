<?php

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $html = new \App\Skill();
        $html->logo_url = "/images/skills/html.svg";
        $html->name = "html 5";
        $html->skill_lvl = 90;
        //
        $css = new \App\Skill();
        $css->logo_url = "/images/skills/css.svg";
        $css->name = "css 3";
        $css->skill_lvl = 80;
        //
        $js = new \App\Skill();
        $js->logo_url = "/images/skills/js.svg";
        $js->name = "JavaScript";
        $js->skill_lvl = 70;
        //
        $php = new \App\Skill();
        $php->logo_url = "/images/skills/php.svg";
        $php->name = "PHP: Hypertext Preprocessor";
        $php->skill_lvl = 80;
        //
        $laravel = new \App\Skill();
        $laravel->logo_url = "/images/skills/laravel.svg";
        $laravel->name = "PHP framework: Laravel";
        $laravel->skill_lvl = 70;
        //
        $drupal = new \App\Skill();
        $drupal->logo_url = "/images/skills/drupal.svg";
        $drupal->name = "CMS in PHP: Drupal 8";
        $drupal->skill_lvl = 70;
        //
        $java = new \App\Skill();
        $java->logo_url = "/images/skills/java.svg";
        $java->name = "OOP Java";
        $java->skill_lvl = 60;
        //
        $csharp = new \App\Skill();
        $csharp->logo_url = "/images/skills/csharp.svg";
        $csharp->name = "C sharp";
        $csharp->skill_lvl = 40;
        //
        $dotnet = new \App\Skill();
        $dotnet->logo_url = "/images/skills/dotnet.svg";
        $dotnet->name = "Software Framework: .NET";
        $dotnet->skill_lvl = 40;
        //
        $github = new \App\Skill();
        $github->logo_url = "/images/skills/github.svg";
        $github->name = "Git hosting service: GitHub";
        $github->skill_lvl = 80;
        //
        $ai = new \App\Skill();
        $ai->logo_url = "/images/skills/ai.svg";
        $ai->name = "Adobe Illustrator";
        $ai->skill_lvl = 75;
        //
        $ae = new \App\Skill();
        $ae->logo_url = "/images/skills/ae.svg";
        $ae->name = "Adobe After Effects";
        $ae->skill_lvl = 50;
        //
        $xd = new \App\Skill();
        $xd->logo_url = "/images/skills/xd.svg";
        $xd->name = "Adobe Experience Design";
        $xd->skill_lvl = 75;
        //
        
    }
}
