<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKapal;
use App\Http\Requests\UpdateKapal;
use App\Models\Details;
use App\Models\Kapal;
use App\Models\Schedule;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class KapalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ships = Kapal::paginate(10)->withPath(route('kapal.index'));
        $keperluan = Details::all();
        return view('pages.kapal.list-kapal.index', [
            'ships' => $ships,
            'keperluan' => $keperluan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kapal.list-kapal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKapal  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKapal $request)
    {
        Kapal::create($request->validated());
        return redirect()->route('kapal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kapal  $kapal
     * @return \Illuminate\Http\Response
     */
    public function show(Kapal $kapal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kapal  $kapal
     * @return \Illuminate\Http\Response
     */
    public function edit(Kapal $kapal)
    {
        return view('pages.kapal.list-kapal.edit', compact('kapal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKapal  $request
     * @param  \App\Models\Kapal  $kapal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKapal $request, Kapal $kapal)
    {
        $kapal::where('id', $kapal->id)->update($request->validated());
        return redirect()->route('kapal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kapal  $kapal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kapal $kapal)
    {
        $kapal::destroy($kapal->id);

        return redirect()
            ->route('kapal.index')
            ->with([
                'message'       => 'Data Kapal berhasil dihapus',
                'alert-type'    => 'success',
                'icon'          => '<svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>',
            ]);
    }

    public function recapitulation()
    {
        $ships = Kapal::paginate(10)->withPath(route('rekapitulasi.index'));
        
        return view('pages.kapal.rekapitulasi-data.index', compact('ships'));
    }
}