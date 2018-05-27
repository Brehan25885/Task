<?php

use Illuminate\Database\Seeder;
use App\Task;
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

            'Solve multiChoise questions',
 
            'Finish the code task',
 
            'make my app better',
 
            'Got the job done'
 
         ];
         foreach ($tasks as $task) {
 
            Task::create(['tasks_list' => $task,'user_id' => '1']);
       }
    }
}
