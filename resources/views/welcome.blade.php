<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Rizal Bagus Hidayat Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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

        <style>@keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>

</head>

<body class="text-[#192C50] font-inter min-h-screen text-base">
    <!-- NAVIGATION -->
    <nav class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 rounded-full object-cover">
            <a href="#" class="font-semibold text-[#192C50] text-base">Rizal Bagus Hidayat</a>
        </div>
        <ul class="hidden lg:flex space-x-8 text-base font-normal text-[#192C50]">
            <a href="#"
                class="relative pb-1 border-b-2 border-transparent before:absolute before:bottom-0 before:left-0 before:h-0.5 before:w-full before:origin-left font-semibold before:scale-x-0 before:bg-[#192C50] before:transition-transform before:duration-300 hover:before:scale-x-100">
                Home
            </a>
            <a href="#"
                class="relative pb-1 border-b-2 border-transparent before:absolute before:bottom-0 before:left-0 before:h-0.5 before:w-full before:origin-left font-semibold before:scale-x-0 before:bg-[#192C50] before:transition-transform before:duration-300 hover:before:scale-x-100">
                About
            </a>
            <a href="#"
                class="relative pb-1 border-b-2 border-transparent before:absolute before:bottom-0 before:left-0 before:h-0.5 before:w-full before:origin-left font-semibold before:scale-x-0 before:bg-[#192C50] before:transition-transform before:duration-300 hover:before:scale-x-100">
                Projects
            </a>
            <a href="#"
                class="relative pb-1 border-b-2 border-transparent before:absolute before:bottom-0 before:left-0 before:h-0.5 before:w-full before:origin-left font-semibold before:scale-x-0 before:bg-[#192C50] before:transition-transform before:duration-300 hover:before:scale-x-100">
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
    </nav>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="hidden lg:hidden px-6 pb-4 space-y-3 max-w-7xl mx-auto text-[#192C50] text-base">
        <a href="#" class="block hover:text-[#192C50]">Home</a>
        <a href="#" class="block hover:text-[#192C50]">About</a>
        <a href="#" class="block hover:text-[#192C50]">Projects</a>
        <a href="#" class="block hover:text-[#192C50]">Contacts</a>
    </div>

    <!-- HERO SECTION -->
    <section class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center px-6 py-12 relative z-10"
        data-aos="fade-up">
        <div class="flex-1">
            <!-- Baris pertama: Hello -->
            <h5 id="hello" class="font-bold text-3xl mb-1"></h5>
            <!-- Baris kedua: I'm Rizal Bagus Hidayat -->
            <h6 id="intro" class="text-lg font-normal mb-2"></h6>
            <!-- Baris ketiga: looping teks -->
            <h2 id="rotating-text" class="font-extrabold text-4xl mb-6 min-h-[56px]"></h2>

            <div class="flex gap-3">
                <button
                    class="bg-[#192C50] text-white font-semibold text-base px-5 py-2 rounded
             hover:bg-[#0f1c35] transition transform hover:scale-105 duration-300 ease-in-out
             scale-fade-in"
                    style="animation-duration: 0.5s; animation-delay: 0.3s;">
                    Got a project?
                </button>
                <button
                    class="border border-[#192C50] text-[#192C50] font-semibold text-base px-5 py-2 rounded
             hover:bg-[#192C50] hover:text-white transition transform hover:scale-105 duration-300 ease-in-out
             scale-fade-in"
                    style="animation-duration: 0.5s; animation-delay: 0.3s;">
                    My resume
                </button>
            </div>
        </div>

        <div class="relative w-72 h-72 mt-10 lg:mt-0 ml-auto flex items-center justify-center scale-fade-in"
            style="animation-duration: 0.7s; animation-delay: 0.3s;">
            <div class="absolute w-96 h-96 rounded-full bg-[#192C50] opacity-70 blur-2xl z-0 -mr-8 -mt-8"></div>
            <div class="absolute w-80 h-80 border-[20px] border-[#192C50] rounded-full z-0 -ml-8"></div>
            <img src="{{ asset('images/icang.png') }}" alt="Rizal Bagus Hidayat"
                class="relative z-10 w-full -mb-3 rounded-lg" />
        </div>
    </section>


    <!-- TECH STACK -->
    <section class="bg-[#e6f0f8] py-2 text-center text-base text-[#192C50] mx-auto mb-12 px-6 overflow-hidden relative">
        <div class="tech-marquee whitespace-nowrap inline-block opacity-30 font-semibold text-lg"
            style="animation: marquee 15s linear infinite;">
            <span class="mx-6">PHP</span>
            <span class="mx-6">Laravel</span>
            <span class="mx-6">Filament</span>
            <span class="mx-6">HTML5</span>
            <span class="mx-6">CSS</span>
            <span class="mx-6">JavaScript</span>
            <span class="mx-6">Jquery</span>
            <span class="mx-6">MySQL</span>
            <span class="mx-6">Eloquent ORM</span>
            <span class="mx-6">Git</span>
            <span class="mx-6">Github</span>
            <span class="mx-6">REST API</span>
            <span class="mx-6">Redis</span>
            <!-- ulangi konten supaya efek scroll lancar -->
            <span class="mx-6">PHP</span>
            <span class="mx-6">Laravel</span>
            <span class="mx-6">Filament</span>
            <span class="mx-6">HTML5</span>
            <span class="mx-6">CSS</span>
            <span class="mx-6">JavaScript</span>
            <span class="mx-6">Jquery</span>
            <span class="mx-6">MySQL</span>
            <span class="mx-6">Eloquent ORM</span>
            <span class="mx-6">Git</span>
            <span class="mx-6">Github</span>
            <span class="mx-6">REST API</span>
            <span class="mx-6">Redis</span>
        </div>


    </section>


    <!-- ABOUT -->
    <section class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-12 px-6 mb-20" data-aos="fade-up"
        data-aos-delay="500">
        <div class="flex flex-col gap-2 flex-shrink-0 min-w-[180px]">
            <div class="flex border-l-2 border-[#192C50] pl-6 items-center gap-4">
                <i class="fas fa-code text-xl"></i><span>Website Development</span>
            </div>
            <div class="-ml-[3px] w-2 h-2 bg-[#192C50] rounded-full"></div>
            <div class="flex border-l-2 border-[#192C50] pl-6 items-center gap-4">
                <i class="fas fa-server text-xl"></i><span>Website Hosting</span>
            </div>
            <div class="-ml-[3px] w-2 h-2 bg-[#192C50] rounded-full"></div>
            <div class="flex border-l-2 border-[#192C50] pl-6 items-center gap-4">
                <i class="fas fa-plug text-xl"></i><span>API Development</span>
            </div>
            <div class="-ml-[3px] w-2 h-2 bg-[#192C50] rounded-full"></div>
            <div class="flex border-l-2 border-[#192C50] pl-6 items-center gap-4">
                <i class="fas fa-user-shield text-xl"></i><span>Authentication System</span>
            </div>
        </div>

        <div class="flex-1">
            <h3 class="text-2xl font-bold mb-4">About me</h3>
            <p class="mb-8 leading-relaxed text-[#4a4a4a]">
                Hi! I’m a web developer who loves building things from the ground up. I specialize in backend
                development using Laravel, and I enjoy turning ideas into reliable, well-structured web applications.

                I’m passionate about clean code, solving real problems, and constantly learning new things. If you’re
                looking for someone who can help bring your project to life with solid, efficient solutions—let’s
                connect!
            </p>
            <div class="flex flex-wrap gap-y-6 gap-x-8">
                <div class="text-center">
                    <div class="text-2xl font-bold flex justify-center items-baseline gap-1">10<span
                            class="text-3xl font-extrabold">+</span></div>
                    <div class="text-base text-gray-600">Completed Projects</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold flex justify-center items-baseline gap-1">2<span
                            class="text-3xl font-extrabold">+</span></div>
                    <div class="text-base text-gray-600">Years of experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="max-w-7xl mx-auto px-6 mb-20 text-white" data-aos="fade-up">
        <h3 class="text-3xl font-bold text-[#192C50] text-center mb-8">Projects</h3>

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
    </section>
    <section class="flex flex-col items-center justify-center min-h-screen bg-[#e6f0f8] text-[#192C50] px-4">
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
    </section>

    <!-- SCRIPTS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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

            await typeText(helloEl, "Hello", 150);
            await typeText(introEl, "I'm Rizal Bagus Hidayat", 100);

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
                image: "https://storage.googleapis.com/a1aa/image/a6d1099f-75f3-4979-9efe-24bda220bfd2.jpg"
            },
            {
                title: "SSJ (Sapi Sehat Jember)",
                description: "Website monitoring kesehatan sapi untuk Dinas Peternakan Jember.",
                category: "web",
                image: "https://storage.googleapis.com/a1aa/image/44d52cfc-dbc8-463b-d279-d4ec05d15205.jpg"
            },
            {
                title: "Safe Vault",
                description: "Password manager berbasis web dengan autentikasi Google dan PIN.",
                category: "web",
                image: "https://storage.googleapis.com/a1aa/image/1fb6b2db-f6ba-4122-528f-4b1d038c3fc5.jpg"
            },
            {
                title: "J-Layer",
                description: "Website pengajuan pakan ayam terintegrasi untuk peternak.",
                category: "web",
                image: "https://storage.googleapis.com/a1aa/image/1a68d18c-1d8b-42c4-3241-b116ef660285.jpg"
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
                    `border border-gray-300 rounded-lg bg-white text-[#192C50] hover:shadow-lg transform fade-slide-enter`;
                card.innerHTML = `
                    <img src="${p.image}" alt="${p.title}" class="w-full h-44 object-cover rounded-t-lg" />
                    <div class="p-4">
                        <h5 class="font-semibold mb-1">${p.title}</h5>
                        <p class="text-sm text-gray-600 mb-3">${p.description}</p>
                        <a href="#" class="inline-block bg-[#192C50] text-white text-xs font-semibold px-3 py-1 rounded hover:bg-[#145374] transition">View Project</a>
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
</body>

</html>
