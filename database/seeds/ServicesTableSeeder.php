<?php

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Service::class)->create([
            'name' => 'Assistencia Técnica Especializada',
            'icon' => '<i class="fa fa-desktop fa-4x"></i>',
        ]);

        factory(Service::class)->create([
            'name' => 'Montagem e Configuração de Redes',
            'icon' => '<i class="fa fa-wifi fa-4x"></i>',
        ]);

        factory(Service::class)->create([
            'name' => 'Desenvolvimento de Sites e Sistemas',
            'icon' => '<i class="fa fa-code fa-4x"></i>',
        ]);

        factory(Service::class)->create([
            'name' => 'Hospedagem de Sites',
            'icon' => '<i class="fa fa-cloud fa-4x"></i>',
        ]);

        factory(Service::class)->create([
            'name' => 'Melhore sua presença nas mídias sociais',
            'icon' => '<i class="fa fa-facebook-official fa-4x"></i>',
        ]);

        factory(Service::class)->create([
            'name' => 'Você na primeira página',
            'icon' => '<i class="fa fa-google fa-4x"></i>',
        ]);
    }
}
