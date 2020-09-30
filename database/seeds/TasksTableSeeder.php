<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Task::class)->create([
           'name' =>'Estadar Angular',
           'complete'=>false
        ]);
        factory(App\Task::class)->create([
            'name' =>'Estadar React',
            'complete'=>false
         ]);
    }
}
