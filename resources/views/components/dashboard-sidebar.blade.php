<div x-data="{ open: false }" class="flex flex-col flex-shrink-0 w-64 text-gray-700 bg-white border-r border-gray-100 hidden md:flex h-screen sticky top-0">
    <!-- Sidebar Header -->
    <div class="flex-shrink-0 px-8 py-6 flex flex-row items-center justify-center border-b border-gray-50">
        <a href="{{ route('home') }}" class="flex items-center gap-2 text-xl font-bold tracking-tight text-gray-900 focus:outline-none">
            <x-application-logo class="h-8 w-8 text-green-600 fill-current" />
            <span>RR Institute</span>
        </a>
    </div>

    <!-- Navigation Links -->
    <nav class="flex-grow md:block px-4 py-6 md:overflow-y-auto space-y-2">
        <!-- Dashboard Link -->
        <a href="{{ route('dashboard') }}" 
           class="flex items-center px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 group {{ request()->routeIs('dashboard') ? 'bg-green-50 text-green-700 shadow-sm' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 ms-1' }}">
            <svg class="w-5 h-5 mr-3 {{ request()->routeIs('dashboard') ? 'text-green-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
            {{ __('Dashboard') }}
        </a>

        @if(Auth::user()->isInstitute())
            <div class="px-4 mt-6 mb-2">
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Management</p>
            </div>

            <!-- Manage Students -->
            <a href="{{ route('institute.students.index') }}" 
               class="flex items-center px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 group {{ request()->routeIs('institute.students.*') ? 'bg-green-50 text-green-700 shadow-sm' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 ms-1' }}">
                <svg class="w-5 h-5 mr-3 {{ request()->routeIs('institute.students.*') ? 'text-green-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                {{ __('Students') }}
            </a>

            <!-- Enquiries -->
            <a href="{{ route('institute.enquiries.index') }}" 
               class="flex items-center px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 group {{ request()->routeIs('institute.enquiries.*') ? 'bg-green-50 text-green-700 shadow-sm' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 ms-1' }}">
                <svg class="w-5 h-5 mr-3 {{ request()->routeIs('institute.enquiries.*') ? 'text-green-600' : 'text-gray-400 group-hover:text-gray-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
                {{ __('Enquiries') }}
            </a>
        @endif
    </nav>

    <!-- User Profile & Logout -->
    <div class="border-t border-gray-100 p-4">
        <div class="flex items-center gap-3 p-3 rounded-xl bg-gray-50 border border-gray-100">
            <div class="h-10 w-10 cursor-pointer rounded-full bg-green-500 text-white flex items-center justify-center font-bold relative active:scale-95 transition-transform" 
                     onclick="window.location.href='{{ route('profile.edit') }}'" title="Edit Profile">
                 {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                 <!-- Red dot indicator for admin role -->
                 @if(Auth::user()->isInstitute())
                    <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-red-500 border-2 border-white rounded-full"></span>
                 @endif
            </div>

            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-gray-900 truncate">
                    {{ Auth::user()->name }}
                </p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-xs text-red-500 hover:text-red-700 font-medium hover:underline focus:outline-none">
                        {{ __('Sign Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Sidebar Overlay (Enhanced) -->
<div x-data="{ open: false }" class="md:hidden">
    <!-- Mobile Header -->
    <div class="flex items-center justify-between bg-white border-b border-gray-100 p-4 sticky top-0 z-30">
        <div class="flex items-center gap-2">
            <x-application-logo class="h-6 w-6 text-green-600 fill-current" />
            <span class="font-bold text-lg text-gray-900">RR Institute</span>
        </div>
        <button @click="open = !open" class="p-2 rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="open" class="fixed inset-0 z-40 flex" style="display: none;">
        <div x-show="open" 
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="open = false" 
             class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm"></div>
        
        <div x-show="open" 
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="relative flex flex-col w-72 max-w-xs bg-white h-full shadow-2xl">
            
            <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
                <span class="font-bold text-lg text-gray-900">Menu</span>
                <button @click="open = false" class="p-2 rounded-full hover:bg-white hover:shadow-sm text-gray-500 transition-all">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            
            <nav class="flex-grow px-4 py-6 overflow-y-auto space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl {{ request()->routeIs('dashboard') ? 'bg-green-50 text-green-700' : 'text-gray-600 hover:bg-gray-50' }}">
                     <svg class="w-5 h-5 mr-3 {{ request()->routeIs('dashboard') ? 'text-green-600' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    Dashboard
                </a>
                
                @if(Auth::user()->isInstitute())
                    <div class="px-4 mt-6 mb-2">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Management</p>
                    </div>

                    <a href="{{ route('institute.students.index') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl {{ request()->routeIs('institute.students.*') ? 'bg-green-50 text-green-700' : 'text-gray-600 hover:bg-gray-50' }}">
                        <svg class="w-5 h-5 mr-3 {{ request()->routeIs('institute.students.*') ? 'text-green-600' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        Manage Students
                    </a>
                    <a href="{{ route('institute.enquiries.index') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-xl {{ request()->routeIs('institute.enquiries.*') ? 'bg-green-50 text-green-700' : 'text-gray-600 hover:bg-gray-50' }}">
                         <svg class="w-5 h-5 mr-3 {{ request()->routeIs('institute.enquiries.*') ? 'text-green-600' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                        </svg>
                        Enquiries
                    </a>
                @endif
                
                 <form method="POST" action="{{ route('logout') }}" class="mt-auto border-t border-gray-100 pt-4 px-4">
                    @csrf
                    <button type="submit" class="flex items-center w-full px-4 py-3 text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-xl transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        {{ __('Log Out') }}
                    </button>
                </form>
            </nav>
        </div>
    </div>
</div>
