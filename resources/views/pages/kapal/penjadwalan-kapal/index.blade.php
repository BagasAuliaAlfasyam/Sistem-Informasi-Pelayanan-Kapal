<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <a href="{{ route('schedules.create') }}" role="button">
      <button class="btn btn-sm btn-primary">Tambah Jadwal</button>
    </a>

    <div class="overflow-x-auto mt-4">

      <table class="table table-xs text-center bg-slate-500/20">
        <thead class="text-slate-600 dark:text-slate-400">
          <tr>
            <th>No.</th>
            <th>Nama Kapal</th>
            <th>Tanggal Tiba</th>
            <th>Tiba Dari</th>
            <th>Posisi Tambat</th>
            <th>Tujuan</th>
            <th>Tanggal Rencana Berangkat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="capitalize">
          @forelse ($schedules as $schedule)
            <tr class="hover">
              <th>{{ $schedules->firstItem() + $loop->index }}</th>
              <td>{{ $schedule->nama_kapal }}</td>
              <td>{{ Carbon\Carbon::parse($schedule->tanggal_tiba)->format('d-m-Y') }}</td>
              <td>{{ $schedule->tiba_dari }}</td>
              <td>{{ $schedule->posisi_tambat }}</td>
              <td>{{ $schedule->tujuan }}</td>
              <td>{{ Carbon\Carbon::parse($schedule->tanggal_rencana_berangkat)->format('d-m-Y') }}</td>
              <td class="flex justify-center gap-2">
                <a href="{{ route('schedules.edit', [$schedule->id]) }}" class="hover:text-yellow-600">
                  <x-edit-icon />
                </a>
              </td>
            </tr>

          @empty
            <tr><td colspan="8">Jadwal belum ada</td></tr>
          @endforelse
        </tbody>
      </table>

      <div class="mt-5">
        {{ $schedules->links() }}
      </div>

    </div>
  </div>
</x-app-layout>
