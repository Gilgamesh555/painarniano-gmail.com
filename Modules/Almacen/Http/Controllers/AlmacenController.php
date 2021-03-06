<?php

namespace Modules\Almacen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\System;
use App\Model\Module;
class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        //dd($sys);
        $almacen = System::select('systems.id', 'systems.slug', 'roles.name as roleName', 'roles.slug as slug_role')
                  ->join('modules','systems.id','=','modules.system_id')
                  ->join('permissions','modules.id','=','permissions.module_id')
                  ->join('permission_role as per1','permissions.id','=','per1.permission_id')
                  ->join('roles','per1.role_id','=','roles.id')
                  ->join('role_user as rol1','roles.id','=','rol1.role_id')
                  ->join('users','users.id','=','rol1.user_id')
                  ->where('users.id','=',Auth::user()->id)
                  ->where('systems.id', '=', 3)
                  ->distinct('systems.name')
                  ->first();
        //dd($almacen);
        if(Auth::user()->hasRole($almacen->slug_role)){
            $modules = System::select('modules.id','modules.name','systems.id', 'modules.slug')
                ->join('modules','systems.id','=','modules.system_id')         
                ->join('permissions','modules.id','=','permissions.module_id')
                ->join('permission_role as per1','permissions.id','=','per1.permission_id')
                ->join('roles','per1.role_id','=','roles.id')
                ->join('role_user as rol1','roles.id','=','rol1.role_id')
                ->join('users','users.id','=','rol1.user_id')
                ->where([
                    ['users.id','=',Auth::user()->id],
                    ['systems.id', '=', $almacen->id],
                    ])
                ->distinct('modules.name')
                ->get();
            //dd($modules);
            session(['modules' => $modules ]);
            return view('almacen::index');
        }
        if($condition == true){
            if(session()->has('modules')){
                return view('almacen::index');
            }
            else{
                $modules = System::select('modules.id','modules.name','systems.id','modules.slug')
                  ->join('modules','systems.id','=','modules.system_id')         
                  ->join('permissions','modules.id','=','permissions.module_id')
                  ->join('permission_role as per1','permissions.id','=','per1.permission_id')
                  ->join('roles','per1.role_id','=','roles.id')
                  ->join('role_user as rol1','roles.id','=','rol1.role_id')
                  ->join('users','users.id','=','rol1.user_id')
                  ->where([
                      ['users.id','=',Auth::user()->id],
                      ['systems.id', '=',$id],
                      ])
                  ->distinct('modules.name')
                  ->get();
                session(['modules' => $modules ]);
                return view('almacen::index');
            }
        }
        // }
        return redirect()->route('/');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('almacen::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('almacen::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('almacen::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
