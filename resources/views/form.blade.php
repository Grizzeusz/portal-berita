<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="bg-gray-50 min-h-screen sm:py-10">
        
        <div class="relative mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">

            <!-- Header Section -->
            <h2 class="text-center text-base/7 font-semibold text-indigo-600">Holla! Admin</h2>
            <a href="/dashboard" class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#000000">
                    <path d="m274-450 248 248-42 42-320-320 320-320 42 42-248 248h526v60H274Z"/>
                </svg>
            </a>
            <p class="mx-auto max-w-lg text-balance text-center text-4xl font-semibold tracking-tight text-gray-950 sm:text-5xl">
                Everything you need to Create a News</p>

            <!-- Main Content Section -->
            <div class="mt-5 grid gap-4 sm:mt-5 lg: lg:">

                <!-- Form Section for Creating or Updating Post -->
                <div class="relative lg:w-full">
                    <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                    <div class="relative flex h-full w-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                        <div class="container mx-auto flex flex-col text-start h-full px-10 font-semibold gap-5 py-10">

                            <!-- Success Alert -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <!-- Form for Creating/Updating Post -->
                            <form class="space-y-3" action="{{ isset($post) ? route('post.update', $post->slug) : route('post.store') }}" method="POST">
                                @csrf
                                @if(isset($post))
                                    @method('PATCH')  <!-- Menetapkan metode PATCH untuk update -->
                                @endif
                                <!-- Title Input -->
                                <div>
                                    <label for="title" class="block text-sm font-medium leading-6">Title</label>
                                    <div class="mt-2">
                                        <input 
                                            id="title" 
                                            name="title" 
                                            type="text" 
                                            autocomplete="title" 
                                            required
                                            value="{{ old('title', $post->title ?? '') }}"
                                            class="@error('title') is-invalid @enderror block w-full text-black pl-5 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                                        />
                                    </div>
                                    @error('title')
                                        <div class="alert alert-danger text-red-500 font-light text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            
                                <!-- Body Input -->
                                <div>
                                    <label for="body" class="block text-sm font-medium leading-6">Body</label>
                                    <div class="mt-2">
                                        <textarea 
                                            id="body" 
                                            name="body" 
                                            autocomplete="current-body" 
                                            required
                                            class="text-black pl-5 block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('body', $post->body ?? '') }}</textarea>
                                    </div>
                                </div>
                            
                                <!-- Submit Button -->
                                <div>
                                    <button 
                                        type="submit"
                                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        {{ isset($post) ? 'Update' : 'Create' }}
                                    </button>   
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-l-[2rem]"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
