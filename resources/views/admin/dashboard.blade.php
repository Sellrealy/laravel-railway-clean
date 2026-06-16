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

    .dashboard-card{
        transition:.3s;
    }

    .dashboard-card:hover{
        transform:translateY(-5px);
    }

</style>

<div class="min-h-screen bg-gradient-to-br from-[#F6F0FF] via-[#FFF9FF] to-[#E8DDF8] p-10 relative overflow-hidden">

```
<!-- Floating Decoration -->
<div class="absolute top-20 left-20 w-40 h-40 bg-purple-200/30 rounded-full blur-3xl floating"></div>

<div class="absolute bottom-20 right-20 w-52 h-52 bg-pink-200/20 rounded-full blur-3xl floating"></div>

<div class="max-w-7xl mx-auto relative z-10">

    <div class="bg-white/70 backdrop-blur-xl border border-purple-100 rounded-[35px] shadow-2xl p-8">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-8">

            <div>

                <h1 class="text-4xl md:text-5xl font-serif text-[#705D8A]">
                    🌙 Admin Dashboard
                </h1>

                <p class="text-gray-500 italic mt-2">
                    manage messages from your little lily garden 💜
                </p>

            </div>

            <a href="/admin/logout"
               class="bg-red-400 hover:bg-red-500 text-white px-5 py-3 rounded-2xl transition shadow-lg">

                Logout 🚪

            </a>

        </div>

        @if(session('success'))

            <div class="bg-green-50 border border-green-200 text-green-600 p-4 rounded-2xl mb-6">
                {{ session('success') }}
            </div>

        @endif

        <!-- Table -->
        <div class="overflow-x-auto rounded-3xl border border-purple-100">

            <table class="w-full">

                <thead>

                    <tr class="bg-[#F3E9FF] text-[#705D8A]">

                        <th class="text-left p-4">🌷 Nama</th>
                        <th class="text-left p-4">🎵 Lagu</th>
                        <th class="text-left p-4">🎤 Artist</th>
                        <th class="text-left p-4">▶ Preview</th>
                        <th class="text-left p-4">💌 Pesan</th>
                        <th class="text-left p-4">📅 Tanggal</th>
                        <th class="text-left p-4">⚙ Action</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($guestbooks as $item)

                    <tr class="border-b hover:bg-purple-50 transition">

                        <td class="p-4">
                            {{ $item->nama }}
                        </td>

                        <td class="p-4">
                            {{ $item->lagu }}
                        </td>

                        <td class="p-4">
                            {{ $item->artist }}
                        </td>

                        <td class="p-4">

                            @if($item->preview)

                                <audio controls class="w-52">
                                    <source src="{{ $item->preview }}">
                                </audio>

                            @else

                                -

                            @endif

                        </td>

                        <td class="p-4 max-w-xs">
                            {{ $item->pesan }}
                        </td>

                        <td class="p-4 whitespace-nowrap">
                            {{ $item->created_at->format('d M Y H:i') }}
                        </td>

                        <td class="p-4">

                            <div class="flex flex-wrap gap-2">

                                <a href="{{ route('admin.song.show', $item->id) }}"
                                   class="bg-[#BFA6E8] hover:bg-[#A98DDA] text-white px-4 py-2 rounded-xl shadow">

                                    👁 View

                                </a>

                                <form action="{{ route('guestbook.destroy', $item->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Delete this message?')"
                                        class="bg-red-400 hover:bg-red-500 text-white px-4 py-2 rounded-xl shadow">

                                        🗑 Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7" class="text-center p-12 text-gray-500">

                            <div class="text-5xl mb-3">
                                🎵
                            </div>

                            Belum ada pesan masuk

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>
```

</div>

@endsection
