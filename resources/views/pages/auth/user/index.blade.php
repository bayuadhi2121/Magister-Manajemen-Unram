@extends('layouts.app')

{{-- @section('title', 'News - ' . @env('APP_NAME')) --}}

{{-- @section('pagetitle', 'Berita') --}}

@section('content')
    {{-- Pengumuman --}}
    <section class="py-[80px]">
        <div class="mycontainer space-y-8">
            <h1 class="text-5xl text-myprimary font-bold">Pengumuman</h1>

            <div class="flex flex-wrap justify-between gap-[40px]">
                @for ($i = 1; $i <= 10; $i++)
                    <article class="min-w-[250px] max-w-[500px] flex-[1_1_35%] space-y-4">
                        <h2 class="text-[18px] text-[#4E4E4E] font-semibold">Pengisian Remunerasi Semester I Bulan
                            Januari-Juni
                            Tahun Anggaran 2022</h2>
                        <p class="text-[15px] text-[#8F8F8F]">14 Juli, 2022 /// Tidak ada komentar</p>
                    </article>
                @endfor
            </div>
        </div>
    </section>


    {{-- Kegiatan --}}
    <section class="py-[80px] bg-mysecondary">
        <div class="mycontainer space-y-8">
            <h1 class="text-5xl text-myprimary font-bold">Kegiatan</h1>

            <div class="space-y-6">
                <div class="flex gap-12">
                    <h2 class="pb-2 text-2xl text-myprimary font-semibold border-b-[3px] border-myprimary">Kegiatan
                        Mahasiswa</h2>
                    <h2 class="text-2xl text-mydisabled font-semibold">Kegiatan Kampus</h2>
                </div>

                <div class="flex justify-between gap-6">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="flex-1 bg-white rounded-lg overflow-hidden shadow-xl">
                            <div class="relative h-[293px]">
                                <label class="p-3 pl-5 absolute top-0 right-0 bg-myprimary rounded-bl-2xl">20 FEB
                                    2024</label>
                                <img class="size-full object-cover object-center" src="https://picsum.photos/300/300"
                                    alt="MM" loading="lazy">
                            </div>

                            <div class="px-6 pb-6 pt-4 space-y-3 text-black">
                                <h3 class="text-[22px] text-myprimary font-semibold">Acara Wisuda 2024</h3>
                                <p class="text-mydark text-opacity-80">Lorem ipsum dolor sit amet consectetur. Sed vitae
                                    iaculis massa
                                    nullam est neque blandit
                                    hac.
                                    Tellus elit sed enim egestas. Lorem sit morbi cursus habitant nibh egestas.</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
