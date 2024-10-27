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
    <div class="bg-gray-50  sm:py-10">
        <div class="relative mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">

            <h2 class="text-center text-base/7 font-semibold text-indigo-600">Holla! Admin</h2>
            <a href="/" class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#000000"><path d="m274-450 248 248-42 42-320-320 320-320 42 42-248 248h526v60H274Z"/></svg>
            </a>
            <p
                class="mx-auto  max-w-lg text-balance text-center text-4xl font-semibold tracking-tight text-gray-950 sm:text-5xl">
                Everything you need to Create a News</p>
            <div class="mt-5 grid gap-4 sm:mt-5 lg:grid-cols-3 lg:grid-rows-2">


                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                    
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                       

                        <div class="container  mx-auto flex flex-col text-center h-full items-center justify-center font-semibold gap-5  ">
                            <img
                                src="/img/pp.jpeg"
                                alt=""
                                class="h-60  border-8 border-hijau_utama w-60  rounded-full"
                            />
                            <a href>Hello, Admin</a>
                        </div>
                        <div class="flex justify-center mb-10">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="px-6 py-2 text-white bg-red-600 rounded-lg shadow-lg hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Logout
                                </button>
                            </form>
                        </div>
                        
                        {{-- <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center">News
                            </p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Anim aute id magna
                                aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                        </div>

                        <div
                            class="relative min-h-[30rem] w-full grow [container-type:inline-size] max-lg:mx-auto max-lg:max-w-sm">
                            <div
                                class="absolute inset-x-10 bottom-0 top-10 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                                <img class="size-full object-cover object-top"
                                    src="https://tailwindui.com/plus/img/component-images/bento-03-mobile-friendly.png"
                                    alt="">
                            </div>
                        </div> --}}

                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-l-[2rem]">
                    </div>
                </div>


                <div class="relative max-lg:row-start-1">
                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>


                   
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                            <span class="mt-2 text-3xl font-medium tracking-tight text-gray-950 max-lg:text-center">
                                Post</span>
            
                        </div>
                        <div
                            class="flex flex-1 items-center justify-center px-8 max-lg:pb-12 max-lg:pt-10 sm:px-10 lg:pb-2">
                          <span class="text-5xl">{{ $posts->count() }}</span>
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem]">
                    </div>
                </div>



                <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                    <div class="absolute inset-px rounded-lg bg-white"></div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                        <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center">
                                Create News</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">What Happent Now?</p>
                        </div>
                        <div class="flex flex-1 items-center justify-center [container-type:inline-size] max-lg:py-6 lg:pb-2">
                           <a href="/form/post" class="px-10 py-2 bg-blue-500 hover:bg-blue-500/70 shadow-lg shadow-blue-500 transition text-white font-semibold rounded-full ">Create</a>
                        </div>
                    </div>
                    <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5"></div>
                </div>


                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                    </div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                        <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10 flex justify-between ">
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center">
                                Manage Posts</p>

                   
                        </div>
                        <div class="relative max-h-[30rem] w-full ">
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                           @endif
                            <ul role="list" class="divide-y divide-gray-100 flex flex-col gap-2 h-screen overflow-y-auto px-5">
                                @foreach ($posts as $post )
                                <li class="flex justify-between gap-x-6 py-5 bg-gray-100 px-5 rounded-2xl  shadow-inner">
                                    <div class="flex min-w-0 gap-x-4">
                                      <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $post['title'] }}</p>
                                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                                      </div>
                                    </div>
                                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                      <ul class=" flex flex-wrap w-3/4  gap-1 justify-center items-center ">
                                      <li class="bg-yellow-500 hover:bg-yellow-500/80 text-white font-light text-sm  px-2 py-1 rounded-full shadow-lg shadow-yellow-500">
                                        <a href='/form/post/edit/{{ $post['slug'] }}' >
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                                         </a>    
                                      </li>
                                      <li class="bg-red-500 hover:bg-red-500/80 text-white font-light text-sm px-2 py-1 rounded-full shadow-lg shadow-red-500">
                                        <!-- Form for Delete -->
                                        <form action="{{ route('post.destroy', $post['slug']) }}" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin menghapus post ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex items-center">
                                                <!-- Icon for Delete -->
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                                    <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </li>   
                                      <li class="bg-green-500 hover:bg-green-500/80 text-white font-light text-sm px-2 py-1  rounded-full shadow-lg shadow-green-500">
                                        <a href="/blog/id={{ $post['slug'] }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                                        </a>    
                                    </li>
                                     
                                      </ul>
                                    </div>
                                  </li>
                                @endforeach
                              
                               
                               
                              </ul>
                              
                                {{-- <div
                                    class="absolute bottom-0 left-10 right-0 top-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl">
                                    <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                        <div class="-mb-px flex text-sm font-medium leading-6 text-gray-400">
                                            <div
                                                class="border-b border-r border-b-white/20 border-r-white/10 bg-white/5 px-4 py-2 text-white">
                                                NotificationSetting.jsx</div>
                                            <div class="border-r border-gray-600/10 px-4 py-2">App.jsx</div>
                                        </div>
                                    </div>
                                    <div class="px-6 pb-14 pt-6">
                                        <!-- Your code example -->
                                    </div>
                                </div> --}}
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
