<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKapalModelRequest;
use App\Http\Requests\UpdateKapalModelRequest;
use App\Models\Details;
use App\Models\KapalModel;
use App\Models\Schedule;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class KapalModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keperluan = Details::all();
        return view('pages.kapal.list-kapal.index', [
            'ships' => KapalModel::paginate(10),
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
     * @param  \App\Http\Requests\StoreKapalModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKapalModelRequest $request)
    {
        KapalModel::create($request->validated());
        return redirect()->route('rincian.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KapalModel  $kapalModel
     * @return \Illuminate\Http\Response
     */
    public function show(KapalModel $kapalModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KapalModel  $kapal
     * @return \Illuminate\Http\Response
     */
    public function edit(KapalModel $kapal)
    {
        return view('pages.kapal.list-kapal.edit', compact('kapal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKapalModelRequest  $request
     * @param  \App\Models\KapalModel  $kapalModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKapalModelRequest $request, KapalModel $kapal)
    {
        $kapal::where('id', $kapal->id)->update($request->validated());
        return redirect()->route('kapal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KapalModel  $kapal
     * @return \Illuminate\Http\Response
     */
    public function destroy(KapalModel $kapal)
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

    public function recapitulation(Request $request)
    {
        // $ships = KapalModel::paginate(10);
        $query = KapalModel::query();
        // $query = DB::table('kapal')
        //     ->join('penjadwalan_kapals', 'kapal.id', '=', 'penjadwalan_kapals.id_kapal')
        //     ->join('keperluans', 'kapal.id', '=', 'keperluans.id_kapal');
        // ->select('kapal.nama_kapal', 'kapal.keagenan', 'kapal.loa', 'kapal.gt', 'kapal.bendera', 'kapal.created_at as tanggal', 'penjadwalan_kapals.tanggal_tiba', 'penjadwalan_kapals.tiba_dari', 'penjadwalan_kapals.posisi_tambat', 'penjadwalan_kapals.tujuan', 'penjadwalan_kapals.tanggal_rencana_berangkat', 'keperluans.muat_barang', 'keperluans.bongkar', 'keperluans.jenis_barang', 'keperluans.keterangan');
        $kapal = KapalModel::all();
        $penjadwalan = Schedule::all();
        if (count($kapal) != count($penjadwalan)) {
            return redirect()
                ->route('kapal.index')
                ->with([
                    'message' => 'Data kapal belum lengkap',
                    'alert-type' => 'error',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>',
                ]);
        }
        $dateFilter = $request->date_filter;

        switch ($dateFilter) {
            case 'today':
                $query->whereDate('created_at', Carbon::today());
                break;
            case 'yesterday':
                $query->wheredate('created_at', Carbon::yesterday());
                break;
            case 'this_week':
                $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                break;
            case 'last_week':
                $query->whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()]);
                break;
            case 'this_month':
                $query->whereMonth('created_at', Carbon::now()->month);
                break;
            case 'last_month':
                $query->whereMonth('created_at', Carbon::now()->subMonth()->month);
                break;
            case 'this_year':
                $query->whereYear('created_at', Carbon::now()->year);
                break;
            case 'last_year':
                $query->whereYear('created_at', Carbon::now()->subYear()->year);
                break;
        }

        $ships = $query->get();
        return view('pages.kapal.rekapitulasi-data.index', compact('ships', 'dateFilter'));
    }
}
