<!DOCTYPE html>
<html lang="en">

<head class="h-full bg-gray-100">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Load Alpine.js for JavaScript interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Load custom font styles -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <!-- Load CSS styles via Vite -->
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="h-full bg-gray-200">

    <!-- Main section for login with full height and centering -->
    <section class="h-screen flex justify-center bg-login bg-center bg-cover items-center md:p-12">
        <!-- Container for login form with responsive design -->
        <div class="flex flex-col justify-center bg-white rounded-2xl backdrop-blur-md shadow-lg w-11/12 sm:w-1/3 md:w-1/4 p-6 md:p-10 text-black">

            <!-- Display success message if exists -->
            @if (session()->has('success'))
                <div class="alert alert-secondary" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <!-- Title of the login form -->
                <h2 class="mt-5 text-center text-4xl font-bold leading-9 tracking-tight">
                    Login
                </h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <!-- Login form -->
                <form class="space-y-3" action="{{ route('login.authenticate') }}" method="POST">
                    @csrf <!-- CSRF token for security -->
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="@error('email') is-invalid @enderror block w-full text-black pl-5 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>
                        <!-- Display error message for email -->
                        @error('email')
                            <div class="alert alert-danger text-red-500 font-light text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="text-black pl-5 block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Login
                        </button>
                    </div>
                </form>
                <!-- Link to create a new account -->
                {{-- <a href="/register" class="text-indigo-600 hover:text-indigo-500 text-center block mt-4">Create account</a> --}}
            </div>
        </div>
    </section>
</body>

</html>
