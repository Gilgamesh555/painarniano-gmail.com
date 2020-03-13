<?php

namespace Modules\Almacen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Almacen\Entities\Unity;

class UnityController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $unities = Unity::all();
        $user = Auth::user();
        //dd($unities);
        session(['unities' => $unities]);   
        session(['user' => Auth::user()]);
        //dd(Auth::user()->unities()->get());
        return view('almacen::config.unity.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('almacen::config.unity.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $post = new Unity;
        $post->name = $request->name;
        $post->year = $request->year;
        $post->status = $request->status;
        $post->user_id = $request->id;
        $post->save();
        if($post){
            return redirect('almacen/unity');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //dd($id);   
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $unit=Unity::where('unities.id', '=', $id)->first();
        return view('almacen::config.unity.edit', ['unit' => $unit]);
        //dd($unitie);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //s
        //dd($request);
        $post = Unity::findOrFail($id);
        $post->name = $request->name;
        $post->year = $request->year;
        $post->status = $request->status;
        $post->save();
        if($post){
            return redirect('almacen/unity');
        }     
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
