<?php

namespace Modules\Almacen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Auth;
use Modules\Almacen\Entities\ProgramActivity;
use Modules\Almacen\Repositories\Setting\PermissionRepository;
class ProgramActivityController extends Controller
{
    protected $permission;
    /**
     * Display a listing of the resource.
     * @return Response
     */
    /**
     * [__construct description]
     * @method __construct
     */
    public function __construct(){
        $this->permission = app(PermissionRepository::class);
    }
    public function index()
    {
        $system = session('systems')->where('name', 'ALMACENES')->first();
        if($this->permission->hasPermission('program-activity.index',$system->roleName)){
            $program_activities = ProgramActivity::all();
            return view('almacen::config.program-activity.index', compact('program_activities'));
        }
        else{
            return view('almacen::index');
        }
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
