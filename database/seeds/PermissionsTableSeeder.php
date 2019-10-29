<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //----------------Permisos de usuario----------------
        Permission::create([
        	'name'        => 'Navegador usuario',
        	'slug'        => 'users.index',
        	'description' => 'Lista y Navegan todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de usuario',
        	'slug'        => 'users.show',
        	'description' => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de usuario',
        	'slug'        => 'users.edit',
        	'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar usuario',
        	'slug'        => 'users.destroy',
        	'description' => 'Eliminar cualquier usuario del sistema',
        ]);

       //----------------Roles de usuario--------------------
        Permission::create([
        	'name'        => 'Navegador roles',
        	'slug'        => 'roles.index',
        	'description' => 'Lista y Navegan todos los roles del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de rol',
        	'slug'        => 'roles.show',
        	'description' => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de roles',
        	'slug'        => 'roles.create',
        	'description' => 'Crear roles de usuario del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de roles',
        	'slug'        => 'roles.edit',
        	'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar rol',
        	'slug'        => 'roles.destroy',
        	'description' => 'Eliminar cualquier rol del sistema',
        ]);

        //--------------------Productos-------------------------
        Permission::create([
        	'name'        => 'Navegador productos',
        	'slug'        => 'products.index',
        	'description' => 'Lista y Navegan todos los productos del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de producto',
        	'slug'        => 'products.show',
        	'description' => 'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de productos',
        	'slug'        => 'products.create',
        	'description' => 'Crear productos de usuario del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de productos',
        	'slug'        => 'products.edit',
        	'description' => 'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar producto',
        	'slug'        => 'products.destroy',
        	'description' => 'Eliminar cualquier producto del sistema',
        ]);
    }
}
