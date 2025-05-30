<nav class="sticky top-0 z-50 stick bg-white shadow-md">
    <div class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto ">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 rounded-full object-cover">
            <a href="#" class="font-semibold text-[#192C50] text-base">Rizal Bagus Hidayat</a>
        </div>
        <ul class="hidden lg:flex space-x-8 text-base font-normal text-[#192C50]">
            <a href="{{ route('home') }}"
                class="relative pb-1 border-b-2 border-transparent before:absolute before:bottom-0 before:left-0 before:h-0.5 before:w-full before:origin-left font-semibold before:scale-x-0 before:bg-[#192C50] before:transition-transform before:duration-300
                {{ Route::is('home') ? 'before:scale-x-100' : 'hover:before:scale-x-100' }}">
                Home
            </a>
            <a href="{{ route('about') }}"
                class="relative pb-1 border-b-2 border-transparent before:absolute before:bottom-0 before:left-0 before:h-0.5 before:w-full before:origin-left font-semibold before:scale-x-0 before:bg-[#192C50] before:transition-transform before:duration-300
                {{ Route::is('about') ? 'before:scale-x-100' : 'hover:before:scale-x-100' }}">
                About
            </a>
            <a href="{{ route('projects') }}"
                class="relative pb-1 border-b-2 border-transparent before:absolute before:bottom-0 before:left-0 before:h-0.5 before:w-full before:origin-left font-semibold before:scale-x-0 before:bg-[#192C50] before:transition-transform before:duration-300
                {{ Route::is('projects') ? 'before:scale-x-100' : 'hover:before:scale-x-100' }}">
                Projects
            </a>
            <a href="{{ route('contact') }}"
                class="relative pb-1 border-b-2 border-transparent before:absolute before:bottom-0 before:left-0 before:h-0.5 before:w-full before:origin-left font-semibold before:scale-x-0 before:bg-[#192C50] before:transition-transform before:duration-300
                {{ Route::is('contact') ? 'before:scale-x-100' : 'hover:before:scale-x-100' }}">
                Contact
            </a>
        </ul>

        <button id="menu-btn" class="lg:hidden text-[#192C50] focus:outline-none" aria-label="Toggle menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
        </button>
    </div>
</nav>

<!-- MOBILE MENU -->
<div id="mobile-menu" class="hidden lg:hidden px-6 pb-4 space-y-3 max-w-7xl mx-auto text-[#192C50] text-base">
    <a href="#" class="block hover:text-[#192C50]">Home</a>
    <a href="#" class="block hover:text-[#192C50]">About</a>
    <a href="#" class="block hover:text-[#192C50]">Projects</a>
    <a href="#" class="block hover:text-[#192C50]">Contacts</a>
</div>
