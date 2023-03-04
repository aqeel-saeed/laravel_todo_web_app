<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Finish homework',
                'description' => 'Complete math assignment and submit it by Friday',
                'status' => 'in_progress',
            ],
            [
                'title' => 'Go to the gym',
                'description' => 'Do weightlifting for an hour',
                'status' => 'cancelled',
            ],
            [
                'title' => 'Prepare for presentation',
                'description' => 'Create slides and rehearse for 30 minutes',
                'status' => 'in_progress',
            ],
            [
                'title' => 'Call mom',
                'description' => 'Ask her how she\'s doing and tell her about your day',
                'status' => 'todo',
            ],
            [
                'title' => 'Buy groceries',
                'description' => 'Milk, bread, eggs, cheese',
                'status' => 'todo',
            ],
            [
                'title' => 'Finish project report',
                'description' => 'Write up final report and submit to supervisor',
                'status' => 'in_progress',
            ],
            [
                'title' => 'Fix bug in login form',
                'description' => 'There is an issue with the validation code in the login form',
                'status' => 'in_progress',
            ],
            [
                'title' => 'Call plumber',
                'description' => 'The kitchen sink is clogged and needs fixing',
                'status' => 'done',
            ],
            [
                'title' => 'Send birthday gift',
                'description' => 'Buy and send gift to friend for their birthday',
                'status' => 'done',
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
