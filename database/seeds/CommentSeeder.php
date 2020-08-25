<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        //factory(App\Models\Comment::class, 1000)->create();

        // Top comments 5
        // Total comments 20
        $projectId = 1;
        $curCommentId = 1;

        while ($projectId <= 25) {

            $commentId = 1;
            $commentParrentId = 0;

            while ($commentId <= 20) {

                if ($commentId > 5) {
                    $commentParrentId = rand($curCommentId - $commentId + 1, $curCommentId);
                }

                $commentInstance = new Comment;

                $commentInstance->parent_id = $commentParrentId;
                $commentInstance->user_id = rand(1, 10);
                $commentInstance->project_id = $projectId;
                $commentInstance->comment = $faker->realText(1000);
                $commentInstance->rating = rand(-10, 100);

                $commentInstance->save();

                $curCommentId++;
                $commentId++;
            }
            $projectId++;
        }
    }
}
