<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div>
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <img src="{{ asset('images/logo.png') }}" class="h-8 w-auto" alt="Logo">
                            </div>
                            <div class="flex-shrink-0 text-white ml-2">
                                KOMISI PEMILIHAN UMUM
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="{{ ('user.dashboard') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                                <a href="{{ route('user.aduan.pengaduan') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pengaduan</a>
                                <a href="{{ route('user.coblos.coba') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Coblos Pemilu</a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @if (Route::has('login'))
                                @auth
                                    <!-- Profile dropdown -->
                                    <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">
                                        <div>
                                            <button x-on:click="show = !show" type="button" class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                                <span class="sr-only">Open user menu</span>
                                                
                                                <img class="h-8 w-8 rounded-full" src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="">
                                            </button>
                                        </div>
                                        <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                            <a href="{{ route('user.profile') }}" class="block px-3 px-4 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                            
                                            <a href="{{ route('logout') }}" class="block px-3 px-4 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>

                                        </div>
                                    </div>

                                    <!-- Logout form -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About Us</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">{{ Auth::user()->nama_lengkap }}</div>
                            <div class="text-sm font-medium leading-none text-gray-400">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                    <div class="mt-3 px-2 space-y-1">
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your Profile</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div>@yield('contents')</div>
            </div>
        </main>
    </div>
    <footer class="bg-black py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <p>&copy; Hak Cipta MIA 2022 @2024.</p>
        </div>
    </footer>
</body>
</html>
