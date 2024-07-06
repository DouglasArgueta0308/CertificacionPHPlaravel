<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\FaCADES\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('docente')->insert([
            'nombre' => 'admin',
            'apellido' => '.admin',
            'email' => '.admin@admin.com',
            'password' => Hash ::make ('admin'),
        ]);
    }
}
