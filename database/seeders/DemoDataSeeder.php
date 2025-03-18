<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Client;
use App\Models\Lead;
use App\Models\Note;
use App\Models\Project;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DemoDataSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Create Users first
        $users = User::factory(5)->create();

        // Create Clients
        $clients = Client::factory(10)->create();

        // Create Leads
        Lead::factory(15)->create();

        // Create Categories
        $categories = Category::factory(5)->create();

        // Create Tags
        $tags = Tag::factory(8)->create();

        // Create Services
        $services = Service::factory(6)->create();

        // Create Projects
        $projects = Project::factory(8)
            ->sequence(fn ($sequence) => [
                'client_id' => $clients->random()->id,
                'status' => $faker->randomElement(['planning', 'in_progress', 'on_hold', 'completed'])
            ])
            ->create();

        // Create Tasks
        foreach ($projects as $project) {
            $mainTasks = Task::factory(3)
                ->sequence(fn ($sequence) => [
                    'project_id' => $project->id,
                    'user_id' => $users->random()->id,
                    'assigned_to' => $users->random()->id,
                ])
                ->create();

            // Create subtasks
            foreach ($mainTasks as $mainTask) {
                Task::factory(2)
                    ->sequence(fn ($sequence) => [
                        'project_id' => $project->id,
                        'user_id' => $users->random()->id,
                        'assigned_to' => $users->random()->id,
                        'parent_id' => $mainTask->id,
                    ])
                    ->create();
            }
        }

        // Create Notes
        foreach ($projects as $project) {
            $tasks = Task::where('project_id', $project->id)->get();
            foreach ($tasks as $task) {
                Note::create([
                    'title' => $faker->sentence(),
                    'content' => $faker->paragraphs(3, true),
                    'user_id' => $users->random()->id,
                    'task_id' => $task->id,
                    'tags' => json_encode($faker->words(3)),
                ]);
            }
        }

        // Create Articles
        Article::factory(12)
            ->sequence(fn ($sequence) => [
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
            ])
            ->create()
            ->each(function ($article) use ($tags) {
                $article->tags()->attach($tags->random(rand(2, 4)));
            });
    }
}