<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //tabla courses
            'ver-course',
            'crear-course',
            'editar-course',
            'borrar-course',
            ];
            foreach ($permisos as $permiso){
                Permission::create(['name' => $permiso]);
            }
    }
}
