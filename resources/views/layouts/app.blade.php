@extends('layouts.base')

@section('body')
    <div class="flex flex-col min-h-svh">
        <x-navbar />

        <main class="flex-grow">
            @yield('content')
        </main>

        <x-footer />
    </div>
@endsection
