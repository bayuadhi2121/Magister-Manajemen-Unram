@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <section class="relative h-[500px] bg-mysecondary" x-data="{ currentIndex: 0, images: ['https://picsum.photos/2000/2000', 'https://picsum.photos/1900/1900', 'https://picsum.photos/2100/2100'], autoSlide: null }" x-init="autoSlide = setInterval(() => { currentIndex = (currentIndex + 1) % images.length; }, 10000)">
        <template x-for="(image, index) in images" :key="index">
            <img class="absolute min-w-full size-full object-cover object-center transition-all duration-1000"
                :class="currentIndex == index ? 'opacity-100' : 'opacity-0'" :src="image" alt="MM"
                loading="lazy">
        </template>

        <div class="absolute inset-x-0 bottom-[20px] flex justify-center gap-2 ">
            <template x-for="(image, index) in images" :key="index">
                <svg @click="currentIndex = index" class="fill-white hover:cursor-pointer transition-opacity duration-300"
                    :class="{ 'opacity-100': currentIndex == index, 'opacity-40': currentIndex != index }" width="10"
                    height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="5" cy="5" r="5" />
                </svg>
            </template>
        </div>
    </section>


    {{-- Pengumuman --}}
    <section class="py-[80px]">
        <div class="mycontainer space-y-8">
            <h1 class="text-5xl text-myprimary font-bold">Pengumuman</h1>

            <div class="flex flex-wrap justify-between text-mydark gap-[40px]">
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
                                <p class="text-mydark/80">Lorem ipsum dolor sit amet consectetur. Sed vitae iaculis massa
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


    {{-- Berita --}}
    <section class="py-[80px]">
        <div class="mycontainer space-y-8">
            <h1 class="text-5xl text-myprimary font-bold">Berita</h1>

            <div class="flex gap-8">
                <div class="relative w-full max-w-[548px] rounded-xl overflow-hidden">
                    <label class="z-10 p-3 pl-5 absolute top-0 right-0 bg-myprimary rounded-bl-2xl">20 FEB 2024</label>
                    <img class="size-full object-cover object-center" src="https://picsum.photos/600/600"alt="MM"
                        loading="lazy">

                    <div class="px-6 pb-6 absolute inset-0 flex flex-col justify-end space-y-3 bg-myprimary/60">
                        <h2 class="text-2xl font-bold">Berita Kelulusan Angkatan 2024</h2>
                        <p class="text-lg font-semibold">Lorem ipsum dolor sit amet consectetur. Sed vitae iaculis massa
                            nullam est neque blandit hac. Tellus elit sed enim egestas. Lorem sit morbi cursus habitant nibh
                            egestas.</p>
                    </div>
                </div>

                <div class="space-y-6">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="flex rounded-lg overflow-hidden">
                            <div class="w-full max-w-[192px] h-[119px]">
                                <img class="size-full object-cover object-center" src="https://picsum.photos/200/200"
                                    alt="MM" loading="lazy">
                            </div>

                            <div class="px-4 flex flex-col justify-between text-black">
                                <h3 class="text-lg text-mydark/80 font-bold">Long title of the news! Lorem Ipsum dolor sit
                                    amet constectura
                                    sit
                                    dep</h3>

                                <a href="#" class="w-fit flex items-center gap-[10px]">
                                    <span class="text-myprimary font-bold">READ MORE</span>

                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 12.95H5M19 12.95L12 19.95M19 12.95L12 5.94995" stroke="#072D6E"
                                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
