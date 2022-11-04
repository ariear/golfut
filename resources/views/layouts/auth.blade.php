@extends('layouts.base')

@section('body')
    @include('components.nav')
    <div class="flex flex-col justify-center py-28 sm:px-6 lg:px-8">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
