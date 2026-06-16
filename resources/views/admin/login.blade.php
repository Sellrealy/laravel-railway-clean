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

    .input-soft{
        transition:.3s;
    }

    .input-soft:focus{
        outline:none;
        border-color:#CDB3E8;
        box-shadow:0 0 20px rgba(205,179,232,.3);
    }

    .login-card{
        transition:.4s;
    }

    .login-card:hover{
        transform:translateY(-5px);
    }

</style>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#F6F0FF] via-[#FFF9FF] to-[#E8DDF8] relative overflow-hidden p-6">

```
<!-- floating decoration -->
<div class="absolute top-20 left-20 w-40 h-40 bg-purple-200/30 rounded-full blur-3xl floating"></div>

<div class="absolute bottom-20 right-20 w-52 h-52 bg-pink-200/20 rounded-full blur-3xl floating"></div>

<div class="w-full max-w-md bg-white/70 backdrop-blur-xl border border-purple-100 p-8 rounded-[35px] shadow-2xl login-card relative z-10">

    <!-- Header -->
    <div class="text-center mb-8">

        <div class="text-5xl mb-3">
            🌙
        </div>

        <h1 class="text-4xl font-serif text-[#705D8A]">
            Admin Login
        </h1>

        <p class="text-gray-500 mt-3 italic">
            welcome back to little lily garden ☁️
        </p>

    </div>

    @if(session('error'))
        <div class="bg-red-50 border border-red-200 text-red-500 p-4 rounded-2xl mb-5">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <div class="mb-4">

            <input
                type="text"
                name="username"
                placeholder="Username 🌷"
                required
                class="w-full p-4 rounded-2xl border border-purple-100 bg-white/80 input-soft">

        </div>

        <div class="mb-5">

            <input
                type="password"
                name="password"
                placeholder="Password 🔒"
                required
                class="w-full p-4 rounded-2xl border border-purple-100 bg-white/80 input-soft">

        </div>

        <button
            type="submit"
            class="w-full bg-[#8D7AA8] hover:bg-[#78649A] text-white p-4 rounded-2xl transition shadow-lg">

            Login 💜

        </button>

    </form>

    <!-- Footer -->
    <div class="text-center mt-8">

        <p class="text-gray-400 text-sm italic">
            ✨ Lily Garden Admin Panel ✨
        </p>

    </div>

</div>
```

</div>

@endsection
