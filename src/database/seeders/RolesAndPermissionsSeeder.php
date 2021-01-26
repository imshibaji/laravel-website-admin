<?php
namespace Shibaji\Admin\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        DB::table('permissions')->delete();

        $datas = [
            [
              "id" => 1,
              "name" => "add post",
              "guard_name" => "web"
            ],
            [
              "id" => 2,
              "name" => "edit post",
              "guard_name" => "web"
            ],
            [
              "id" => 3,
              "name" => "delete post",
              "guard_name" => "web"
            ],
            [
              "id" => 4,
              "name" => "view post",
              "guard_name" => "web"
            ],
            [
              "id" => 5,
              "name"  => "add role",
              "guard_name" => "web",
            ],
            [
              "id" => 6,
              "name" => "edit role",
              "guard_name" => "web"
            ],
            [
              "id" => 7,
              "name" => "delete role",
              "guard_name" => "web"
            ],
            [
              "id" => 8,
              "name" => "view role",
              "guard_name" => "web"
            ],
            [
              "id" => 9,
              "name" => "add permission",
              "guard_name" => "web"
            ],
            [
              "id" => 10,
              "name" => "edit permission",
              "guard_name" => "web"
            ],
            [
              "id" => 11,
              "name" => "delete permission",
              "guard_name" => "web"
            ],
            [
              "id" => 12,
              "name" => "view permission",
              "guard_name" => "web"
            ],
            [
              "id" => 13,
              "name" => "add setting",
              "guard_name" => "web"
            ],
            [
              "id" => 14,
              "name" => "edit setting",
              "guard_name" => "web"
            ],
            [
              "id" => 15,
              "name" => "delete setting",
              "guard_name" => "web"
            ],
            [
              "id" => 16,
              "name" => "view setting",
              "guard_name" => "web"
            ],
            [
              "id" => 17,
              "name" => "add user",
              "guard_name" => "web"
            ],
            [
              "id" => 18,
              "name" => "edit user",
              "guard_name" => "web"
            ],
            [
              "id" => 19,
              "name" => "delete user",
              "guard_name" => "web"
            ],
            [
              "id" => 20,
              "name" => "view user",
              "guard_name" => "web"
            ],
            [
              "id" => 21,
              "name" => "add seo",
              "guard_name" => "web"
            ],
            [
              "id" => 22,
              "name" => "edit seo",
              "guard_name" => "web"
            ],
            [
              "id" => 23,
              "name" => "view seo",
              "guard_name" => "web"
            ],
            [
              "id" => 24,
              "name" => "delete seo",
              "guard_name" => "web"
            ]
        ];

        DB::table('permissions')->insert($datas);
        // create roles and assign created permissions

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        User::find(1)->syncRoles($role);

        // or may be done by chaining
        Role::create(['name' => 'moderator']);

        // this can be done as separate statements
        $role = Role::create(['name' => 'client']);

    }
}
