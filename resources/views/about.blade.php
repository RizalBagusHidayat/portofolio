<x-app>
    <div class="mt-12"></div>

    <x-landing-page.hero />
    <x-landing-page.about />

    @push('scripts')

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
    @endpush
</x-app>
