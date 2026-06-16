

<?php $__env->startSection('content'); ?>

<style>

    .floating{
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float{
        0%{transform:translateY(0);}
        50%{transform:translateY(-12px);}
        100%{transform:translateY(0);}
    }

    .profile-card{
        transition:.4s;
    }

    .profile-card:hover{
        transform:scale(1.03);
    }

    .interest{
        transition:.3s;
    }

    .interest:hover{
        transform:translateY(-3px);
    }

    .about-img{
    filter: grayscale(100%) brightness(85%);
    transition: all .8s ease;
}

.about-img:hover{
    filter: grayscale(0%) brightness(100%);
    transform: scale(1.03);
}

</style>

<div class="min-h-screen bg-gradient-to-br from-[#F6F0FF] via-[#FFF9FF] to-[#E8DDF8] flex justify-center items-center p-8 relative overflow-hidden">

```
<!-- floating decoration -->
<div class="absolute top-20 left-20 w-40 h-40 bg-purple-200/30 rounded-full blur-3xl floating"></div>

<div class="absolute bottom-20 right-20 w-52 h-52 bg-pink-200/20 rounded-full blur-3xl floating"></div>

<div class="max-w-5xl w-full bg-white/70 backdrop-blur-xl border border-purple-100 rounded-[40px] shadow-2xl p-10 relative z-10">

    <!-- Title -->
    <div class="text-center mb-10">

        <h1 class="text-5xl md:text-6xl font-serif text-[#705D8A]">
            🌷 About Me
        </h1>

        <p class="text-gray-500 italic mt-3">
            a little introduction about myself ☁️
        </p>

    </div>

    <div class="grid md:grid-cols-2 gap-12 items-center">

        <!-- Image -->
        <div>

            <div class="bg-white p-3 rounded-[30px] shadow-xl profile-card">

                <img
                     src="<?php echo e(asset('images/lily.jpg')); ?>"
                      class="rounded-3xl shadow-xl about-img">

            </div>

        </div>

        <!-- Content -->
        <div>

            <h2 class="text-3xl font-serif text-[#705D8A] mb-5">
                Hi, I'm Sely 💬

            </h2>

            <p class="leading-8 text-gray-600">
                Aku seorang siswi PPLG di SMKN 2 Sumedang yang sedang belajar dan berkembang di bidang web development dan UI/UX design.

                Saat ini aku banyak menghabiskan waktu untuk membuat project menggunakan Laravel, JavaScript, dan Flutter, sambil terus belajar hal-hal baru seputar teknologi dan pengembangan aplikasi.

                Aku juga tertarik dengan desain yang sederhana, clean, dan nyaman dilihat. Menurutku, sebuah project bukan cuma soal fitur, tapi juga bagaimana tampilannya bisa memberikan pengalaman yang baik untuk pengguna.

                Website ini berisi beberapa project, pengalaman belajar, dan hal-hal yang menjadi bagian dari perjalananku sampai saat ini. ✨

            </p>

            <!-- Interests -->
            <div class="mt-8">

                <h3 class="font-semibold text-xl text-[#705D8A] mb-4">
                    Things I Love 💜
                </h3>

                <div class="flex flex-wrap gap-3">

                    <div class="interest bg-[#F3E9FF] px-4 py-3 rounded-2xl shadow-sm">
                        💻 Coding
                    </div>

                    <div class="interest bg-[#F3E9FF] px-4 py-3 rounded-2xl shadow-sm">
                        🎨 Design
                    </div>

                    <div class="interest bg-[#F3E9FF] px-4 py-3 rounded-2xl shadow-sm">
                        🎵 Music
                    </div>

                    <div class="interest bg-[#F3E9FF] px-4 py-3 rounded-2xl shadow-sm">
                      ☕ Late Night
                    </div>

                    <div class="interest bg-[#F3E9FF] px-4 py-3 rounded-2xl shadow-sm">
                        ✨ Healing
                    </div>

                    <div class="interest bg-[#F3E9FF] px-4 py-3 rounded-2xl shadow-sm">
                       📱 Flutter
                    </div>

                </div>

            </div>

            <!-- Quote -->
            <div class="mt-8 bg-white/80 border border-purple-100 rounded-2xl p-5 shadow">

                <p class="italic text-gray-500">
                   "Still learning, still growing, still debugging." 💜
                </p>

            </div>

        </div>

    </div>

</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\WINDOWS 11\lily-web\resources\views/about.blade.php ENDPATH**/ ?>