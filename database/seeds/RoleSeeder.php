<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert([
            'name'=> 'sysadmin',
            'slug'=>'sysadmin',
            'description' => 'root of the system',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('role_user')->insert([
            'user_id'=> 1,
            'role_id'=> 1,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);


         DB::table('roles')->insert([
            'name'=> 'admin',
            'slug'=>'admin',
            'description' => 'system administrator',
             'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('role_user')->insert([
            'user_id'=> 2,
            'role_id'=> 2,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

         DB::table('roles')->insert([
            'name'=> 'operador',
            'slug'=>'operator',
            'description' => 'system operator',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('role_user')->insert([
            'user_id'=> 3,
            'role_id'=> 3,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('roles')->insert([
            'name'=> 'guest',
            'slug'=>'guest',
            'description' => 'public user of the system',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
        ]);

        DB::table('role_user')->insert([
            'user_id'=> 4,
            'role_id'=> 4,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
         DB::table('role_user')->insert([
            'user_id'=> 1,
            'role_id'=> 2,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
          DB::table('role_user')->insert([
            'user_id'=> 1,
            'role_id'=> 3,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
           DB::table('role_user')->insert([
            'user_id'=> 1,
            'role_id'=> 4,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('role_user')->insert([
            'user_id'=> 6,
            'role_id'=> 2,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('role_user')->insert([
            'user_id'=> 7,
            'role_id'=> 2,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }

}
