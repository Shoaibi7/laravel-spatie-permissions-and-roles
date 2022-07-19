<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use Spatie\Permission\Contracts\Permission;
use App\Models\User;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        // Role::create(['name' => 'publisher']);

        // Permission::create(['name' => 'publish post']);

        // give permission to role

        // $permission = Permission::create(['name' => 'publish post']);
        // $role = Role::findById(2);
        // $permission = Permission::findById(2);

        // $role->givePermissionTo($permission);

        // delete permission and role
        // $permission->removeRole($role);

        // $permission->revokePermissionTo($role);

        // Give permissions to user

        // auth()->user()->givePermissionTo('edit post');

        // auth()->user()->assignRole('editor');

        // return auth()->user()->permissions;

        // return auth()->user()->getDirectPermissions();
        // return auth()->user()->getPermissionsViaRoles();
        // return auth()->user()->getAllPermissions();

        // return User::role('writer')->get();

        $datas = Post::paginate(5);
        return view('home', compact('datas'));
    }
}
