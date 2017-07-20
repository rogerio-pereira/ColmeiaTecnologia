<?php

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Portfolio::class)->create([
            'name' => 'Hotel Estâcia',
            'url' => 'http://www.eph.com.br/',
            'image' => config('app.url').'/img/hotel-estancia.jpg'
        ]);

        factory(Portfolio::class)->create([
            'name' => 'Soares & Ornellas',
            'url' => 'http://www.soareseornellas.com.br/',
            'image' => config('app.url').'/img/soares-e-ornellas.jpg'
        ]);
    }
}
