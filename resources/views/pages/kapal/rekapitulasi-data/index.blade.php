<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <div class="form-group">
      <label for="date_filter">Filter by Date:</label>

      <form method="get" action="{{ route('rekapitulasi.index') }}">
        <div class="input-group">
          <select class="form-select" name="date_filter">
            <option value="">All Dates</option>
            <option value="today" {{ $dateFilter == 'today' ? 'selected' : '' }}>Today</option>
            <option value="yesterday" {{ $dateFilter == 'yesterday' ? 'selected' : '' }}>Yesterday</option>
            <option value="this_week" {{ $dateFilter == 'this_week' ? 'selected' : '' }}>This Week</option>
            <option value="last_week" {{ $dateFilter == 'last_week' ? 'selected' : '' }}>Last Week</option>
            <option value="this_month" {{ $dateFilter == 'this_month' ? 'selected' : '' }}>This Month</option>
            <option value="last_month" {{ $dateFilter == 'last_month' ? 'selected' : '' }}>Last Month</option>
            <option value="this_year" {{ $dateFilter == 'this_year' ? 'selected' : '' }}>This Year</option>
            <option value="last_year" {{ $dateFilter == 'last_year' ? 'selected' : '' }}>Last Year</option>
          </select>
          <button type="submit" class="btn btn-primary">Filter</button>
        </div>
      </form>

    </div>
    <div class="overflow-x-auto mt-4">
      {{-- {{ $ships->links() }} --}}

      <table class="table table-xs text-center even:bg-slate-500">
        <thead class="text-slate-600">
          <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama Kapal</th>
            <th rowspan="2">Keagenan</th>
            <th colspan="2" class="text-center">Ukuran</th>
            <th colspan="2" class="text-center">Tiba</th>
            <th colspan="2" class="text-center">Rencana Berangkat</th>
            <th colspan="2" class="text-center">Rencana Kegiatan</th>
            <th rowspan="2">Jenis Barang</th>
            <th rowspan="2">Posisi Tambat</th>
            <th rowspan="2">Bendera</th>
            <th rowspan="2">Keterangan</th>
            <th rowspan="2">Tanggal</th>
          </tr>
          <tr>
            <th>LOA</th>
            <th>GT</th>
            <th>Dari</th>
            <th>Tanggal</th>
            <th>Tujuan</th>
            <th>Tanggal</th>
            <th>B (Ton/M3)</th>
            <th>M (Ton/M3)</th>
          </tr>
        </thead>
        <tbody class="capitalize">
          @foreach ($ships as $kapal)
            <tr class="hover:bg-slate-200 hover:text-slate-500">
              <th>{{ $loop->iteration }}</th>
              <td>{{ $kapal->nama_kapal }}</td>
              <td>{{ $kapal->keagenan }}</td>
              <td>{{ $kapal->loa }}</td>
              <td>{{ $kapal->gt }}</td>
              <td>{{ $kapal->penjadwalan->tiba_dari }}</td>
              <td>{{ Carbon\Carbon::parse($kapal->penjadwalan->tanggal_tiba)->format('d-m-Y') }}</td>
              <td>{{ $kapal->penjadwalan->tujuan }}</td>
              <td>{{ Carbon\Carbon::parse($kapal->penjadwalan->tanggal_rencana_berangkat)->format('d-m-Y') }}</td>
              <td>{{ $kapal->keperluan->bongkar }}</td>
              <td>{{ $kapal->keperluan->muat_barang }}</td>
              <td>{{ $kapal->keperluan->jenis_barang }}</td>
              <td>{{ $kapal->penjadwalan->posisi_tambat }}</td>
              <td>{{ $kapal->bendera }}</td>
              <td>{{ $kapal->keperluan->keterangan }}</td>
              <td>{{ $kapal->created_at->format('d-m-Y') }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-app-layout>
