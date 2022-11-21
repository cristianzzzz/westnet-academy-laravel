<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
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
            //Operacions sobre tabla users
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //Operacions sobre tabla courses
            'ver-curso',
            'crear-curso',
            'editar-curso',
            'borrar-curso',
            //Operacions sobre tabla payments
            'ver-pago',
            'crear-pago',
            'editar-pago',
            'borrar-pago',
            ];
            foreach ($permisos as $permiso){
                Permission::create(['name' => $permiso]);
            }
    }
}
