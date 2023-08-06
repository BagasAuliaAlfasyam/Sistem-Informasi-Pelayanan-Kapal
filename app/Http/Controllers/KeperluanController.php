<?php

namespace App\Http\Controllers;

use App\Models\Keperluan;
use App\Http\Requests\StoreKeperluanRequest;
use App\Http\Requests\UpdateKeperluanRequest;
use App\Models\KapalModel;

class KeperluanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keperluan = Keperluan::paginate(10);
        return view('pages.kapal.keperluan.index', compact('keperluan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kapal.keperluan.add', [
            'ships' => KapalModel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKeperluanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeperluanRequest $request)
    {
        Keperluan::create($request->validated());
        return redirect()->route('kapal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function show(Keperluan $keperluan)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keperluan $keperluan)
    {
        return view('pages.kapal.keperluan.edit', compact('keperluan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeperluanRequest  $request
     * @param  \App\Models\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeperluanRequest $request, Keperluan $keperluan)
    {
        $keperluan::where('id', 'id_kapal')->update($request->validated());
        return redirect()->route('kapal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keperluan $keperluan)
    {
        //
    }
}
