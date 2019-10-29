<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();

        Role::create([
        	'name' 	      => 'Super User',
        	'slug' 	      => 'superuser',
            'description' => 'Rol con todos los accesos disponibles para el sistema',
        	'special'     => 'all-access',
        ]);
        Role::create([
            'name'        => 'Admin',
            'slug'        => 'admin',
            'description' => 'Rol con accesos administrativos',
        ]);
    }
}
