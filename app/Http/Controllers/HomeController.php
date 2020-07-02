<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name' => 'Administrator']);
        // Role::create(['name' => 'Writer']);
        // Role::create(['name' => 'Editor']);
        // Role::create(['name' => 'Publisher']);

        // Permission::create(['name' => 'edit articles']);
        // Permission::create(['name' => 'write articles']);
        // Permission::create(['name' => 'publish articles']);

        // auth()->user()->givePermissionTo('edit articles');
        // auth()->user()->givePermissionTo('write articles');
        // auth()->user()->assignRole('writer');
        // return auth()->user()->getAllPermissions();

        // gan permission to role
        // $permission1 = Permission::findById(1);
        // $permission2 = Permission::findById(2);
        // $permission3 = Permission::findById(3);
        // $role1 = Role::findById(15);
        // $role2 = Role::findById(14);
        // $role3 = Role::findById(16);
        // $role4 = Role::findById(13);
        // $role1->givePermissionTo($permission1);
        // $role2->givePermissionTo($permission2);
        // $role3->givePermissionTo($permission3);
        // $role4->givePermissionTo($permission1);
        // $role4->givePermissionTo($permission2);
        // $role4->givePermissionTo($permission3);

        // auth()->user()->assignRole('Administrator');
        // auth()->user()->assignRole('Publisher');
        // auth()->user()->assignRole('Writer');
        // auth()->user()->assignRole('Editor');
        // auth()->user()->removeRole('Editor');
        

        // $user1->assignRole('writer');
        // return Role::findByName('Administrator'); 
        // $user2 = DB::table('users')->where('id', 6)->get();
        // $user2->assignRole('Writer');
        // $user3 = DB::table('users')->where('id', 7)->get();
        // $user3->assignRole('Editor');
        // $user4 = DB::table('users')->where('id', 8)->get();
        // $user4->assignRole('Publisher');

        // auth()->user()->revokePermissionTo('edit articles');
        // auth()->user()->removeRole('writer');

        // return auth()->user()->can('edit articles');

        // return DB::table('roles')->delete();  // remove roles

        // return DB::table('users')->get(); // get Users

        // 
        // return Role::findByName('Administrator');
        // return $users = Role::with('permissions')->get();
        
        return view('home');
    }
}
