<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sempaks;
use App\Http\Requests\UpdateSempaks;
use App\Models\KapalModel;
use App\Models\Sempak;
use Illuminate\Http\Request;

class SempakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kapal.sempak.index', ['sempakdekil' => KapalModel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kapal.sempak.add', ['sempak' => KapalModel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Sempaks $request)
    {
        Sempak::create($request->validated());
        return redirect()->route('kapal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sempak $sempak)
    {
        return view('pages.kapal.sempak.edit', compact('sempak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSempaks $request, Sempak $sempak)
    {
        $sempak::where('id', $sempak->id)->update($request->validated());
        return redirect()->route('kapal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sempak $id)
    {
        //
    }
}
