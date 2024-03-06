<footer {{ $attributes->merge(['class' => 'py-[50px] w-full bg-myprimary']) }}>
    <div class="mycontainer flex justify-between">
        <div class="max-w-[342px] space-y-3">
            <h1 class="text-2xl font-semibold">Magister Manajemen UNRAM</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare cursus sed nunc eget dictum Sed
                ornare cursus sed nunc eget dictumd nunc eget dictum Sed ornare cursus sed nunc eget dictum </p>
        </div>

        @php
            $listMenu = [
                [
                    'name' => 'Menu1',
                    'list' => [
                        'Tentang Kami' => '#',
                        'Akademik' => '#',
                        'Riset dan Inovasi' => '#',
                        'Kerjasama' => '#',
                        'Pendaftaran' => '#',
                    ],
                ],

                [
                    'name' => 'Menu2',
                    'list' => [
                        'Tentang Kami2' => '#',
                        'Akademik2' => '#',
                        'Riset dan Inovasi2' => '#',
                        'Kerjasama2' => '#',
                        'Pendaftaran2' => '#',
                    ],
                ],

                [
                    'name' => 'Menu3',
                    'list' => [
                        'Tentang Kami3' => '#',
                        'Akademik3' => '#',
                        'Riset dan Inovasi3' => '#',
                        'Kerjasama3' => '#',
                        'Pendaftaran3' => '#',
                    ],
                ],
            ];
        @endphp

        @foreach ($listMenu as $menu)
            <div class="space-y-[26px]">
                <h2 class="text-xl font-semibold">{{ $menu['name'] }}</h2>

                <div class="flex flex-col space-y-6">
                    @foreach ($menu['list'] as $item => $link)
                        <a href="{{ $link }}" class="">{{ $item }}</a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</footer>
