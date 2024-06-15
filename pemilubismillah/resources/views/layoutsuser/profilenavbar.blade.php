<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'User Profile')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div>
        <nav class="bg-gray-800 p-4">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" class="h-8 w-auto" alt="Logo">
                    <span class="text-white ml-2">KOMISI PEMILIHAN UMUM</span>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('user.dashboard') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="{{ route('user.aduan.pengaduan') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pengaduan</a>
                    <a href="{{ route('kelompok7') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Coblos Pemilu</a>
                </div>
                <div class="hidden md:flex items-center">
                    @if (Route::has('login'))
                        @auth
                            <div x-data="{ show: false }" @click.away="show = false" class="relative">
                                <button @click="show = !show" class="flex items-center text-sm focus:outline-none">
                                    <img class="h-8 w-8 rounded-full" src="{{ Auth::guard('user')->user()->profile_picture ? asset('storage/' . Auth::guard('user')->user()->profile_picture) : 'https://via.placeholder.com/150' }}" alt="User Profile Picture">
                                </button>
                                <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5">
                                    <a href="{{ route('user.profile') }}" class="block px-3 px-4 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                            
                                    <a href="{{ route('logout') }}" class="block px-3 px-4 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>

                                </div>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-white">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-white">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
      
        <div class="py-6">
            @yield('content')
        </div>
      
        <footer class="bg-black py-6">
            <div class="max-w-7xl mx-auto text-center text-white">
                <p>&copy; Hak Cipta MIA 2022 @2024.</p>
            </div>
        </footer>
    </div>
</body>
</html>
