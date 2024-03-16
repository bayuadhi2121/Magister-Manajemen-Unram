@extends('layouts.base')

@section('title', 'Login')

@section('body')
    <div class="relative h-svh">
        <img class="absolute size-full object-cover object-center" src="https://picsum.photos/2000/2000" alt="MM"
            loading="lazy">

        <div class="px-10 h-full flex items-center justify-center backdrop-blur-sm">
            <div
                class="relative w-full max-w-[400px] md:max-w-[1000px] max-h-[700px] flex bg-myprimary bg-opacity-90 rounded-lg overflow-hidden shadow-[0_10px_20px_1px_rgba(0,0,0,0.8)]">
                <a href="/" class="absolute top-2 right-3 flex items-center gap-1 hover:border-b">
                    <svg class="size-3 fill-white" viewBox="0 0 512.052 512.052" xml:space="preserve">
                        <path
                            d="M510.207,414.676c-2.32-23.264-6.805-47.255-14.019-71.608C461.49,226.023,355.26,143.933,234.667,138.804V53.362 c0-19.006-22.979-28.524-36.418-15.085l-192,192c-8.331,8.331-8.331,21.839,0,30.17l192,192 c13.439,13.439,36.418,3.921,36.418-15.085V327.656c48.213-4.823,103.873,7.119,157.335,48.352 c29.572,22.808,56.566,53.666,80.333,93.599C483.421,488.234,512,480.372,512,458.696c0.005-0.959,0.005-0.959,0.025-2.725 C512.165,442.689,511.785,430.503,510.207,414.676z M418.059,342.222c-66.551-51.328-136.755-64.332-197.184-55.876 c-5.85,0.818-10.162,1.676-12.758,2.331c-9.476,2.39-16.117,10.913-16.117,20.686v76.497L51.503,245.362L192,104.866v55.163 c0,12.07,10.005,21.737,22.069,21.321c0.863-0.03,1.551-0.045,3.33-0.076c108.78-2.351,206.919,69.472,237.882,173.917 c2.832,9.56,5.193,19.068,7.124,28.488C448.369,367.975,433.564,354.18,418.059,342.222z">
                        </path>
                    </svg>
                    <p class="text-xs tracking-[1px]">Back to home</p>
                </a>

                <div class="hidden md:block md:flex-1">
                    <img class="size-full object-cover object-center" src="https://picsum.photos/2000/2000" alt="MM"
                        loading="lazy">
                </div>

                <div class="flex-1 flex justify-center items-center">
                    <div class="py-10 px-3 md:px-10 w-full max-w-[350px]">
                        <h1 class="text-center text-5xl font-semibold tracking-[1px] leading-tight uppercase">welcome</h1>
                        <p class="mt-2 text-center text-sm tracking-[1px]">Login to your account</p>

                        <form action="#" method="POST" class="mt-7 space-y-4" autocomplete="off">
                            @csrf

                            <div class="flex flex-col gap-1">
                                <label for="username" class="text-sm tracking-[1px]">Username*</label>
                                <input
                                    class="p-3 w-full text-lg text-mydark font-semibold tracking-[0.5px] outline-none bg-white rounded-md"
                                    type="text" name="username" id="username" placeholder="username" required>
                            </div>

                            <div x-data="{ show: false }" class="flex flex-col gap-1">
                                <label for="password" class="text-sm tracking-[1px]">Password*</label>
                                <div class="relative ">
                                    <input
                                        class="py-3 pl-3 pr-10 w-full text-lg text-mydark font-semibold tracking-[0.5px] outline-none bg-white rounded-md"
                                        :type="show ? 'text' : 'password'" name="password" id="password"
                                        placeholder="password" required>

                                    <svg @click="show = !show"
                                        class="absolute right-2 top-4 size-6 fill-myprimary hover:cursor-pointer"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.9944 15.5C13.9274 15.5 15.4944 13.933 15.4944 12C15.4944 10.067 13.9274 8.5 11.9944 8.5C10.0614 8.5 8.49439 10.067 8.49439 12C8.49439 13.933 10.0614 15.5 11.9944 15.5ZM11.9944 13.4944C11.1691 13.4944 10.5 12.8253 10.5 12C10.5 11.1747 11.1691 10.5056 11.9944 10.5056C12.8197 10.5056 13.4888 11.1747 13.4888 12C13.4888 12.8253 12.8197 13.4944 11.9944 13.4944Z">
                                        </path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 5C7.18879 5 3.9167 7.60905 2.1893 9.47978C0.857392 10.9222 0.857393 13.0778 2.1893 14.5202C3.9167 16.391 7.18879 19 12 19C16.8112 19 20.0833 16.391 21.8107 14.5202C23.1426 13.0778 23.1426 10.9222 21.8107 9.47978C20.0833 7.60905 16.8112 5 12 5ZM3.65868 10.8366C5.18832 9.18002 7.9669 7 12 7C16.0331 7 18.8117 9.18002 20.3413 10.8366C20.9657 11.5128 20.9657 12.4872 20.3413 13.1634C18.8117 14.82 16.0331 17 12 17C7.9669 17 5.18832 14.82 3.65868 13.1634C3.03426 12.4872 3.03426 11.5128 3.65868 10.8366Z">
                                        </path>
                                        <path :class="show && 'hidden'"
                                            d="M2.00789 3.42207C1.61736 3.03155 1.61736 2.39838 2.00789 2.00786C2.39841 1.61733 3.03158 1.61733 3.4221 2.00786L22.0004 20.5862C22.391 20.9767 22.391 21.6099 22.0004 22.0004C21.6099 22.3909 20.9767 22.3909 20.5862 22.0004L2.00789 3.42207Z" />
                                    </svg>
                                </div>
                            </div>

                            <p class="text-end text-xs hover:underline underline-offset-2 tracking-wider"><a
                                    href="#">Forgot
                                    yout
                                    password?</a></p>

                            <div class="pt-3 mx-auto w-fit">
                                <button
                                    class="px-5 py-2 text-mydark text-lg bg-white hover:bg-opacity-85 font-bold tracking-[1.5px] rounded-md"
                                    type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
