@extends('layouts.admin')

@section('title', 'Create News')

@section('pagetitle', 'Create')

@section('content')
    <section class="text-black p-4 space-y-8 bg-white border rounded-md">
        <form action="" class="space-y-4">
            <div class="flex gap-8 items-center">
                <div class="flex-1 space-y-5">
                    <div class="flex flex-col gap-1">
                        <label for="title" class="text-sm tracking-[1px]">Title</label>
                        <input
                            class="p-3 w-full text-lg text-mydark font-medium tracking-[0.5px] outline-none bg-myprimary/5 rounded-md"
                            type="text" name="title" id="title" placeholder="title" required>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="slug" class="text-sm tracking-[1px]">Slug</label>
                        <input
                            class="p-3 w-full text-lg text-mydark font-medium tracking-[0.5px] outline-none bg-myprimary/5 rounded-md"
                            type="text" name="slug" id="slug" placeholder="slug" required>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label for="status" class="text-sm tracking-[1px]">Status</label>
                        <select id="status" name="status"
                            class="p-3 w-full text-md text-mydark font-medium tracking-[0.5px] outline-none bg-myprimary/5 rounded-md"
                            required>
                            <option value="draft" selected>Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-3">
                    <p class="text-center font-medium tracking-[1px]">Preview Tumbnail</p>
                    <div x-data="{ image: '' }" class="relative w-80 h-40 border border-gray-300">
                        <input type="file" accept="image/*" name="tumbnail"
                            @change="image = URL.createObjectURL($event.target.files[0])"
                            class="z-10 absolute inset-0 opacity-0 size-full cursor-pointer">
                        <img x-show="image" :src="image" alt="MM"
                            class="object-cover object-center size-full">

                        <div x-show="!image" class="absolute size-full flex items-center justify-center">
                            <p class="text-gray-500 font-medium">Tumbnail image</p>
                        </div>

                        <button x-show="image" @click="image = ''"
                            class="z-20 absolute top-2 right-2 text-red-600 hover:text-red-800">
                            <svg class="p-1 size-8 stroke-red-600 border bg-white hover:bg-gray-200 rounded-md"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M10 12L14 16M14 12L10 16M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-1">
                <label for="content" class="text-sm tracking-[1px]">Content (Bakalan diganti ckeditor atau
                    sejenisnya)</label>
                <textarea class="p-3 w-full text-lg text-mydark font-medium outline-none bg-myprimary/5 rounded-md" name="content"
                    id="content" placeholder="content" cols="30" rows="10" required></textarea>
            </div>

            <div class="pt-3 mx-auto w-fit">
                <button
                    class="px-5 py-2 text-white text-lg bg-myprimary bg-opacity-80 hover:bg-opacity-90 font-bold tracking-[1.5px] rounded-md"
                    type="submit">Simpan</button>
            </div>
        </form>
    </section>
@endsection
