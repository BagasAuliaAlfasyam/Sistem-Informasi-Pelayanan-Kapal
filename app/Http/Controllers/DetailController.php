<?php

namespace App\Http\Controllers;

use App\Http\Requests\Details;
use App\Http\Requests\UpdateDetails;
use App\Models\Details as ModelsDetails;
use App\Models\KapalModel;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kapal.keperluan.index', ['ships' => KapalModel::with('keperluan')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kapal.keperluan.add', ['ships' => KapalModel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Details $request)
    {
        ModelsDetails::create($request->validated());
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
    public function edit(ModelsDetails $detail)
    {
        return view('pages.kapal.keperluan.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetails $request, ModelsDetails $detail)
    {
        $detail::where('id', $detail->id)->update($request->validated());
        return redirect()->route('kapal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsDetails $id)
    {
        //
    }
}
