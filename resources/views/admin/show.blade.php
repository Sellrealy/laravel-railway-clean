@extends('layouts.app')

@section('content')

<style>

    .floating{
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float{
        0%{transform:translateY(0);}
        50%{transform:translateY(-12px);}
        100%{transform:translateY(0);}
    }

    .vinyl{
        animation: spin 10s linear infinite;
    }

    @keyframes spin{
        from{transform:rotate(0deg);}
        to{transform:rotate(360deg);}
    }

</style>

<div class="min-h-screen bg-gradient-to-br from-[#F6F0FF] via-[#FFF9FF] to-[#E8DDF8] flex items-center justify-center p-10 relative overflow-hidden">

```
<!-- Floating Decoration -->
<div class="absolute top-20 left-20 w-40 h-40 bg-purple-200/30 rounded-full blur-3xl floating"></div>

<div class="absolute bottom-20 right-20 w-52 h-52 bg-pink-200/20 rounded-full blur-3xl floating"></div>

<div class="max-w-xl w-full relative z-10">

    <div class="bg-white/70 backdrop-blur-xl border border-purple-100 rounded-[40px] shadow-2xl p-8">

        <!-- Album -->
        <div class="text-center">

            <div class="relative w-72 h-72 mx-auto">

                <!-- Vinyl -->
                <div class="absolute inset-0 rounded-full bg-gradient-to-br from-[#A98DDA] to-[#705D8A] vinyl opacity-90 shadow-2xl"></div>

                <img
                    src="{{ $song->cover }}"
                    class="absolute inset-8 rounded-full object-cover w-56 h-56 shadow-xl border-4 border-white">

            </div>

            <h1 class="mt-8 text-4xl font-serif text-[#705D8A]">

                {{ $song->lagu }}

            </h1>

            <p class="text-gray-500 mt-2 text-lg">

                🎤 {{ $song->artist }}

            </p>

        </div>

        <!-- Audio -->
        <div class="mt-8 bg-white/80 border border-purple-100 p-5 rounded-3xl shadow">

            <h2 class="font-semibold text-[#705D8A] mb-3">

                🎵 Song Preview

            </h2>

            <audio controls class="w-full">

                <source src="{{ $song->preview }}">

            </audio>

        </div>

        <!-- Message -->
        <div class="mt-6 bg-white/80 border border-purple-100 p-5 rounded-3xl shadow">

            <h2 class="font-semibold text-[#705D8A]">

                💌 Message

            </h2>

            <p class="mt-3 text-gray-600 leading-7">

                {{ $song->pesan }}

            </p>

        </div>

        <!-- Sender -->
        <div class="mt-6 bg-white/80 border border-purple-100 p-5 rounded-3xl shadow">

            <h2 class="font-semibold text-[#705D8A]">

                👤 Sender

            </h2>

            <p class="mt-3 text-gray-600">

                {{ $song->nama }}

            </p>

        </div>

        <!-- Back Button -->
        <div class="mt-8 text-center">

            <a
                href="/admin/dashboard"
                class="inline-block bg-[#8D7AA8] hover:bg-[#78649A] text-white px-8 py-3 rounded-2xl shadow-lg transition">

                ← Back Dashboard 💜

            </a>

        </div>

    </div>

</div>
```

</div>

@endsection
