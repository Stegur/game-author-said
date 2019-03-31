<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            'Шла Саша по шоссе',
            'Такая-сякая сбежала из дворца',
            'Ну-с, так вот что!',
            'Кто-то счастье ждет, кто-то в сказку верит',
            'У старинушки три сына: старший — умный был детина, средний сын и так и сяк, младший — вовсе был дурак',
            'Два на два будет пять?',
        ];

        foreach ($tasks as $task) {
            DB::table('tasks')->insert([
                'body' => $task,
            ]);
        }

    }
}
