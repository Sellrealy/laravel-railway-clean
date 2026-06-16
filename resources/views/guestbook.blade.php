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

    .glass-card{
        backdrop-filter: blur(12px);
    }

    .input-soft{
        transition: .3s;
    }

    .input-soft:focus{
        outline:none;
        border-color:#CDB3E8;
        box-shadow:0 0 20px rgba(205,179,232,.3);
    }

    .btn-send{
        transition:.3s;
    }

    .btn-send:hover{
        transform:translateY(-3px);
    }

</style>

<div class="min-h-screen bg-gradient-to-br from-[#F6F0FF] via-[#FFF9FF] to-[#E8DDF8] flex justify-center items-center p-6 relative overflow-hidden">

```
<!-- floating decoration -->
<div class="absolute top-20 left-20 w-40 h-40 bg-purple-200/30 rounded-full blur-3xl floating"></div>

<div class="absolute bottom-20 right-20 w-52 h-52 bg-pink-200/20 rounded-full blur-3xl floating"></div>

<div class="w-full max-w-4xl bg-white/70 glass-card border border-purple-100 rounded-[35px] shadow-2xl p-8 relative z-10">

    <!-- title -->
    <div class="text-center mb-8">

        <h1 class="text-5xl font-serif text-[#705D8A]">
            🎵 Send A Song
        </h1>

        <p class="text-gray-500 italic mt-3">
            share a song and leave a little message ☁️
        </p>

    </div>

    <form action="{{ route('guestbook.store') }}" method="POST">

        @csrf

        <input
            type="text"
            name="nama"
            placeholder="Your name 🌷"
            class="w-full mb-4 p-4 rounded-2xl border border-purple-100 bg-white/70 input-soft">

        <input type="hidden" name="lagu" id="lagu">
        <input type="hidden" name="artist" id="artist">
        <input type="hidden" name="cover" id="cover">
        <input type="hidden" name="preview" id="preview">

        <input
            id="search"
            type="text"
            placeholder="Search your favorite song 🎧"
            oninput="searchSong()"
            class="w-full p-4 rounded-2xl border border-purple-100 bg-white/70 input-soft mb-2">

        <!-- Dropdown -->
        <div
            id="dropdown"
            class="bg-white/90 rounded-2xl shadow mb-4 overflow-hidden">
        </div>

        <!-- Song Result -->
        <div id="selectedSong" class="mb-6"></div>

        <textarea
            name="pesan"
            rows="5"
            placeholder="Write something sweet... 💌"
            class="w-full mb-6 p-4 rounded-2xl border border-purple-100 bg-white/70 input-soft"></textarea>

        <button
            type="submit"
            class="btn-send bg-[#8D7AA8] hover:bg-[#78649A] text-white px-8 py-3 rounded-2xl shadow-lg">

            Send Message 💜

        </button>

    </form>

</div>
```

</div>

<script>

async function searchSong(){

    let q = document.getElementById('search').value;

    if(q.length < 2){
        document.getElementById('dropdown').innerHTML='';
        return;
    }

    const res = await fetch(
        `https://itunes.apple.com/search?term=${encodeURIComponent(q)}&entity=song&limit=8`
    );

    const data = await res.json();

    let html='';

    data.results.forEach(song => {

        html += `
        <div
            class="p-4 cursor-pointer border-b hover:bg-purple-50 transition"
            onclick="selectSong(
                '${song.trackName}',
                '${song.artistName}',
                '${song.artworkUrl100}',
                '${song.previewUrl}'
            )">

            <div class="flex items-center gap-3">

                <img
                    src="${song.artworkUrl100}"
                    class="w-12 h-12 rounded-lg">

                <div>

                    <div class="font-medium text-[#705D8A]">
                        ${song.trackName}
                    </div>

                    <small class="text-gray-500">
                        ${song.artistName}
                    </small>

                </div>

            </div>

        </div>
        `;
    });

    document.getElementById('dropdown').innerHTML = html;
}

function selectSong(
    nama,
    artist,
    img,
    preview
){

    document.getElementById('lagu').value = nama;
    document.getElementById('artist').value = artist;
    document.getElementById('cover').value = img;
    document.getElementById('preview').value = preview;

    document.getElementById('dropdown').innerHTML='';

    document.getElementById('selectedSong').innerHTML = `

        <div class="bg-white/90 border border-purple-100 p-5 rounded-3xl shadow">

            <div class="flex flex-col md:flex-row gap-5 items-center">

                <img
                    src="${img}"
                    class="w-28 h-28 rounded-2xl shadow">

                <div class="flex-1">

                    <h3 class="text-2xl font-semibold text-[#705D8A]">
                        ${nama}
                    </h3>

                    <p class="text-gray-500 mb-4">
                        ${artist}
                    </p>

                    <audio controls class="w-full">
                        <source src="${preview}">
                    </audio>

                </div>

            </div>

        </div>

    `;
}

</script>

@endsection
