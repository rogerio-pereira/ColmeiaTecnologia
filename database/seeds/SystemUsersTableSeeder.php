<?php

use Illuminate\Database\Seeder;
use App\Models\SystemUser;

class SystemUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SystemUser::class)->create([
            'name' => 'Rogério Eduardo Pereira',
            'email' => 'rogerio@colmeiatecnologia.com.br',
            'password' => '$2y$10$sbyaGhD6rG8MY1g4FArA/Oo9fsOMX/M1CN88cLO4HnUkJ3SgGpnue', 
            'remember_token' => str_random(10),
        ]);


        factory(SystemUser::class)->create([
            'name' => 'Sistema',
            'email' => 'sistema@test.com',
            'password' => bcrypt(123456), 
            'remember_token' => str_random(10),
        ]);
    }
}
