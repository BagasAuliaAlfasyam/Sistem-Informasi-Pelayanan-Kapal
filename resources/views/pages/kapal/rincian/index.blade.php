<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <a href="{{ route('details.create') }}" role="button">
      <button class="btn btn-sm btn-primary">Tambah Rincian</button>
    </a>

    <div class="overflow-x-auto mt-4">

      <table class="table table-xs text-center bg-slate-500/20">
        <thead class="text-slate-600 dark:text-slate-400">
          <tr>
            <th>No.</th>
            <th>Nama Kapal</th>
            <th>Muat</th>
            <th>Bongkar</th>
            <th>Jenis Barang</th>
            <th>Keterangan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="capitalize">
          @forelse ($details as $detail)
            <tr class="hover">
              <th>{{ $details->firstItem() + $loop->index }}</th>
              <td>{{ $detail->nama_kapal }}</td>
              <td>{{ $detail->muat_barang }}</td>
              <td>{{ $detail->bongkar }}</td>
              <td>{{ $detail->jenis_barang }}</td>
              <td>{{ $detail->keterangan }}</td>
              <td class="flex justify-center gap-2">
                <a href="{{ route('details.edit', [$detail->id]) }}" class="hover:text-yellow-600">
                  <x-edit-icon />
                </a>
              </td>
            </tr>
          @empty 
            <tr><td colspan="7">Rincian kapal tidak ada</td></tr>
          @endforelse
        </tbody>
      </table>

      <div class="mt-5">
        {{ $details->links() }}
      </div>
      
    </div>
  </div>
</x-app-layout>
