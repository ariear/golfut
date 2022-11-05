@extends('layouts.base')

@section('body')
    <div class="flex">
        @include('components.sidebar')

        <div class="mx-auto py-10 md:w-4/5 w-11/12 px-6">
            <div class="w-full h-full">
                <h1 class="text-2xl font-semibold mb-5">@yield('title')</h1>
                @yield('content')
            </div>
        </div>
    </div>

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
