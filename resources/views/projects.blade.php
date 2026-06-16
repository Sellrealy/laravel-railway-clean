@extends('layouts.app')

@section('content')

<style>

    .project-card{
        transition: all .35s ease;
    }

    .project-card:hover{
        transform: translateY(-10px);
    }

    .floating{
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float{
        0%{transform:translateY(0);}
        50%{transform:translateY(-12px);}
        100%{transform:translateY(0);}
    }

</style>

<div class="min-h-screen bg-gradient-to-br from-[#F6F0FF] via-[#FFF9FF] to-[#E8DDF8] p-10 relative overflow-hidden">

<!-- floating decoration -->
<div class="absolute top-20 left-20 w-40 h-40 bg-purple-200/30 rounded-full blur-3xl floating"></div>
<div class="absolute bottom-20 right-20 w-52 h-52 bg-pink-200/20 rounded-full blur-3xl floating"></div>

<div class="max-w-6xl mx-auto relative z-10">

    <!-- title -->
    <div class="text-center mb-14">

        <h1 class="text-5xl md:text-6xl font-serif text-[#705D8A]">
            🌷 My Projects
        </h1>

        <p class="mt-4 text-gray-500 italic">
            little things i've created along the way ☁️
        </p>

    </div>

    <!-- cards -->
    <div class="grid md:grid-cols-3 gap-8">

        <!-- PROJECT 1 -->
<div class="project-card bg-white/70 backdrop-blur-lg border border-purple-100 p-5 rounded-[30px] shadow-xl">

    <img src="{{ asset('project/WEBSITE SEDERHANA PORTOFOLIO.jpg') }}"
         class="w-full h-48 object-cover rounded-2xl">

    <div class="flex justify-between items-center mt-4">

        <h3 class="text-2xl font-semibold text-[#705D8A]">
            🌷 Website Biodata
        </h3>

    </div>

    <p class="text-gray-600 mt-3 leading-relaxed">
        Website sederhana yang dibuat untuk menampilkan profil pribadi,
        skill, dan pengalaman dalam bentuk portfolio online.
    </p>

    <div class="mt-4 flex flex-wrap gap-2">
        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm">HTML</span>
        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm">CSS</span>
        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm">JavaScript</span>
        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm">VS Code</span>
    </div>

</div>
      <div class="project-card bg-white/70 backdrop-blur-lg border border-purple-100 p-5 rounded-[30px] shadow-xl">

    <img src="{{ asset('project/WEBSITE PORTOFOLIO .jpg') }}"
         class="w-full h-48 object-cover rounded-2xl">

    <h3 class="text-2xl font-semibold text-[#705D8A] mt-4">
        🎀 Website Portfolio
    </h3>

    <p class="text-gray-600 mt-3 leading-relaxed">
        Website portfolio modern untuk memperkenalkan diri,
        menampilkan karya, dan media sosial.
    </p>

    <div class="mt-4 flex flex-wrap gap-2">
        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm">HTML</span>
        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm">CSS</span>
        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm">Tailwind</span>
        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm">JavaScript</span>
    </div>

</div>

       <div class="project-card bg-white/70 backdrop-blur-lg border border-purple-100 p-5 rounded-[30px] shadow-xl">

    <img src="{{ asset('project/PROJECT SENDIRI UANGKAS.jpg') }}"
         class="w-full h-48 object-cover rounded-2xl">

    <h3 class="text-2xl font-semibold text-[#705D8A] mt-4">
        💰 Sistem Uang Kas
    </h3>

    <p class="text-gray-600 mt-3 leading-relaxed">
        Sistem pencatatan pembayaran kas siswa dengan fitur
        input data, total kas, dan laporan pembayaran.
    </p>

    <div class="mt-4 flex flex-wrap gap-2">
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">PHP</span>
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">MySQL</span>
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">JavaScript</span>
    </div>

</div>
<div class="project-card bg-white/70 backdrop-blur-lg border border-purple-100 p-5 rounded-[30px] shadow-xl">

    <img src="{{ asset('project/NILAI SISWA APK.png') }}"
         class="w-full h-48 object-cover rounded-2xl">

    <h3 class="text-2xl font-semibold text-[#705D8A] mt-4">
        📊 Aplikasi Nilai Siswa
    </h3>

    <p class="text-gray-600 mt-3 leading-relaxed">
        Aplikasi mobile untuk mengelola data siswa dan
        menampilkan hasil nilai secara digital.
    </p>

    <div class="mt-4 flex flex-wrap gap-2">
        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">Android Studio</span>
    </div>

</div>
<div class="project-card bg-white/70 backdrop-blur-lg border border-purple-100 p-5 rounded-[30px] shadow-xl">

    <img src="{{ asset('project/JAVA DATA OBAT.jpg') }}"
         class="w-full h-48 object-cover rounded-2xl">

    <h3 class="text-2xl font-semibold text-[#705D8A] mt-4">
        💊 Data Obat
    </h3>

    <p class="text-gray-600 mt-3 leading-relaxed">
        Aplikasi desktop untuk mengelola data obat,
        kategori obat, dan laporan stok.
    </p>

    <div class="mt-4 flex flex-wrap gap-2">
        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">Java</span>
        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">NetBeans</span>
        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">MySQL</span>
    </div>

</div>

<!-- PROJECT 9 -->
<div class="project-card bg-white/70 backdrop-blur-lg border border-purple-100 p-5 rounded-[30px] shadow-xl">

    <img src="{{ asset('project/CRUD PHP.jpg') }}"
         class="w-full h-48 object-cover rounded-2xl">

    <h3 class="text-2xl font-semibold text-[#705D8A] mt-4">
        🖥️ Dashboard CRUD Data Siswa
    </h3>

    <p class="text-gray-600 mt-3 leading-relaxed">
        Dashboard sekolah untuk mengelola data siswa dan guru
        dengan fitur tambah, edit, hapus, dan tampilan data secara realtime.
    </p>

    <div class="mt-4 flex flex-wrap gap-2">
        <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm">PHP</span>
        <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm">MySQL</span>
        <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm">CRUD</span>
        <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm">Bootstrap</span>
    </div>

</div>

<div class="project-card bg-white/70 backdrop-blur-lg border border-purple-100 p-5 rounded-[30px] shadow-xl">

    <img src="{{ asset('project/BANK FLUTTER .png') }}"
         class="w-full h-48 object-cover rounded-2xl">

    <h3 class="text-2xl font-semibold text-[#705D8A] mt-4">
        🏦 Sistem Data Bank
    </h3>

    <p class="text-gray-600 mt-3 leading-relaxed">
        Aplikasi untuk menyimpan data nasabah,
        nomor rekening, dan alamat pelanggan.
    </p>

    <div class="mt-4 flex flex-wrap gap-2">
        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">Java</span>
        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">NetBeans</span>
        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">MySQL</span>
    </div>

</div>
<div class="project-card bg-white/70 backdrop-blur-lg border border-purple-100 p-5 rounded-[30px] shadow-xl">

    <img src="{{ asset('project/DATA SISWA & GURU CRUD LARAVEL.jpg') }}"
         class="w-full h-48 object-cover rounded-2xl">

    <h3 class="text-2xl font-semibold text-[#705D8A] mt-4">
        🎓 Data Siswa & Guru
    </h3>

    <p class="text-gray-600 mt-3 leading-relaxed">
        Sistem informasi sekolah untuk mengelola
        data siswa dan guru dengan fitur CRUD.
    </p>

    <div class="mt-4 flex flex-wrap gap-2">
        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm">Laravel</span>
        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm">PHP</span>
        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm">MySQL</span>
        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm">Tailwind</span>
    </div>

</div>
<!-- PROJECT 10 -->
<div class="project-card bg-white/70 backdrop-blur-lg border border-purple-100 p-5 rounded-[30px] shadow-xl">

    <img src="{{ asset('project/GAMES.jpg') }}"
         class="w-full h-48 object-cover rounded-2xl">

    <h3 class="text-2xl font-semibold text-[#705D8A] mt-4">
        🎮 Lucid Dream
    </h3>

    <p class="text-gray-600 mt-3 leading-relaxed">
        Game platformer sederhana di mana pemain mengendalikan karakter,
        melewati rintangan, mengumpulkan item, dan mencapai akhir level.
    </p>

    <div class="mt-4 flex flex-wrap gap-2">
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Game Development</span>
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Pixel Art</span>
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">UI Design</span>
        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Creative Project</span>
    </div>

</div>

</div>

    </div>

    <!-- footer quote -->
    <div class="mt-16 text-center">

        <div class="inline-block bg-white/70 backdrop-blur-lg border border-purple-100 px-8 py-4 rounded-2xl shadow">

            <p class="italic text-gray-500">
                "Every project starts as a tiny idea." ✨
            </p>

        </div>

    </div>

</div>

</div>

@endsection
