<div class="bg-gray-50">
    @if (auth()->user()->isvote)
        <div class="container mx-auto text-center mt-10 bg-[#82DBD8] py-10 rounded-lg shadow font-medium">
            <p>Anda sudah memilih kandidat , terimakasih partisipasinya</p>
        </div>
    @else
    <div class="container mx-auto px-16 py-10 flex flex-wrap justify-center">
        @forelse ($candidates as $candidate)
        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3">
                <img class="rounded-t-lg w-full" src="/storage/{{ $candidate->image }}" alt="">
            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $candidate->name }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{!! $candidate->desc !!}</p>
                <button wire:click="vote({{ $candidate->id }})" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-[#4bc9c5] rounded-lg hover:bg-[#82DBD8] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Vote
                </button>
            </div>
        </div>
        @empty
        <p class="text-center font-medium">Kandidat belum tersedia</p>
        @endforelse
    </div>
    @endif

</div>
