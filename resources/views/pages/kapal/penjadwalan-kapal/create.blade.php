<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 pt-4 w-full max-w-9xl relative mx-auto">
        <h1 class="font-bold my-4 text-3xl">Penambahan Jadwal Kapal</h1>
        <a href="{{ route('schedules.index') }}" class="absolute right-0 top-0 pt-8 pr-8">
            <button class="btn btn-sm btn-outline px-4">Back</button>
        </a>

        <form action="{{ route('schedules.store') }}" class="w-full mb-5" method="POST">
            @csrf

            <section>
                <div class="mb-4">
                    <label for="kapal" class="block mb-3">Nama Kapal</label>
                    <select class="select select-bordered @error('nama_kapal') select-error @enderror w-full"
                        id="kapal" name="nama_kapal" required>
                        @foreach ($ships as $kapal)
                        <option value="{{ $kapal->nama_kapal }}" data-id="{{ $kapal->id }}">{{ $kapal->nama_kapal }}</option>
                        @endforeach
                        <option value="" selected disabled>{{ "-" }}</option>
                    </select>
                </div>
                @error('nama_kapal')
                    <div class="text-error flex mb-1">
                        <x-warning-icon />
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </section>

            <input type="hidden" name="kapal_id" value="" class="kapal-input">

            {{-- Mengatur input kapal_id agar menyesuaikan dengan pilihan select kapal --}}
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
                    <label for="tanggalTiba" class="block mb-3">Tanggal Tiba</label>
                    <input type="date" id="tanggalTiba"
                        class="input input-bordered @error('tanggal_tiba') input-error @enderror w-full focus:text-slate-400"
                        name="tanggal_tiba" />
                </div>
                @error('tanggal_tiba')
                    <div class="text-error flex mb-1">
                        <x-warning-icon />
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </section>

            <section>
                <div class="mb-4">
                    <label for="tibaDari" class="block mb-3">Tiba Dari</label>
                    <input type="text" id="tibaDari"
                        class="input input-bordered @error('tiba_dari') input-error @enderror w-full focus:text-slate-400"
                        name="tiba_dari" />
                </div>
                @error('tiba_dari')
                    <div class="text-error flex mb-1">
                        <x-warning-icon />
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </section>

            <section>
                <div class="mb-4">
                    <label for="posisiTambat" class="block mb-3">Posisi Tambat</label>
                    <input type="text" id="posisiTambat"
                        class="input input-bordered @error('posisi_tambat') input-error @enderror w-full focus:text-slate-400"
                        name="posisi_tambat" />
                </div>
                @error('posisi_tambat')
                    <div class="text-error flex mb-1">
                        <x-warning-icon />
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </section>

            <section>
                <div class="mb-4">
                    <label for="rencanaBerangkat" class="block mb-3">Tanggal Rencana Berangkat</label>
                    <input type="date" id="rencanaBerangkat"
                        class="input input-bordered @error('tanggal_rencana_berangkat') input-error @enderror w-full focus:text-slate-400"
                        name="tanggal_rencana_berangkat" />
                </div>
                @error('tanggal_rencana_berangkat')
                    <div class="text-error flex mb-1">
                        <x-warning-icon />
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </section>

            <section>
                <div class="mb-4">
                    <label for="tujuan" class="block mb-3">Tujuan</label>
                    <input type="text" id="tujuan"
                        class="input input-bordered @error('tujuan') input-error @enderror w-full focus:text-slate-400"
                        name="tujuan" />
                </div>
                @error('tujuan')
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
