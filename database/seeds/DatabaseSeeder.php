<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ImagesSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(WorkSkillsSeeder::class);
        $this->call(WorksSeeder::class);
    }
}
