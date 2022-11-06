@section('title', 'Edit Kandidat')
<div>
    <form wire:submit.prevent="save" method="post" enctype="multipart/form-data" >
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Nama Kandidat</label>
            <input type="text" wire:model="name" id="name" class="bg-gray-50 border border-gray-300 mt-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan kandidat">
            @error('name') <p class="text-sm mt-1 text-red-600">{{  $message }}</p> @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Foto Kandidat</label>
            <input wire:model="image" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            @error('image') <p class="text-sm mt-1 text-red-600">{{  $message }}</p> @enderror
        </div>
        <div class="mb-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Keterangan terhadap kandidat</label>
            <textarea wire:model="desc" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan keterangan kandidat"></textarea>
            @error('desc') <p class="text-sm mt-1 text-red-600">{{  $message }}</p> @enderror
        </div>
        <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Simpan</button>
        <a href="/dashboard/candidates" class="text-white inline-block bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kembali</a>
    </form>
</div>
