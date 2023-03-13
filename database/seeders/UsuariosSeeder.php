<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\usuarios;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('usuarios')->insert([
            'nombre'=> 'Admon',
            'apellido_p'=> 'na',
            'apellido_m'=> 'na',
            'correo'=> 'admon@robotics.com',
            'password'=> 'Adm@2022',
            'id_curso'=> 'Rob103',
            'id_grupo'=> '1',
            'id_role'=> '1'
        ]);

        DB::table('usuarios')->insert([
            'nombre'=> 'Tecmilenio',
            'apellido_p'=> 'na',
            'apellido_m'=> 'na',
            'correo'=> 'tecmilenio@robotics.com',
            'password'=> 'Adm@2022 ',
            'id_curso'=> 'Rob102',
            'id_grupo'=> '1',
            'id_role'=> '2'
        ]);

        DB::table('usuarios')->insert([
            'nombre'=> 'Estudiante',
            'apellido_p'=> 'na',
            'apellido_m'=> 'na',
            'correo'=> 'student@robotics.com',
            'password'=> 'Adm@2022 ',
            'id_curso'=> 'Rob101',
            'id_grupo'=> '1',
            'id_role'=> '3'
        ]);




    }
}
