<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);

        $userIds = factory(App\User::class, 10)->create()->pluck('id')->toArray();

        $projects = factory(App\Models\Project::class, 25)->make()->each(function ($projects) use ($userIds) {
            $projects->user_id = Arr::random($userIds);
            $projects->save();
        });


        //App\Models\Project::insert($projects);
        $this->call(PageCategorySeeder::class);
        $this->call(PageSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(TimelineSeeder::class);
    }
}
