<x-layout>
    <x-slot:title>
        {{-- <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">From the blog
            </h2>
        </div> --}}
    </x-slot:title>

    <div class="bg-white sm:py-32 lg:py-0 ">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16   border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($posts as $post)
                    <article class="flex max-w-xl flex-col items-start justify-between shadow-xl p-10 rounded-md">
                        <a href="/blog/id={{ $post['slug'] }}">
                            <h2 class="hover:underline mb-1 text-3xl tracking-tight font-bold text-gray-900">
                                {{ $post['title'] }}
                            </h2>
                        </a>
                        <div class="text-base text-gray-400">
                            <a class="hover:underline"
                                href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> in <a
                                class="hover:underline"
                                href="/categories/{{ $post->category->id }}">{{ $post->category->name_category }}</a> |
                            {{ $post->created_at->diffForHumans() }}
                        </div>
                        <p class=" my-4 font-light">{{ Str::limit($post['body'], 50) }}</p>
                        <a href="/blog/id={{ $post['slug'] }}" class="font-medium text-blue-500">Read More
                            &raquo;</a>
                    </article>
                @endforeach

                <!-- More posts... -->
            </div>
        </div>
    </div>

</x-layout>
