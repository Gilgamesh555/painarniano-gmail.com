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
        $systems = session('systems');
        //dd($modules);
        foreach($systems as $s){
            //dd($s);
            if(Auth::user()->hasRole($s->roleName)){
                $modules = System::select('modules.id','modules.name','systems.id')
                  ->join('modules','systems.id','=','modules.system_id')         
                  ->join('permissions','modules.id','=','permissions.module_id')
                  ->join('permission_role as per1','permissions.id','=','per1.permission_id')
                  ->join('roles','per1.role_id','=','roles.id')
                  ->join('role_user as rol1','roles.id','=','rol1.role_id')
                  ->join('users','users.id','=','rol1.user_id')
                  ->where([
                      ['users.id','=',Auth::user()->id],
                      ['systems.id', '=', $s->id],
                      ])
                  ->distinct('modules.name')
                  ->get();
                session(['modules' => $modules ]);
                return view('almacen::index');
            }
        }
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
