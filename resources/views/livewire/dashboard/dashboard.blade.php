@section('title', 'Dashboard')
<div>
    <div class="flex flex-wrap mb-10">
        <div class="bg-blue-400 w-[300px] p-4 rounded-lg text-white mr-5">
            <h2 class="text-lg font-medium mb-3">Total Kandidat</h2>
            <p>{{ $candidates->count() }}</p>
        </div>
        <div class="bg-blue-400 w-[300px] p-4 rounded-lg text-white mr-5">
            <h2 class="text-lg font-medium mb-3">Total Pemilih</h2>
            <p>{{ $candidates->count() }}</p>
        </div>
        <div class="bg-blue-400 w-[300px] p-4 rounded-lg text-white mr-5">
            <h2 class="text-lg font-medium mb-3">Total Pemilih yang sudah vote</h2>
            <p>{{ $ispickers->count() }}</p>
        </div>
        <div class="bg-blue-400 w-[300px] p-4 rounded-lg text-white">
            <h2 class="text-lg font-medium mb-3">Total Pemilih yang belum vote</h2>
            <p>{{ $isnpickers->count() }}</p>
        </div>
    </div>

<h2 class="mb-4 text-lg font-semibold">Daftar kandidat berdasarkan suara terbanyak</h2>
<div class="overflow-x-auto w-[650px] relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nama
                </th>
                <th scope="col" class="py-3 px-6">
                    Foto
                </th>
                <th scope="col" class="py-3 px-6">
                    Jumlah suara
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($candidates as $candidate)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $candidate->name }}
                </th>
                <td class="py-4 px-6">
                    <img src="/storage/{{ $candidate->image }}" class="w-[130px]" alt="">
                </td>
                <td class="py-4 px-6">
                    {{ $candidate->total }}
                </td>
            </tr>
            @empty
            <p class="text-center">Kandidat belum ada</p>
            @endforelse
        </tbody>
    </table>
</div>

</div>
