<x-app-layout>
    @error('id_kapal')
        <div class="alert" x-data="{ init() { setTimeout(() => { this.$el.remove() }, 5000)  } }" x-init="init()">
            <div class="text-error flex mb-1">
                <x-warning-icon />
                &ThickSpace;
                <span>Rincian untuk id kapal ini sudah terisi atau Anda belum memilih kapal dengan id yang benar! Periksa kembali kapal dengan id yang berbeda</span>
            </div>
        </div>
    @enderror

    <div class="px-4 sm:px-6 lg:px-8 pt-4 w-full max-w-9xl relative mx-auto">
        <h1 class="font-bold my-4 text-3xl">Penambahan Rincian Data Kapal</h1>
        <a href="{{ route('details.index') }}" class="absolute right-0 top-0 pt-8 pr-8">
            <button class="btn btn-sm btn-outline px-4">Back</button>
        </a>

        <form action="{{ route('details.store') }}" class="w-full mb-5" method="POST">
            @csrf

            <section>
                <div class="mb-4">
                    <label for="kapal" class="block mb-3">Nama Kapal</label>
                    <select class="select select-bordered @error('nama_kapal') select-error @enderror w-full"
                        id="kapal" name="nama_kapal" required autofocus>
                        @foreach ($ships as $kapal)
                            <option value="{{ $kapal->nama_kapal }}" data-id="{{ $kapal->id }}">{{ $kapal->id }}: ~ &ThickSpace;
                                {{ $kapal->nama_kapal }}</option>
                        @endforeach
                        <option value="" selected disabled>{{ '-' }}</option>
                    </select>
                </div>
                @error('nama_kapal')
                    <div class="text-error flex mb-1">
                        <x-warning-icon />
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </section>

            <input type="hidden" name="id_kapal" value="" class="kapal-input">

            {{-- Mengatur input id_kapal agar menyesuaikan dengan pilihan select kapal --}}
            <script>
                const kapalSelect = document.getElementById('kapal');
                const kapalInput = document.querySelector('.kapal-input');
                
                kapalSelect.addEventListener('change', () => {
                    const selectedIndex = kapalSelect.options[kapalSelect.selectedIndex];
                    const selectedId = selectedIndex.dataset.id;
                    kapalInput.value = selectedId;
                });
            </script>

            <section>
                <div class="mb-4">
                    <label for="muatBarang" class="block mb-3">Muat Barang</label>
                    <input type="number" id="muatBarang"
                        class="input input-bordered @error('muat_barang') input-error @enderror w-full focus:text-slate-400"
                        name="muat_barang" />
                </div>
                @error('muat_barang')
                    <div class="text-error flex mb-1">
                        <x-warning-icon />
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </section>

            <section>
                <div class="mb-4">
                    <label for="bongkar" class="block mb-3">Bongkar Barang</label>
                    <input type="number" id="bongkar"
                        class="input input-bordered @error('bongkar') input-error @enderror w-full focus:text-slate-400"
                        name="bongkar" />
                </div>
                @error('bongkar')
                    <div class="text-error flex mb-1">
                        <x-warning-icon />
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </section>

            <section>
                <div class="mb-4">
                    <label for="jenisBarang" class="block mb-3">Jenis Barang</label>
                    <input type="text" id="jenisBarang"
                        class="input input-bordered @error('jenis_barang') input-error @enderror w-full focus:text-slate-400"
                        name="jenis_barang" />
                </div>
                @error('jenis_barang')
                    <div class="text-error flex mb-1">
                        <x-warning-icon />
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </section>

            <section>
                <div class="mb-4">
                    <label for="keterangan" class="block mb-3">keterangan</label>
                    <select class="select select-bordered @error('keterangan') select-error @enderror w-full"
                        id="keterangan" name="keterangan">
                        <option value="ekspor">Ekspor</option>
                        <option value="import">Import</option>
                        <option value="" selected>Tidak Ada Keterangan</option>
                    </select>
                </div>
                @error('keterangan')
                    <div class="text-error flex mb-1">
                        <x-warning-icon />
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </section>

            <button type="submit" class="btn btn-outline btn-primary mt-3">Tambah</button>
        </form>
    </div>
</x-app-layout>
