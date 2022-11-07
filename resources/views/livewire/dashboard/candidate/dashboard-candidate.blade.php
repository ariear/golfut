@section('title', 'Kandidat')
<div>
    <a href="/dashboard/candidates/add" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3.5 inline-block mr-2 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Kandidat</a>


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama
                </th>
                <th scope="col" class="py-3 px-6">
                    Foto
                </th>
                <th scope="col" class="py-3 px-6">
                    Deskripsi
                </th>
                <th scope="col" class="py-3 px-6">
                    Jumlah suara
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($candidates as $candidate)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="py-4 px-6">
                        {{ $loop->iteration }}
                    </td>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $candidate->name }}
                    </th>
                    <td class="py-4 px-6">
                        <img src="/storage/{{ $candidate->image }}" width="150" alt="">
                    </td>
                    <td class="py-4 px-6">
                        {{ $candidate->desc }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $candidate->total }}
                    </td>
                    <td class="py-4 px-6">

            <a href="/dashboard/candidates/{{ $candidate->id }}/edit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
<button class=" text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button" wire:click="deleteCandidate({{ $candidate->id }})">
    Hapus
  </button>
                    </td>
                </tr>
            @empty
                <p>Kandidat belum ada</p>
            @endforelse
        </tbody>
    </table>
</div>

</div>
