@extends('layouts.base')

@section('body')
    <div class="flex">
        @include('components.sidebar')

        <div class="mx-auto py-10 md:w-4/5 w-11/12 px-6">
            <div class="w-full h-full">
                @yield('content')
            </div>
        </div>
    </div>

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
