<?php

namespace Modules\Almacen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Almacen\Entities\Sorter;
use Illuminate\Support\Facades\Auth;
class SorterController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $sorters = Sorter::all();
        $user = Auth::user();
        //dd($unities);
        session(['sorters' => $sorters]);   
        session(['user' => Auth::user()]);
        //dd(Auth::user()->unities()->get());
        return view('almacen::config.sorter.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('almacen::config.sorter.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $post = new Sorter;
        $post->code_sorter = $request->code_sorter;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->year = $request->year;
        $post->user_id = $request->id;
        $post->save();
        if($post){
            return redirect('almacen/sorter');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return ('home');
        //return view('almacen::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $sorter=Sorter::where('sorters.id', '=', $id)->first();
        return view('almacen::config.sorter.edit', ['sorter' => $sorter]);
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
        //
        //dd($request->id);
        $post = Sorter::findOrFail($id);
        $post->code_sorter = $request->code_sorter;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->year = $request->year;
        $post->save();
        if($post){
            return redirect('almacen/sorter');
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
