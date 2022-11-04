@extends('layouts.base')

@section('body')
    @include('components.nav')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
