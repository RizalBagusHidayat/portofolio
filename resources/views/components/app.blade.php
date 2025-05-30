<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Rizal Bagus Hidayat Portofolio')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @stack('styles') {{-- tambahkan custom CSS di sini --}}
</head>

<body class="text-[#192C50] font-inter min-h-screen text-base">
    <!-- Navbar -->
    <x-landing-page.navbar />
    <!-- Konten Utama -->
    {{ $slot }}

    <!-- Footer -->
    <x-landing-page.footer />

    <!-- Script JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @stack('scripts')
</body>

</html>
