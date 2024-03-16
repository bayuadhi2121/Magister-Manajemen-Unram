@extends('layouts.admin')

@section('title', 'News')

@section('pagetitle', 'Berita')

@section('content')
    <section class="text-black p-4 space-y-8 bg-white border rounded-md">
        <div class="flex justify-between items-center">
            <form action="" autocomplete="off" class="px-1 flex gap-[1px] items-center border-b-2 border-myprimary/70">
                <input
                    class="py-2 w-[250px] text-lg text-mydark font-semibold tracking-[0.5px] outline-none bg-white rounded-md"
                    type="text" name="search" id="search" placeholder="Search" required>

                <button type="submit">
                    <svg class="size-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill="#000000" fill-rule="evenodd"
                                d="M4 9a5 5 0 1110 0A5 5 0 014 9zm5-7a7 7 0 104.2 12.6.999.999 0 00.093.107l3 3a1 1 0 001.414-1.414l-3-3a.999.999 0 00-.107-.093A7 7 0 009 2z">
                            </path>
                        </g>
                    </svg>
                </button>
            </form>

            <a href="{{ route('news.create') }}"
                class="px-5 py-2 text-white bg-myprimary bg-opacity-80 hover:bg-opacity-95 font-medium tracking-[0.5px] rounded-md">Create</a>
        </div>

        <div class="flex flex-col mt-6">
            <div class="-mx-6 -my-2 overflow-x-auto lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-y-hidden mx-6 md:mx-0 border border-gray-200 rounded-lg">
                        <table class="table-fixed min-w-full divide-y divide-gray-200">
                            <thead class="bg-myprimary/5">
                                <tr>
                                    <th scope="col"
                                        class="w-0 py-3.5 px-4 text-sm font-bold text-center text-myprimary tracking-wide">
                                        No
                                    </th>

                                    <th scope="col"
                                        class="w-[200px] px-4 py-3.5 text-sm font-bold text-left text-myprimary tracking-wide">
                                        Nama
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-bold text-left text-myprimary tracking-wide">
                                        Judul
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 w-2 text-sm font-bold text-center text-myprimary tracking-wide">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                {{-- @forelse ($animals as $animal) --}}
                                <tr>
                                    <td class="p-4 text-sm font-medium whitespace-nowrap">
                                        <h2 class="font-semibold text-center text-gray-800">1</h2>
                                    </td>
                                    <td class="p-4 text-sm whitespace-nowrap">
                                        <p class="text-gray-700">nama
                                        </p>
                                    </td>
                                    <td class="p-4 text-sm whitespace-nowrap">
                                        <p class="text-gray-700">tak tay
                                        </p>
                                    </td>

                                    <td class="p-4 text-sm whitespace-nowrap flex gap-2">
                                        <button
                                            class="px-2 py-1 font-medium text-white bg-cyan-600 rounded-md">Edit</button>
                                        <button
                                            class="px-2 py-1 font-medium text-white bg-red-600 rounded-md">Delete</button>
                                    </td>
                                </tr>
                                {{-- @empty
                                    <tr>
                                        <th colspan="9">
                                            <div class="py-10 flex flex-col items-center space-y-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                    class="w-16 h-16 bi bi-file-earmark-x" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146z" />
                                                    <path
                                                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                </svg>

                                                <div>
                                                    <span class="text-lg font-medium text-gray-800">Data not
                                                        found</span><br>
                                                    <span class="text-sm font-medium text-gray-500">Get started by creating
                                                        a new data.</span>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                @endforelse --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <p>pagination here</p>
            {{-- {{ $animals->onEachSide(1)->links() }} --}}
        </div>
    </section>
@endsection
