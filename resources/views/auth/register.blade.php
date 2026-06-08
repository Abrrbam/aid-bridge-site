<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | ReliefFlow</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 font-sans text-slate-900 antialiased">
    <main class="min-h-screen">
        <div class="grid min-h-screen grid-cols-1 lg:grid-cols-2">
            <section class="relative hidden overflow-hidden bg-blue-950 px-12 py-10 text-white lg:flex lg:flex-col lg:justify-between">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,#2563eb_0,transparent_32%),radial-gradient(circle_at_bottom_right,#0f766e_0,transparent_28%)] opacity-80"></div>

                <div class="relative z-10">
                    <a href="{{ route('landing') }}" class="inline-flex items-center gap-3">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white text-sm font-black text-blue-700 shadow-lg">
                            RF
                        </div>

                        <div>
                            <p class="text-2xl font-black tracking-tight">ReliefFlow</p>
                            <p class="text-sm font-semibold text-blue-100">Aid Distribution System</p>
                        </div>
                    </a>

                    <div class="mt-20 max-w-xl">
                        <p class="mb-5 inline-flex rounded-full bg-white/10 px-4 py-2 text-sm font-bold text-blue-100 ring-1 ring-white/10">
                            Buat Akun ReliefFlow
                        </p>

                        <h1 class="text-5xl font-black leading-tight tracking-tight">
                            Mulai kelola bantuan darurat dengan alur yang lebih rapi.
                        </h1>

                        <p class="mt-6 text-lg font-medium leading-8 text-blue-100">
                            Akun pengguna digunakan untuk mengakses dashboard sesuai peran, mulai dari koordinator,
                            petugas gudang, sampai petugas posko.
                        </p>
                    </div>
                </div>

                <div class="relative z-10 rounded-3xl bg-white/10 p-6 ring-1 ring-white/10">
                    <p class="text-sm font-black uppercase tracking-[0.2em] text-blue-100">
                        ReliefFlow
                    </p>

                    <div class="mt-5 grid grid-cols-3 gap-4">
                        <div>
                            <p class="text-2xl font-black">Prioritas</p>
                            <p class="mt-1 text-sm font-semibold text-blue-100">Skor bantuan</p>
                        </div>

                        <div>
                            <p class="text-2xl font-black">Stok</p>
                            <p class="mt-1 text-sm font-semibold text-blue-100">Gudang bantuan</p>
                        </div>

                        <div>
                            <p class="text-2xl font-black">Tracking</p>
                            <p class="mt-1 text-sm font-semibold text-blue-100">Status distribusi</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="flex items-center justify-center px-6 py-10 sm:px-8 lg:px-12">
                <div class="w-full max-w-md">
                    <div class="mb-10 lg:hidden">
                        <a href="{{ route('landing') }}" class="inline-flex items-center gap-3">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-700 text-sm font-black text-white shadow-sm">
                                RF
                            </div>

                            <div>
                                <p class="text-2xl font-black tracking-tight text-blue-950">ReliefFlow</p>
                                <p class="text-sm font-semibold text-slate-500">Aid Distribution System</p>
                            </div>
                        </a>
                    </div>

                    <div>
                        <p class="text-sm font-black uppercase tracking-[0.22em] text-blue-700">
                            Registrasi
                        </p>

                        <h2 class="mt-3 text-4xl font-black tracking-tight text-blue-950">
                            Buat akun baru
                        </h2>

                        <p class="mt-3 text-base font-medium leading-7 text-slate-500">
                            Daftarkan akun untuk mulai menggunakan sistem ReliefFlow.
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="mt-6 rounded-2xl border border-red-100 bg-red-50 px-5 py-4">
                            <p class="text-sm font-black text-red-700">Ada data yang perlu diperbaiki:</p>

                            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm font-medium text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-5">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-black text-blue-950">
                                Nama Lengkap
                            </label>

                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                placeholder="Masukkan nama lengkap"
                                class="mt-2 w-full rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm font-semibold text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                            >
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-black text-blue-950">
                                Email
                            </label>

                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="username"
                                placeholder="contoh@email.com"
                                class="mt-2 w-full rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm font-semibold text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                            >
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-black text-blue-950">
                                Password
                            </label>

                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Minimal 8 karakter"
                                class="mt-2 w-full rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm font-semibold text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                            >
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-black text-blue-950">
                                Konfirmasi Password
                            </label>

                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Ulangi password"
                                class="mt-2 w-full rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm font-semibold text-slate-700 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                            >
                        </div>

                        <button
                            type="submit"
                            class="w-full rounded-2xl bg-blue-700 px-6 py-4 text-base font-black text-white shadow-lg shadow-blue-700/20 transition hover:-translate-y-0.5 hover:bg-blue-800"
                        >
                            Daftar
                        </button>
                    </form>

                    <p class="mt-8 text-center text-sm font-semibold text-slate-500">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="font-black text-blue-700 transition hover:text-blue-900">
                            Masuk sekarang
                        </a>
                    </p>

                    <p class="mt-8 text-center text-xs font-semibold text-slate-400">
                        © 2026 ReliefFlow. Sistem distribusi bantuan darurat berbasis prioritas.
                    </p>
                </div>
            </section>
        </div>
    </main>
</body>
</html>