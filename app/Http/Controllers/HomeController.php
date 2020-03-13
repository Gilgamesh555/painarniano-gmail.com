<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Model\Permission;
use App\Model\System;
use App\Model\Module;
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
        $system = System::select('systems.id','systems.name','systems.description', 'systems.slug', 'roles.name as roleName', 'roles.slug as slug_role')
                  ->join('modules','systems.id','=','modules.system_id')
                  ->join('permissions','modules.id','=','permissions.module_id')
                  ->join('permission_role as per1','permissions.id','=','per1.permission_id')
                  ->join('roles','per1.role_id','=','roles.id')
                  ->join('role_user as rol1','roles.id','=','rol1.role_id')
                  ->join('users','users.id','=','rol1.user_id')
                  ->where('users.id','=',Auth::user()->id)
                  ->distinct('systems.name')
                  ->get();
                  session(['systems' => $system ]);
                   	
        session()->forget('modules');
        return view('home');
    }   
}
