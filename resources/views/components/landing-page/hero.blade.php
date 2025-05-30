<section class="max-w-7xl mx-auto flex gap-8 lg:gap-0 flex-col lg:flex-row items-center px-6 py-16 relative z-10"
    data-aos="fade-down" data-aos-delay="300" data-aos-duration="800">
    <div class="flex-1 flex items-center lg:items-start flex-col">
        <!-- Baris pertama: Hello -->
        <h5 id="hello" class="text-md lg:text-lg font-normal mb-2"></h5>
        <!-- Baris kedua: My Name is  Rizal Bagus Hidayat -->
        <h6 id="intro" class="text-3xl mb-1">
            <span id="intro-text" class=""></span>
            <span id="intro-name" class="font-bold"></span>
        </h6>
        <!-- Baris ketiga: looping teks -->
        <h3 class="mb-6">
            <span id="before-rotating-text" class="text-xl lg:text-2xl font-semibold"></span>
            <span id="rotating-text" class="text-3xl lg:text-4xl font-extrabold"></span>
        </h3>
        <div class="flex gap-6">
            <button
                class="bg-[#192C50] font-semibold text-base px-5 py-2 rounded-md hover:bg-[#0f1c35] text-white transition transform hover:scale-125 duration-300 ease-in-out"
                style="animation-duration: 0.5s; animation-delay: 0.3s;">
                Got Project?
            </button>
            <button
                class="border border-[#192C50] text-[#192C50] font-semibold text-base px-5 py-2 rounded-md hover:bg-[#192C50] hover:text-white transition transform hover:scale-125 duration-300 ease-in-out"
                style="animation-duration: 0.5s; animation-delay: 0.3s;">
                My resume
            </button>
        </div>
    </div>
    <div class="relative w-72 h-72 mt-12 lg:mt-0  lg:-ml-12 flex items-center justify-center"
        style="animation-duration: 0.7s; animation-delay: 0.3s;">
        <div class="absolute inset-0 w-96 h-96 rounded-full bg-[#192C50] opacity-70 blur-2xl z-0 -ml-16 -mt-8"></div>
        <div class="absolute inset-0 w-80 h-80 border-[20px] border-[#192C50] rounded-full z-0 -ml-8"></div>
        <img src="{{ asset('images/icang2.png') }}" alt="Rizal Bagus Hidayat"
            class="relative z-10 w-full -mb-3 rounded-lg" />
    </div>
    {{-- <div class="relative w-72 h-72 mt-12 lg:mt-0 lg:-ml-12 flex items-center justify-center"
        style="animation-duration: 0.7s; animation-delay: 0.3s;">
        <!-- Kurangi ukuran, hilangkan margin negatif -->
        <div class="absolute w-72 h-72 rounded-full bg-[#192C50] opacity-70 blur-2xl z-0"></div>
        <div class="absolute w-64 h-64 border-[20px] border-[#192C50] rounded-full z-0"></div>
        <img src="{{ asset('images/icang2.png') }}" alt="Rizal Bagus Hidayat"
            class="relative z-10 w-full -mb-3 rounded-lg" />
    </div> --}}
</section>
