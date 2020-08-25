<?php

use Illuminate\Database\Seeder;
use App\Models\PageCategory;

class PageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pageCategories = array(
            'general-info' => 'Общая информация',
            'site-info' => 'О сайте',
            'company-info' => 'О компании'
        );
        foreach ($pageCategories as $pageCategoryUrl => $pageCategoryName) {
            $pageCategoryInstance = new PageCategory;

            $pageCategoryInstance->name = $pageCategoryName;
            $pageCategoryInstance->slug = $pageCategoryUrl;

            $pageCategoryInstance->save();
        }
    }
}
