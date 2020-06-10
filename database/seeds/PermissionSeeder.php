<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * permisos para usuarios
         */
        DB::table('permissions')->insert([
            'name'=> 'index users',
            'slug'=>'index.users',
            'description' => 'list users',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 1,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'update user',
            'slug'=>'update.users',
            'description' => 'update user',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 2,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'show user',
            'slug'=>'show.users',
            'description' => 'show user',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 3,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'delete user',
            'slug'=>'delete.users',
            'description' => 'delete user',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 4,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'store user',
            'slug'=>'store.users',
            'description' => 'store user',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 5,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        /*
         * permisos para cuentas
         */
        DB::table('permissions')->insert([
            'name'=> 'index accounts',
            'slug'=>'index.accounts',
            'description' => 'list accounts',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 6,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'update account',
            'slug'=>'update.accounts',
            'description' => 'update account',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 7,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'show account',
            'slug'=>'show.accounts',
            'description' => 'show account',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 8,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'delete account',
            'slug'=>'delete.accounts',
            'description' => 'delete account',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 9,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'store account',
            'slug'=>'store.accounts',
            'description' => 'store account',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 10,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        /*
         * permisos para roles
         */
        DB::table('permissions')->insert([
            'name'=> 'index roles',
            'slug'=>'index.roles',
            'description' => 'list roles',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 11,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'update role',
            'slug'=>'update.roles',
            'description' => 'update roles',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 12,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'show roles',
            'slug'=>'show.roles',
            'description' => 'show roles',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 13,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'delete roles',
            'slug'=>'delete.roles',
            'description' => 'delete roles',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 14,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'store roles',
            'slug'=>'store.roles',
            'description' => 'store roles',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 15,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        /*
         * permisos para permisos
         */
        DB::table('permissions')->insert([
            'name'=> 'index permissions',
            'slug'=>'index.permissions',
            'description' => 'list permissions',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 16,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'update role',
            'slug'=>'update.permissions',
            'description' => 'update permissions',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 17,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'show permissions',
            'slug'=>'show.permissions',
            'description' => 'show permissions',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 18,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'delete permissions',
            'slug'=>'delete.permissions',
            'description' => 'delete permissions',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 19,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'store permissions',
            'slug'=>'store.permissions',
            'description' => 'store permissions',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 20,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        /**
         * permisos para proyectos
         */
        DB::table('permissions')->insert([
            'name'=> 'index projects',
            'slug'=>'index.projects',
            'description' => 'list projects',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 21,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'update projects',
            'slug'=>'update.projects',
            'description' => 'update projects',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 22,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'show projects',
            'slug'=>'show.projects',
            'description' => 'show projects',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 23,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'delete projects',
            'slug'=>'delete.projects',
            'description' => 'delete projects',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 24,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'store projects',
            'slug'=>'store.projects',
            'description' => 'store projects',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 25,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        /**
         * permisos para sondajes
         */
        DB::table('permissions')->insert([
            'name'=> 'index probes',
            'slug'=>'index.probes',
            'description' => 'list probes',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 26,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'update probe',
            'slug'=>'update.probes',
            'description' => 'update probes',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 27,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'show probes',
            'slug'=>'show.probes',
            'description' => 'show probes',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 28,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'delete probes',
            'slug'=>'delete.probes',
            'description' => 'delete probes',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 29,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'store probes',
            'slug'=>'store.probes',
            'description' => 'store probes',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 30,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        /*
         * permisos para cajas
         */
        DB::table('permissions')->insert([
            'name'=> 'index boxes',
            'slug'=>'index.boxes',
            'description' => 'list boxes',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 31,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'update boxe',
            'slug'=>'update.boxes',
            'description' => 'update boxes',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 32,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'show boxes',
            'slug'=>'show.boxes',
            'description' => 'show boxes',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 33,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'delete boxes',
            'slug'=>'delete.boxes',
            'description' => 'delete boxes',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 34,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'store boxes',
            'slug'=>'store.boxes',
            'description' => 'store boxes',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 35,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('permissions')->insert([
            'name'=> 'assigned role',
            'slug'=>'assigned.roles',
            'description' => 'asignar rol',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 36,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permissions')->insert([
            'name'=> 'revoke role',
            'slug'=>'revoke.role',
            'description' => 'quitar rol a usuario',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 37,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permissions')->insert([
            'name'=> 'asignar permiso',
            'slug'=>'assigned.permission',
            'description' => 'asignar permiso a rol',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 38,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permissions')->insert([
            'name'=> 'quitar permiso',
            'slug'=>'revoke.permission',
            'description' => 'quitar permiso a rol',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('permission_role')->insert([
            'permission_id'=> 39,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
