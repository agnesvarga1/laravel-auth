<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<5;$i++){
            $project = new Project();
            $project->project_name = $faker->words(3, true);
            $project-> description = $faker->text(200);
            $project-> image =  $faker->imageUrl(640, 480, 'animals', true);
            $project-> github_repo = $faker->url();
            $project->save();
        }
    }
}
