@extends('layouts.base')

@section('body')
    <div class="px-5 bg-slate-50">
        <div class="mx-auto max-w-[1440px] min-h-svh flex gap-5">
            <x-sidebar />

            <div class="py-4 w-full space-y-8">
                <x-navbar.auth />

                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
@endsection
