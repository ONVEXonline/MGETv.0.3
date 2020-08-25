<?php

use Illuminate\Database\Seeder;
use App\Models\Page;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $pages = array(
            array(
                'page_category_id' => 1,
                'title' => 'Как это работает',
                'slug' => Str::slug('Как это работает'),
                'text' => $faker->realText(2000),
                'active' => 1
            ),
            array(
                'page_category_id' => 1,
                'title' => 'Часто задаваемые вопросы',
                'slug' => Str::slug('Часто задаваемые вопросы'),
                'text' => $faker->realText(2000),
                'active' => 1
            ),
            array(
                'page_category_id' => 1,
                'title' => 'Профессиональным участникам',
                'slug' => Str::slug('Профессиональным участникам'),
                'text' => $faker->realText(2000),
                'active' => 1
            ),
            array(
                'page_category_id' => 1,
                'title' => 'Акционерам',
                'slug' => Str::slug('Акционерам'),
                'text' => $faker->realText(2000),
                'active' => 1
            ),
            array(
                'page_category_id' => 2,
                'title' => 'Политика конфиденциальности',
                'slug' => Str::slug('Политика конфиденциальности'),
                'text' => $faker->realText(2000),
                'active' => 1
            ),
            array(
                'page_category_id' => 2,
                'title' => 'Правила работы сервиса',
                'slug' => Str::slug('Правила работы сервиса'),
                'text' => $faker->realText(2000),
                'active' => 1
            ),
            array(
                'page_category_id' => 2,
                'title' => 'Пользовательское соглашение',
                'slug' => Str::slug('Пользовательское соглашение'),
                'text' => $faker->realText(2000),
                'active' => 1
            ),
            array(
                'page_category_id' => 3,
                'title' => 'Информация о компании',
                'slug' => Str::slug('Информация о компании'),
                'text' => $faker->realText(2000),
                'active' => 1
            ),
            array(
                'page_category_id' => 3,
                'title' => 'Вакансии',
                'slug' => Str::slug('Вакансии'),
                'text' => $faker->realText(2000),
                'active' => 1
            ),
            array(
                'page_category_id' => 3,
                'title' => 'Новости компании',
                'slug' => Str::slug('Новости компании'),
                'text' => $faker->realText(2000),
                'active' => 1
            ),
            array(
                'page_category_id' => 3,
                'title' => 'Контакты и обратная связь',
                'slug' => Str::slug('Контакты и обратная связь'),
                'text' => $faker->realText(2000),
                'active' => 1
            )
        );
        foreach ($pages as $page) {
            $pageInstance = new Page;

            $pageInstance->page_category_id = $page['page_category_id'];
            $pageInstance->title = $page['title'];
            $pageInstance->slug = $page['slug'];
            $pageInstance->text = $page['text'];
            $pageInstance->active = $page['active'];

            $pageInstance->save();
        }
    }
}
