<header {{ $attributes->merge(['class' => 'z-40 sticky top-0 h-[70px] bg-myprimary']) }}>

    @php
        $listMenu = [
            'Tentang Kami' => '#',
            'Akademik' => '#',
            'Riset dan Inovasi' => '#',
            'Kerjasama' => '#',
            'Pendaftaran' => '#',
        ];
    @endphp

    <nav class="mycontainer h-full flex justify-end items-center gap-8">
        @foreach ($listMenu as $menuText => $menuLink)
            <a href="{{ $menuLink }}" class="font-semibold ">{{ $menuText }}</a>
        @endforeach
    </nav>
</header>
