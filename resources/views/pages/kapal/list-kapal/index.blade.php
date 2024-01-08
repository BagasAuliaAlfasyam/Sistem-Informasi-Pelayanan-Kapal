<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <a href="{{ route('kapal.create') }}" role="button">
            <button class="btn btn-sm btn-primary">Tambah Kapal</button>
        </a>

        <div class="overflow-x-auto mt-4">

            <table class="table table-xs text-center bg-slate-500/20">
                <thead class="text-slate-600 dark:text-slate-400">
                    <tr>
                        <th rowspan="2">No.</th>
                        <th rowspan="2">Nama Kapal</th>
                        <th rowspan="2">Keagenan</th>
                        <th colspan="2" class="text-center">Ukuran</th>
                        <th rowspan="2">Pemilik</th>
                        <th rowspan="2">Bendera</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>LOA</th>
                        <th>GT</th>
                    </tr>
                </thead>
                <tbody class="capitalize">
                    @forelse ($ships as $kapal)
                        <tr class="hover">
                            <th>{{ $ships->firstItem() + $loop->index }}</th>
                            <td>{{ $kapal->nama_kapal }}</td>
                            <td>{{ $kapal->keagenan }}</td>
                            <td>{{ $kapal->loa }}</td>
                            <td>{{ $kapal->gt }}</td>
                            <td>{{ $kapal->pemilik == 1 ? 'Pelindo' : 'Luar Negeri' }}</td>
                            <td>{{ $kapal->bendera }}</td>
                            <td class="flex justify-center gap-2">
                                <button class="hover:text-blue-600" type="button"
                                    onclick="kapal_{{ $kapal->id }}.showModal()">
                                    <x-show-icon />
                                </button>

                                <a href="{{ route('kapal.edit', [$kapal]) }}" class="hover:text-yellow-600">
                                    <x-edit-icon />
                                </a>

                                <form action="{{ route('kapal.destroy', [$kapal]) }}" method="post"
                                    class="hover:text-red-700">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data kapal?')">
                                        <x-delete-icon />
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">Data Kapal kosong</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-5">
                {{ $ships->links() }}
            </div>

            @foreach ($keperluan as $detail)
                <!-- Open the modal using ID.showModal() method -->
                <dialog id="kapal_{{ $detail->id_kapal }}" class="modal">
                    <form method="dialog" class="modal-box w-11/12 max-w-5xl shadow shadow-white">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                        <h3 class="font-bold text-lg mb-4 pl-3">Rincian</h3>

                        <table class="table table-zebra text-center">
                            <thead>
                                <tr>
                                    <th>Bongkar Barang</th>
                                    <th>Muat Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody class="capitalize">
                                <td>{{ $detail->bongkar }}</td>
                                <td>{{ $detail->muat_barang }}</td>
                                <td>{{ $detail->jenis_barang }}</td>
                                <td>{{ $detail->keterangan }}</td>
                            </tbody>
                        </table>
                    </form>
                </dialog>
            @endforeach

        </div>
    </div>
</x-app-layout>
