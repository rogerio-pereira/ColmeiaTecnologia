<?php

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Banner::class)->create([
            'title' => 'Assistencia Técnica Especializada',
            'description' => '<p><a class="btn btn-primary" href="#">Entre em contato</a></p>',
            'image' => config('app.url').'/img/assistencia-tecnica.jpg'
        ]);

        factory(Banner::class)->create([
            'title' => 'Desenvolvimento de Sites',
            'description' => '<a href="#" class="btn btn-primary">Faça um orçamento</a>',
            'image' => config('app.url').'/img/desenvolvimento-sites.jpg'
        ]);

        factory(Banner::class)->create([
            'title' => 'Desenvolvimento de Sistemas',
            'description' => '<a href="#" class="btn btn-primary">O que você precisa?</a>',
            'image' => config('app.url').'/img/desenvolvimento-sistemas.jpg'
        ]);
    }
}
