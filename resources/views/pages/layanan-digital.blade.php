@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <!-- Alpine Collapse Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
@endpush

@section('content')
    {{-- Hero --}}
    <section class="relative h-[259px] flex items-center bg-mysecondary">
        <img class="absolute size-full object-cover object-center" src="https://picsum.photos/2000/2000" alt="MM"
            loading="lazy">
        <div class="absolute size-full bg-gradient-to-r from-[#0d56d4d2] to-70%"></div>

        <div class="relative mycontainer">
            <h1 class="text-[40px] font-bold">Layanan Digital</h1>
        </div>
    </section>


    {{-- Layanan Mahasiswa --}}
    <section class="py-[80px]">
        <div class="mycontainer space-y-8">
            <h1 class="text-5xl text-myprimary font-bold">Layanan Mahasiswa</h1>

            <div class="flex justify-between gap-14">
                <div class="w-full max-w-[704px] rounded-lg overflow-hidden">
                    <div>
                        <div
                            class="px-6 py-8 flex justify-between items-center gap-4 bg-[#f2f7ff] border-b border-[#AECCFF] hover:cursor-pointer">
                            <h2 class="text-xl text-myprimary font-bold">1. Pengajuan Permohonan Surat Ijin Penelitian</h2>
                        </div>
                    </div>

                    <div x-data="{ expanded: false }">
                        <div @click="expanded = ! expanded"
                            class="px-6 py-8 flex justify-between items-center gap-4 bg-[#f2f7ff] border-b border-[#AECCFF] hover:cursor-pointer">
                            <h2 class="text-xl text-myprimary font-bold">2. Syarat Pendaftaran Ujian proposal</h2>

                            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.33301 1.33334L7.99967 8.00001L14.6663 1.33334" stroke="#072D6E"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <div x-show="expanded" x-collapse.duration.300ms class="px-8 pt-4 pb-8 space-y-5 bg-[#FAFCFF]">
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Mengisi form online <span
                                        class="font-bold underline">disini</span></p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Jilid proposal rangkap 4 yang telah disetujui dan ditanda tangani
                                    oleh pembimbing</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Fotocopy sertifikat TOEFL</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">KHS terakhir</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Bukti pembayaran SPP terakhir</p>
                            </div>
                            <h3 class="text-lg text-myprimary font-bold">*Semua syarat diserahkan ke akademik MM</h3>
                        </div>
                    </div>

                    <div x-data="{ expanded: false }">
                        <div @click="expanded = ! expanded"
                            class="px-6 py-8 flex justify-between items-center gap-4 bg-[#f2f7ff] border-b border-[#AECCFF] hover:cursor-pointer">
                            <h2 class="text-xl text-myprimary font-bold">3. Syarat pendaftaran seminar hasil</h2>

                            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.33301 1.33334L7.99967 8.00001L14.6663 1.33334" stroke="#072D6E"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <div x-show="expanded" x-collapse.duration.300ms class="px-8 pt-4 pb-8 space-y-5 bg-[#FAFCFF]">
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Mengisi form online <span
                                        class="font-bold underline">disini</span></p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Jilid skripsi rangkap 4 yang telah disetujui dan ditanda tangani
                                    oleh pembimbing</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Saran perbaikan pada saat seminar proposal dari empat dosen</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Fotocopy sertifikat TOEFL</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">KHS terakhir</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Bukti pembayaran SPP terakhir</p>
                            </div>
                            <h3 class="text-lg text-myprimary font-bold">*Semua syarat diserahkan ke akademik MM</h3>
                        </div>
                    </div>

                    <div x-data="{ expanded: false }">
                        <div @click="expanded = ! expanded"
                            class="px-6 py-8 flex justify-between items-center gap-4 bg-[#f2f7ff] border-b border-[#AECCFF] hover:cursor-pointer">
                            <h2 class="text-xl text-myprimary font-bold">4. Syarat pendaftaran seminar hasil</h2>

                            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.33301 1.33334L7.99967 8.00001L14.6663 1.33334" stroke="#072D6E"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <div x-show="expanded" x-collapse.duration.300ms class="px-8 pt-4 pb-8 space-y-5 bg-[#FAFCFF]">
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Mengisi form online <span
                                        class="font-bold underline">disini</span></p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Jilid skripsi rangkap 4 yang telah disetujui dan ditanda tangani
                                    oleh pembimbing</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Saran perbaikan pada saat seminar proposal dari empat dosen</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Fotocopy sertifikat TOEFL yang telah dilegalisir rangkap 2</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Artikel yang telah dipublikasi pada jurnal nasional atau LOA pada
                                    jurnal internasional</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Foto copy sertifikat kompetensi (minimal satu sertifikat)</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Bukti telah mensitasi jurnal dosen</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Kartu Konsultasi</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Kartu Seminar</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Menyerahkan KHS terakhir</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6.5" r="6" fill="#BFD7FF" />
                                </svg>
                                <p class="text-myprimary">Bukti Pembayaran SPP</p>
                            </div>
                            <h3 class="text-lg text-myprimary font-bold">*Semua syarat diserahkan ke akademik MM</h3>
                        </div>
                    </div>

                    <div>
                        <div
                            class="px-6 py-8 flex justify-between items-center gap-4 bg-[#f2f7ff] border-b border-[#AECCFF] hover:cursor-pointer">
                            <h2 class="text-xl text-myprimary font-bold">5. Pengajuan Permohonan Surat Ijin Penelitian</h2>
                        </div>
                    </div>

                    <div>
                        <div class="px-6 py-8 flex justify-between items-center gap-4 bg-[#f2f7ff] hover:cursor-pointer">
                            <h2 class="text-xl text-myprimary font-bold">6. Form syarat pendaftaran yudisium</h2>
                        </div>
                    </div>
                </div>

                <div class="p-8 w-full h-fit max-w-[440px] space-y-6 bg-[#f2f7ff] rounded-lg">
                    <h2 class="text-[28px] text-myprimary font-bold">Menu</h2>

                    <div class="space-y-8">
                        <p class="text-lg text-myprimary font-bold underline">Pengajuan permohonan surat ijin penelitian
                        </p>
                        <p class="text-lg text-myprimary font-bold underline">Syarat pendaftaran ujian proposal
                        </p>
                        <p class="text-lg text-myprimary font-bold underline">Syarat pendaftaran seminar hasil
                        </p>
                        <p class="text-lg text-myprimary font-bold underline">Syarat pendaftaran ujian tesis
                        </p>
                        <p class="text-lg text-myprimary font-bold underline">Pengajuan permohonan surat keterangan lulus
                        </p>
                        <p class="text-lg text-myprimary font-bold underline">Form syarat pendaftaran yudisium
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
