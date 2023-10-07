<x-app-layout>
  @error('id_kapal')
  <div class="alert">
    <div class="text-error flex mb-1">
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg> &ThickSpace;
      <span>Rincian untuk id kapal ini sudah terisi! Periksa kembali kapal dengan id yang berbeda</span>
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
      <div class="mb-4">
        <label for="kapal" class="block mb-3">Nama Kapal</label>
        <select class="select select-bordered @error ('nama_kapal') select-error @enderror w-full bg-slate-800" id="kapal" name="nama_kapal" required autofocus>
          <option value="" selected disabled></option>
          @foreach ($ships as $kapal)
            <option value="{{ $kapal->nama_kapal }}">{{ $kapal->id }} ~ &ThickSpace; {{ $kapal->nama_kapal }}</option>
          @endforeach
        </select>
      </div>
      @error ('nama_kapal')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <input type="hidden" name="id_kapal" value="" class="kapal-input">

      <script>
        // Buat objek untuk menyimpan ID kapal berdasarkan nama kapal
        const shipIdMap = {};
        @foreach ($ships as $kapal)
          shipIdMap["{{ $kapal->nama_kapal }}"] = "{{ $kapal->id }}";
        @endforeach

        // Ambil elemen-elemen yang diperlukan
        const kapalSelect = document.getElementById('kapal');
        const kapalInput = document.querySelector('.kapal-input');

        // Tambahkan event listener saat terjadi perubahan pada select
        kapalSelect.addEventListener('change', function () {
          // Ambil nilai yang dipilih (nama kapal)
          const selectedValue = kapalSelect.value;

          // Cari ID yang sesuai dengan nama kapal yang dipilih dalam objek shipIdMap
          const selectedId = shipIdMap[selectedValue];

          // Set nilai input dengan ID yang sesuai
          kapalInput.value = selectedId;
        });
      </script>

      <div class="mb-4">
        <label for="muatBarang" class="block mb-3">Muat Barang</label>
        <input type="number" id="muatBarang" class="input input-bordered @error ('muat_barang') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="muat_barang" />
      </div>
      @error ('muat_barang')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="bongkar" class="block mb-3">Bongkar Barang</label>
        <input type="number" id="bongkar" class="input input-bordered @error ('bongkar') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="bongkar" />
      </div>
      @error ('bongkar')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="jenisBarang" class="block mb-3">Jenis Barang</label>
        <input type="text" id="jenisBarang" class="input input-bordered @error ('jenis_barang') input-error @enderror bg-slate-800 w-full focus:text-slate-400" name="jenis_barang" />
      </div>
      @error ('jenis_barang')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror

      <div class="mb-4">
        <label for="keterangan" class="block mb-3">keterangan</label>
        <select class="select select-bordered @error ('keterangan') select-error @enderror w-full bg-slate-800" id="keterangan" name="keterangan">
          <option value="ekspor">Ekspor</option>
          <option value="import">Import</option>
          <option value="" selected>Tidak Ada Keterangan</option>
        </select>
      </div>
      @error ('keterangan')
        <div class="text-error flex mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          <span>{{ $message }}</span>
        </div>
      @enderror
      <button type="submit" class="btn btn-outline btn-primary mt-3">Tambah</button>
    </form>
  </div>
</x-app-layout>
