<x-layout>
    <x-slot:title>
        {{-- Slot untuk judul halaman, bisa disesuaikan jika diperlukan --}}
    </x-slot:title>

    <div class="bg-white sm:py-32 lg:py-0 ">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                {{-- Loop untuk menampilkan setiap pos yang ada di database --}}
                @foreach ($posts as $post)
                    <article class="flex max-w-xl flex-col items-start justify-between shadow-xl p-10 rounded-md">
                        {{-- Link ke halaman detail pos --}}
                        <a href="/blog/id={{ $post['slug'] }}">
                            <h2 class="hover:underline mb-1 text-3xl tracking-tight font-bold text-gray-900">
                                {{ $post['title'] }} {{-- Judul pos yang ditampilkan --}}
                            </h2>
                        </a>
                        <div class="text-base text-gray-400"> |
                            {{ $post->created_at->diffForHumans() }} {{-- Waktu pembuatan pos dalam format yang mudah dibaca --}}
                        </div>
                        <p class="my-4 font-light">{{ Str::limit($post['body'], 50) }} {{-- Memotong isi pos untuk ditampilkan dengan batasan 50 karakter --}}</p>
                        <a href="/blog/id={{ $post['slug'] }}" class="font-medium text-blue-500">Read More
                            &raquo;</a> {{-- Link untuk membaca lebih lanjut tentang pos --}}
                    </article>
                @endforeach

                {{-- Tempat untuk lebih banyak pos jika ada --}}
            </div>
        </div>
    </div>

</x-layout>
