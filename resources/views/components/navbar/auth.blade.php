<header {{ $attributes->merge(['class' => 'border-b-2 border-dashed border-myprimary/80']) }}>
    <div class="text-black py-4 flex justify-between items-center">
        <div>
            <p class="text-sm">Dashborad / News</p>
            <p class="text-lg font-bold">@yield('pagetitle')</p>
        </div>

        <div class="flex items-center gap-2">
            <p class="font-medium tracking-wide">Nama user</p>
            <img class="size-12 object-cover object-center rounded-full" src="https://picsum.photos/150/150" alt="MM"
                loading="lazy">
        </div>
    </div>
</header>
