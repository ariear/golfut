@section('title', 'Pemilih')
<div>
    <a href="/dashboard/pickers/add" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3.5 inline-block mr-2 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Pemilih</a>


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
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Status Vote
                </th>
                <th scope="col" class="py-3 px-6">
                    Role
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="py-4 px-6">
                        {{ $loop->iteration }}
                    </td>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </th>
                    <td class="py-4 px-6">
                        @if ($user->image)
                        <img src="/storage/{{ $user->image }}" width="100" class="rounded-md" alt="">
                        @else
                            <img src="https://www.pngitem.com/pimgs/m/391-3918613_personal-service-platform-person-icon-circle-png-transparent.png" class="w-[60px] rounded-full" alt="">
                        @endif
                    </td>
                    <td class="py-4 px-6">
                        {{ $user->email }}
                    </td>
                    <td class="py-4 px-6">
                        @if ($user->isvote)
                            <p class="bg-green-300 w-max px-3 py-2 rounded-lg">Sudah vote</p>
                        @else
                            <p class="bg-yellow-300 text-white w-max px-3 py-2 rounded-lg">Belum vote</p>
                        @endif
                    </td>
                    <td class="py-4 px-6">
                        {{ $user->role }}
                    </td>
                    <td class="py-4 px-6">

            <a href="/dashboard/pickers/{{ $user->id }}/edit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
<button wire:click="deletePicker({{ $user->id }})" class=" text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
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
