<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 px-10 max-w-screen-md border-b border-gray-500">

        <!-- Title of the post -->
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>

        <!-- Created date of the post, displayed as a human-readable format -->
        <div class="text-base text-gray-400">
            | {{ $post->created_at->diffForHumans() }}
        </div>

        <!-- Body of the post -->
        <p class="my-4 font-light">{{ $post['body'] }}</p>

        <!-- Link to go back to the blog list -->
        <a href="/blog" class="font-medium text-blue-500">&laquo; back to post </a>
    </article>

</x-layout>
