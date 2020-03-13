<?php

namespace Modules\Almacen\Repositories\Setting;
use App\Model\Permmission;

use Illuminate\Support\Facades\Auth;
class PermissionRepository{
    protected $permissions;
    /**
     * [__construct description]
     * @method __construct
     */
    public function __construct(){
        $this->permissions = Permission::class;
    }
    public function hasPermission($name_permission, $name_role){
        // return $name_permission." ".$name_role;
        // return Auth::user()->id;
        return (count(Auth::user()->select('*')
            ->join('role_user as ru', 'users.id','=','ru.user_id')
            ->join('roles', 'roles.id','=','ru.role_id')
            ->join('permission_role as pr', 'roles.id','=','pr.role_id')
            ->join('permissions','permissions.id', '=', 'pr.permission_id')
            // ->where('roles.name', $name_role)
            // ->where('permissions.name',$name_permission)
            ->where([
                ['users.id',Auth::user()->id],
                ['roles.name', $name_role],
                ['permissions.slug',$name_permission]
            ])->get())>0)?true:false;
    }
}