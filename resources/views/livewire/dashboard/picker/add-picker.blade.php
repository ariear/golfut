@section('title', 'Tambah Pemilih')
<form wire:submit.prevent="save" method="post" enctype="multipart/form-data" >
    <div class="mb-6">
        <label for="name" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
        <input type="text" wire:model="name" id="name" class="bg-gray-50 border border-gray-300 mt-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama">
        @error('name') <p class="text-sm mt-1 text-red-600">{{  $message }}</p> @enderror
    </div>
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Foto Profil</label>
        <input wire:model="image" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        @error('image') <p class="text-sm mt-1 text-red-600">{{  $message }}</p> @enderror
    </div>
    <div class="mb-6">
        <label for="email" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
        <input type="text" wire:model="email" id="email" class="bg-gray-50 border border-gray-300 mt-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan email">
        @error('email') <p class="text-sm mt-1 text-red-600">{{  $message }}</p> @enderror
    </div>
    <div class="mb-6">
        <label>Role</label>
        <div class="flex items-center mt-2">
            <div class="flex items-center mr-4">
                <input id="default-radio-1" checked type="radio" wire:model="role" value="user" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pengguna biasa</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" wire:model="role" value="admin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Admin</label>
            </div>
        </div>
    </div>
    <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Simpan</button>
        <a href="/dashboard/pickers" class="text-white inline-block bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kembali</a>
</form>
<div class="p-4 my-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
    <span class="font-medium">Password bawaan ketika membuat pemilih baru adalah sama dengan email
  </div>
