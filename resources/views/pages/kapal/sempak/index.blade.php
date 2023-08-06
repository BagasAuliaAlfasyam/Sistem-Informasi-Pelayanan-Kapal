<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <a href="{{ route('sempak.create') }}" role="button">
      <button class="btn btn-sm btn-primary">Tambah Rincian</button>
    </a>

    <div class="overflow-x-auto mt-4">

      <table class="table table-xs text-center even:bg-slate-500">
        <thead class="text-slate-600">
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
          @foreach ($sempakdekil as $k)
            <tr class="hover:bg-slate-200 hover:text-slate-500">
              <th>{{ $loop->iteration }}</th>
              <td>{{ $k->nama_kapal }}</td>
              <td>{{ $k->sempak->muat_barang }}</td>
              <td>{{ $k->sempak->bongkar }}</td>
              <td>{{ $k->sempak->jenis_barang }}</td>
              <td>{{ $k->sempak->keterangan }}</td>
              <td class="flex justify-center gap-2">
                <a href="{{ route('sempak.edit', [$k->sempak->id]) }}" class="hover:text-yellow-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                </a>
                <form action="" method="post" class="hover:text-red-700">
                  @csrf
                  @method('delete')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data kapal?')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                      class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      {{-- <div class="mt-5">
        {{ $ships->links() }}
      </div> --}}
      
    </div>
  </div>
</x-app-layout>
