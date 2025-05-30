@section('tittle', 'Portofolio - Home')
@push('styles')
    <style>
        .fade-slide-enter {
            opacity: 0;
            transform: translateY(1rem);
        }

        .fade-slide-enter-active {
            transition: all 500ms ease;
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <style>
        @keyframes scaleFadeIn {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .scale-fade-in {
            animation-name: scaleFadeIn;
            animation-fill-mode: forwards;
            animation-timing-function: ease-out;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>
@endpush
<x-app>

    <!-- HERO SECTION -->
    <x-landing-page.hero />

    <!-- TECH STACK -->
    <x-landing-page.tech />

    <!-- ABOUT -->
    <x-landing-page.about />

    <!-- PROJECTS -->
    <section class="px-6 text-white bg-[#e6f0f8]" data-aos="fade-up">
        <div class="max-w-7xl mx-auto py-8">
            <h3 class="text-3xl font-bold text-[#192C50] text-center mb-10 ">Projects</h3>
            <div class="flex flex-wrap justify-center gap-3 mb-10">
                <button class="filter-btn border bg-[#192C50] text-white px-4 py-1 rounded-full active"
                    data-filter="web">Web</button>
                <button class="filter-btn border border-[#192C50] text-[#192C50] px-4 py-1 rounded-full"
                    data-filter="mobile">Mobile</button>
                <button class="filter-btn border border-[#192C50] text-[#192C50] px-4 py-1 rounded-full"
                    data-filter="dashboard">Dashboard</button>
            </div>

            <div id="projects-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Cards akan di-inject oleh JS -->
            </div>
        </div>
    </section>
    {{-- <section class="flex flex-col items-center justify-center min-h-screen bg-[#e6f0f8] text-[#192C50] px-4">
        <h1 class="text-4xl font-bold mb-4" data-aos="fade-up" data-aos-delay="500">Get In Touch</h1>
        <p class="text-lg mb-8" data-aos="fade-up" data-aos-delay="500">Let's work together</p>

        <form class="w-full max-w-lg bg-white rounded-lg shadow-md p-6" data-aos="fade-up" data-aos-delay="500">
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1" for="name">Name</label>
                <input type="text" id="name"
                    class="block w-full p-2 rounded border border-[#192C50] bg-white text-[#192C50] placeholder:text-[#DADADA] focus:outline-none focus:ring-2 focus:ring-[#192C50]"
                    placeholder="Full name" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1" for="email">Email</label>
                <input type="email" id="email"
                    class="block w-full p-2 rounded border border-[#192C50] bg-white text-[#192C50] placeholder:text-[#DADADA] focus:outline-none focus:ring-2 focus:ring-[#192C50]"
                    placeholder="example@mail.com" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1" for="service">Service</label>
                <select id="service"
                    class="block w-full p-2 rounded border border-[#192C50] bg-white text-[#192C50] focus:outline-none focus:ring-2 focus:ring-[#192C50]">
                    <option>Select a service</option>
                    <option>Service 1</option>
                    <option>Service 2</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1" for="message">Message</label>
                <textarea id="message"
                    class="block w-full p-2 rounded border border-[#192C50] bg-white text-[#192C50] placeholder:text-[#DADADA] focus:outline-none focus:ring-2 focus:ring-[#192C50]"
                    rows="4" placeholder="Your message..."></textarea>
            </div>

            <button type="submit"
                class="w-full p-2 rounded bg-[#192C50] text-white font-bold hover:bg-[#0f1c35] transition duration-200">
                Get in Touch
            </button>
        </form>
    </section> --}}

    @push('scripts')
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            AOS.init({

            });
        </script>
        <script>
            // Fungsi mengetik satu kali untuk teks intro
            function typeText(element, text, speed = 100) {
                return new Promise((resolve) => {
                    let i = 0;
                    element.textContent = "";

                    function typing() {
                        if (i < text.length) {
                            element.textContent += text.charAt(i);
                            i++;
                            setTimeout(typing, speed);
                        } else {
                            resolve();
                        }
                    }
                    typing();
                });
            }

            // Fungsi untuk berganti-ganti teks dengan efek typing & hapus (loop)
            async function rotatingTyping(element, texts, typingSpeed = 100, pause = 1500) {
                let i = 0;
                while (true) {
                    const text = texts[i];
                    await typeText(element, text, typingSpeed);
                    await new Promise(r => setTimeout(r, pause));
                    await eraseText(element, typingSpeed);
                    i = (i + 1) % texts.length;
                }
            }

            // Fungsi hapus teks dengan animasi
            function eraseText(element, speed = 50) {
                return new Promise((resolve) => {
                    let length = element.textContent.length;

                    function erasing() {
                        if (length > 0) {
                            element.textContent = element.textContent.slice(0, length - 1);
                            length--;
                            setTimeout(erasing, speed);
                        } else {
                            resolve();
                        }
                    }
                    erasing();
                });
            }

            document.addEventListener("DOMContentLoaded", async () => {
                const helloEl = document.getElementById("hello");
                const introEl = document.getElementById("intro");
                const rotatingEl = document.getElementById("rotating-text");
                const beforeRotatingEl = document.getElementById("before-rotating-text");
                const introTextEl = document.getElementById("intro-text");
                const introNameEl = document.getElementById("intro-name");
                // Animasi Hello dan Nama
                await typeText(helloEl, "Hello", 150);
                // Ketik "My name is " terlebih dulu (semi-bold)
                await typeText(introTextEl, "My name is ", 100);

                // Lanjut ketik "Rizal Bagus Hidayat" (bold)
                await typeText(introNameEl, "Rizal Bagus Hidayat", 100);

                // await typeText(introEl, "My Name is  Rizal Bagus Hidayat", 100);

                // Ketik "I am a " sekali saja
                await typeText(beforeRotatingEl, "I am a ", 100);

                // Mulai animasi teks yang berganti
                rotatingTyping(rotatingEl, ["Website Developer", "Laravel Developer", "Fullstack Developer"]);
            });
        </script>
        <script>
            document.getElementById('menu-btn').addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.toggle('hidden');
            });

            const projects = [{
                    title: "Lumajang Tulen",
                    description: "Platform e-commerce resmi untuk mendukung UMKM Kabupaten Lumajang.",
                    category: "web",
                    image: "{{ asset('images/projects/lumajang-tulen.png') }}"
                },
                {
                    title: "SSJ (Sapi Sehat Jember)",
                    description: "Website monitoring kesehatan sapi untuk Dinas Peternakan Jember.",
                    category: "web",
                    image: "{{ asset('images/projects/ssj.png') }}"
                },
                {
                    title: "Safe Vault",
                    description: "Password manager berbasis web dengan autentikasi Google dan PIN.",
                    category: "web",
                    image: "{{ asset('images/projects/safe-vault.png') }}"
                },
                {
                    title: "J-Layer",
                    description: "Website pengajuan pakan ayam terintegrasi untuk peternak.",
                    category: "web",
                    image: "{{ asset('images/projects/j-layer.png') }}"
                }
            ];

            const grid = document.getElementById('projects-grid');
            const buttons = document.querySelectorAll('.filter-btn');

            function renderProjects(category) {
                grid.innerHTML = '';

                const filtered = category === 'web' ? projects : projects.filter(p => p.category === category);

                if (filtered.length === 0) {
                    grid.innerHTML = `
                    <div class="col-span-full text-center text-[#192C50] text-sm font-medium opacity-0 transition-opacity duration-500">
                        Tidak ada project yang sesuai.
                    </div>`;
                    setTimeout(() => {
                        grid.firstElementChild.classList.remove('opacity-0');
                    }, 50);
                    return;
                }

                filtered.forEach((p, i) => {
                    const card = document.createElement('div');
                    card.className =
                        `border border-gray-300 rounded-lg bg-white text-[#192C50] hover:shadow-lg hover:scale-110 transition transform fade-slide-enter`;
                    card.innerHTML = `
                    <img src="${p.image}" alt="${p.title}" class="w-full h-44 object-cover rounded-t-lg" />
                    <div class="p-4">
                        <h5 class="font-semibold mb-1">${p.title}</h5>
                        <p class="text-sm text-gray-600 mb-3">${p.description}</p>
                        <a href="#" class="button-view-project inline-block bg-[#192C50] text-white text-xs font-semibold px-3 py-1 rounded hover:bg-[#0f1c35] hover:scale-110 transition">View Project</a>
                    </div>
                `;
                    grid.appendChild(card);
                    setTimeout(() => card.classList.add('fade-slide-enter-active'), 10 + i * 100);
                });
            }

            buttons.forEach(btn => {
                btn.addEventListener('click', () => {
                    buttons.forEach(b => b.classList.remove('bg-[#192C50]', 'text-white', 'active'));
                    buttons.forEach(b => b.classList.add('border-[#192C50]', 'text-[#192C50]'));
                    btn.classList.add('bg-[#192C50]', 'text-white', 'active');
                    renderProjects(btn.dataset.filter);
                });
            });

            renderProjects('web');
        </script>
        <script>
            // Contoh penggunaan SweetAlert2
            document.querySelectorAll('.button-view-project').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Project Doesnt Exist',
                        text: 'This project is not added yet available yet.',
                        icon: 'info',
                        confirmButtonText: 'Close'
                    });
                });
            });
        </script>
    @endpush
</x-app>
