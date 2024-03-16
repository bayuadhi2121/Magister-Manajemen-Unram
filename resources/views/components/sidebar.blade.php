<aside {{ $attributes->merge(['class' => 'hidden lg:block sticky top-0 py-4 w-[290px] h-svh shrink-0']) }}>
    <div class="p-4 w-full h-full bg-white rounded-xl shadow-[0_0_5px_1px_rgba(0,0,0,0.2)]">
        <h1 class="text-center text-myprimary text-xl text-balance tracking-wide font-extrabold">Magister Manajemen Unram
        </h1>

        <hr class="my-5">

        <menu class="space-y-[2px]">
            <a href="#"
                class="p-4 w-full flex gap-3 items-center rounded-lg {{ Route::is('dashboard') ? 'bg-myprimary/80 text-white font-semibold stroke-white' : 'text-mydark font-bold hover:bg-myprimary/20 stroke-mydark' }}">
                <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M13 12C13 11.4477 13.4477 11 14 11H19C19.5523 11 20 11.4477 20 12V19C20 19.5523 19.5523 20 19 20H14C13.4477 20 13 19.5523 13 19V12Z"
                            stroke-width="2" stroke-linecap="round"></path>
                        <path
                            d="M4 5C4 4.44772 4.44772 4 5 4H9C9.55228 4 10 4.44772 10 5V12C10 12.5523 9.55228 13 9 13H5C4.44772 13 4 12.5523 4 12V5Z"
                            stroke-width="2" stroke-linecap="round"></path>
                        <path
                            d="M4 17C4 16.4477 4.44772 16 5 16H9C9.55228 16 10 16.4477 10 17V19C10 19.5523 9.55228 20 9 20H5C4.44772 20 4 19.5523 4 19V17Z"
                            stroke-width="2" stroke-linecap="round"></path>
                        <path
                            d="M13 5C13 4.44772 13.4477 4 14 4H19C19.5523 4 20 4.44772 20 5V7C20 7.55228 19.5523 8 19 8H14C13.4477 8 13 7.55228 13 7V5Z"
                            stroke-width="2" stroke-linecap="round"></path>
                    </g>
                </svg>
                <p class="tracking-wide">Dashboard</p>
            </a>
            <a href="{{ route('news.auth') }}"
                class="p-4 w-full flex gap-3 items-center hover:bg-myprimary/20 rounded-lg">
                <svg class="size-6" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g fill="none" fill-rule="evenodd" id="页面-1" stroke="none" stroke-width="2">
                            <g id="导航图标" transform="translate(-100.000000, -80.000000)">
                                <g id="编组" transform="translate(100.000000, 80.000000)">
                                    <rect fill="#FFFFFF" fill-opacity="0.01" fill-rule="nonzero" height="24"
                                        id="矩形" width="24" x="0" y="0"></rect>
                                    <path
                                        d="M2.5,3.5 C2.5,2.671575 3.171575,2 4,2 L16,2 C16.82845,2 17.5,2.671575 17.5,3.5 L17.5,22 L4,22 C3.171575,22 2.5,21.32845 2.5,20.5 L2.5,3.5 Z"
                                        id="路径" stroke="#000000" stroke-linejoin="round" stroke-width="2">
                                    </path>
                                    <path
                                        d="M17.5,12 C17.5,11.4477 17.9477,11 18.5,11 L20.5,11 C21.0523,11 21.5,11.4477 21.5,12 L21.5,20.5 C21.5,21.32845 20.82845,22 20,22 L17.5,22 L17.5,12 Z"
                                        id="路径" stroke="#000000" stroke-linejoin="round" stroke-width="2">
                                    </path>
                                    <line id="路径" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" x1="5.5" x2="9.5" y1="6" y2="6">
                                    </line>
                                    <line id="路径" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" x1="5.5" x2="11.5" y1="9.5" y2="9.5">
                                    </line>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <p class="text-mydark font-bold tracking-wide">News</p>
            </a>
            <a href="{{ route('event.auth') }}"
                class="p-4 w-full flex gap-3 items-center hover:bg-myprimary/20 rounded-lg">
                <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M4 13.9999L5.57465 20.2985C5.61893 20.4756 5.64107 20.5642 5.66727 20.6415C5.92317 21.397 6.60352 21.9282 7.39852 21.9933C7.4799 21.9999 7.5712 21.9999 7.75379 21.9999C7.98244 21.9999 8.09677 21.9999 8.19308 21.9906C9.145 21.8982 9.89834 21.1449 9.99066 20.193C10 20.0967 10 19.9823 10 19.7537V5.49991M18.5 13.4999C20.433 13.4999 22 11.9329 22 9.99991C22 8.06691 20.433 6.49991 18.5 6.49991M10.25 5.49991H6.5C4.01472 5.49991 2 7.51463 2 9.99991C2 12.4852 4.01472 14.4999 6.5 14.4999H10.25C12.0164 14.4999 14.1772 15.4468 15.8443 16.3556C16.8168 16.8857 17.3031 17.1508 17.6216 17.1118C17.9169 17.0756 18.1402 16.943 18.3133 16.701C18.5 16.4401 18.5 15.9179 18.5 14.8736V5.1262C18.5 4.08191 18.5 3.55976 18.3133 3.2988C18.1402 3.05681 17.9169 2.92421 17.6216 2.88804C17.3031 2.84903 16.8168 3.11411 15.8443 3.64427C14.1772 4.55302 12.0164 5.49991 10.25 5.49991Z"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <p class="text-mydark font-bold tracking-wide">Event</p>
            </a>
        </menu>

        <div class="mt-8">
            <h2 class="text-myprimary/70 font-extrabold tracking-wider uppercase">User</h2>

            <menu class="mt-2 space-y-[2px]">
                <a href="#" class="p-4 w-full flex gap-3 items-center hover:bg-myprimary/20 rounded-lg">
                    <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M4 21C4 17.4735 6.60771 14.5561 10 14.0709M19.8726 15.2038C19.8044 15.2079 19.7357 15.21 19.6667 15.21C18.6422 15.21 17.7077 14.7524 17 14C16.2923 14.7524 15.3578 15.2099 14.3333 15.2099C14.2643 15.2099 14.1956 15.2078 14.1274 15.2037C14.0442 15.5853 14 15.9855 14 16.3979C14 18.6121 15.2748 20.4725 17 21C18.7252 20.4725 20 18.6121 20 16.3979C20 15.9855 19.9558 15.5853 19.8726 15.2038ZM15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                    <p class="text-mydark font-bold tracking-wide">Admin</p>
                </a>
                <a href="#" class="p-4 w-full flex gap-3 items-center hover:bg-myprimary/20 rounded-lg">
                    <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M5 20V19C5 16.2386 7.23858 14 10 14H14C16.7614 14 19 16.2386 19 19V20M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                    <p class="text-mydark font-bold tracking-wide">Profile</p>
                </a>
                <a href="#" class="p-4 w-full flex gap-3 items-center hover:bg-myprimary/20 rounded-lg">
                    <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M12.9999 2C10.2385 2 7.99991 4.23858 7.99991 7C7.99991 7.55228 8.44762 8 8.99991 8C9.55219 8 9.99991 7.55228 9.99991 7C9.99991 5.34315 11.3431 4 12.9999 4H16.9999C18.6568 4 19.9999 5.34315 19.9999 7V17C19.9999 18.6569 18.6568 20 16.9999 20H12.9999C11.3431 20 9.99991 18.6569 9.99991 17C9.99991 16.4477 9.55219 16 8.99991 16C8.44762 16 7.99991 16.4477 7.99991 17C7.99991 19.7614 10.2385 22 12.9999 22H16.9999C19.7613 22 21.9999 19.7614 21.9999 17V7C21.9999 4.23858 19.7613 2 16.9999 2H12.9999Z"
                                fill="#000000"></path>
                            <path
                                d="M13.9999 11C14.5522 11 14.9999 11.4477 14.9999 12C14.9999 12.5523 14.5522 13 13.9999 13V11Z"
                                fill="#000000"></path>
                            <path
                                d="M5.71783 11C5.80685 10.8902 5.89214 10.7837 5.97282 10.682C6.21831 10.3723 6.42615 10.1004 6.57291 9.90549C6.64636 9.80795 6.70468 9.72946 6.74495 9.67492L6.79152 9.61162L6.804 9.59454L6.80842 9.58848C6.80846 9.58842 6.80892 9.58778 5.99991 9L6.80842 9.58848C7.13304 9.14167 7.0345 8.51561 6.58769 8.19098C6.14091 7.86637 5.51558 7.9654 5.19094 8.41215L5.18812 8.41602L5.17788 8.43002L5.13612 8.48679C5.09918 8.53682 5.04456 8.61033 4.97516 8.7025C4.83623 8.88702 4.63874 9.14542 4.40567 9.43937C3.93443 10.0337 3.33759 10.7481 2.7928 11.2929L2.08569 12L2.7928 12.7071C3.33759 13.2519 3.93443 13.9663 4.40567 14.5606C4.63874 14.8546 4.83623 15.113 4.97516 15.2975C5.04456 15.3897 5.09918 15.4632 5.13612 15.5132L5.17788 15.57L5.18812 15.584L5.19045 15.5872C5.51509 16.0339 6.14091 16.1336 6.58769 15.809C7.0345 15.4844 7.13355 14.859 6.80892 14.4122L5.99991 15C6.80892 14.4122 6.80897 14.4123 6.80892 14.4122L6.804 14.4055L6.79152 14.3884L6.74495 14.3251C6.70468 14.2705 6.64636 14.1921 6.57291 14.0945C6.42615 13.8996 6.21831 13.6277 5.97282 13.318C5.89214 13.2163 5.80685 13.1098 5.71783 13H13.9999V11H5.71783Z"
                                fill="#000000"></path>
                        </g>
                    </svg>
                    <p class="text-mydark font-bold tracking-wide">Logout</p>
                </a>
            </menu>
        </div>
    </div>
</aside>
