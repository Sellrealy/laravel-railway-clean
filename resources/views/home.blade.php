@extends('layouts.app')

@section('content')

<style>

    body{
        font-family: 'Poppins', sans-serif;
    }

    .floating{
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float{
        0%{
            transform: translateY(0);
        }
        50%{
            transform: translateY(-12px);
        }
        100%{
            transform: translateY(0);
        }
    }

    .sparkle{
        animation: sparkle 2s ease-in-out infinite;
    }

    @keyframes sparkle{
        0%,100%{
            transform: scale(1);
            opacity:.7;
        }

        50%{
            transform: scale(1.2);
            opacity:1;
        }
    }

    .card-hover{
        transition: .4s;
    }

    .card-hover:hover{
        transform: translateY(-8px);
    }

    .btn-soft{
        transition: .3s;
    }

    .btn-soft:hover{
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(0,0,0,.08);
    }

    .profile-img{
        transition: .4s;
    }

    .profile-img:hover{
        transform: scale(1.08);
    }

    .cat-card{
        transition: .4s;
    }

    .cat-card:hover{
        transform: scale(1.03);
    }

</style>

<div class="min-h-screen bg-gradient-to-br from-[#F6F0FF] via-[#FFF9FF] to-[#E8DDF8] flex justify-center items-center p-6 relative overflow-hidden">

    <!-- floating circles -->
    <div class="absolute top-20 left-20 w-32 h-32 bg-purple-200/30 rounded-full blur-3xl floating"></div>

    <div class="absolute bottom-20 right-20 w-40 h-40 bg-pink-200/20 rounded-full blur-3xl floating"></div>

    <!-- Main Card -->
    <div class="max-w-5xl w-full bg-white/70 backdrop-blur-xl border border-purple-100 rounded-[40px] shadow-2xl overflow-hidden card-hover">

        <!-- HEADER IMAGE -->
      <!-- HEADER IMAGE -->
<div
    class="relative w-full overflow-hidden"
    style="
        aspect-ratio:16/9;
        background-image:url('{{ asset('images/BEE.gif') }}');
        background-repeat:no-repeat;
        background-position:center;
        background-size:auto 100%;
    ">

    <div class="absolute inset-0 bg-purple-200/10"></div>

</div>

        <!-- PROFILE -->
      <div class="flex justify-center -mt-12 relative z-10">

            <img
                src="{{ asset('images/profile.jpg') }}"
                class="w-40 h-40 rounded-full border-8 border-white shadow-xl profile-img object-cover"
                style="object-position:center 20%;">

        </div>

        <!-- Sparkles -->
        <div class="text-center mt-3">

            <span class="sparkle text-xl">✨</span>
            <span class="sparkle text-xl">@Offllyy_</span>
            <span class="sparkle text-xl">🐈‍</span>

        </div>

        <!-- TITLE -->
        <div class="text-center mt-4">

            <h1 class="text-5xl font-serif text-[#705D8A]">
                Sely Permata Sari
            </h1>

            <p class="text-gray-500 mt-3 italic">
                   writing my story, one chapter at a time 📖

            </p>

        </div>

        <!-- MENU -->
        <div class="flex flex-wrap justify-center gap-4 mt-8 px-5">

            <a href="/"
                class="btn-soft bg-[#EADFF7] text-[#705D8A] px-5 py-3 rounded-2xl shadow-sm">
                🏡 Home
            </a>

            <a href="/projects"
                class="btn-soft bg-[#DCC8F0] text-[#705D8A] px-5 py-3 rounded-2xl shadow-sm">
                💻 Projects
            </a>

            <a href="/about"
                class="btn-soft bg-[#DCC8F0] text-[#705D8A] px-5 py-3 rounded-2xl shadow-sm">
                 👩‍🎓 About
            </a>

            <a href="/guestbook"
                class="btn-soft bg-[#F3E9FF] text-[#705D8A] px-5 py-3 rounded-2xl shadow-sm">
                🎵 Send A Song
            </a>

            <a href="/admin/dashboard"
                class="btn-soft bg-[#8D7AA8] text-white px-5 py-3 rounded-2xl shadow-sm">
                ⚙️ Admin
            </a>

        </div>

        <!-- CONTENT -->
        <div class="grid md:grid-cols-2 gap-10 p-10">

            <!-- LEFT -->
            <div class="flex flex-col justify-center">

                <h2 class="text-4xl font-serif text-[#705D8A] mb-5">
                     My Life Journey 🌷
                </h2>

                <p class="text-gray-600 leading-8">
                     A glimpse into my life, filled with memories,
                    friendships, achievements, and simple moments.
                    This garden is where I keep the stories I never
                    want to forget.
                </p>

                <!-- BADGES -->
                <div class="mt-6 flex flex-wrap gap-3">

                   <div class="bg-[#F3E9FF] px-4 py-3 rounded-2xl shadow-sm">
                        🌱 Growth
                    </div>

                    <div class="bg-[#F3E9FF] px-4 py-3 rounded-2xl shadow-sm">
                        🎓 School Life

                    </div>

                    <div class="bg-[#F3E9FF] px-4 py-3 rounded-2xl shadow-sm">
                        ✨ Journey
                    </div>

                </div>

                <!-- mini quote -->
                <div class="mt-8 bg-white rounded-2xl p-5 shadow-sm border border-purple-100">

                    <p class="italic text-gray-500">
                        "Every memory is a page, every experience is a lesson, and every step is part of my journey."

                    </p>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="relative">

             <img
                 src="{{ asset('images/class pplg1.jpg') }}"
                class="rounded-3xl shadow-xl transition-all duration-700 cat-card grayscale hover:grayscale-0 hover:scale-105">
                            <div class="absolute bottom-4 left-4 bg-white/80 backdrop-blur-md px-4 py-2 rounded-xl text-[#705D8A] shadow">

                    🕊 XII PPLG 1

                </div>

            </div>

        </div>

        <!-- FOOTER -->
        <div class="text-center py-6 border-t border-purple-100 bg-white/40">

            <p class="text-gray-500 text-sm">
                🥨 made with • Offllyy_ • 2026
            </p>

        </div>

    </div>

</div>

@endsection