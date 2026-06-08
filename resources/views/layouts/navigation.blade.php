<nav class="border-b border-slate-200 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- LEFT SIDE -->
            <div class="flex items-center gap-8">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-blue-700 text-sm font-black text-white">
                        RF
                    </div>

                    <div>
                        <p class="text-lg font-black leading-none text-blue-950">
                            ReliefFlow
                        </p>
                        <p class="mt-1 hidden text-xs font-semibold text-slate-500 sm:block">
                            Aid Distribution System
                        </p>
                    </div>
                </a>

                <div class="hidden items-center gap-6 md:flex">
                    <a
                        href="{{ route('dashboard') }}"
                        class="text-sm font-bold {{ request()->routeIs('dashboard') ? 'text-blue-700' : 'text-slate-600 hover:text-blue-700' }}"
                    >
                        Dashboard
                    </a>
                </div>
            </div>

            <!-- RIGHT SIDE DESKTOP -->
            <div class="hidden items-center gap-4 sm:flex">
                <div class="text-right">
                    <p class="text-sm font-black text-blue-950">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="text-xs font-semibold text-slate-500">
                        {{ Auth::user()->email }}
                    </p>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-bold text-slate-700 transition hover:bg-slate-50 hover:text-red-600"
                    >
                        Keluar
                    </button>
                </form>
            </div>

            <!-- RIGHT SIDE MOBILE -->
            <div class="flex sm:hidden">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-bold text-slate-700"
                    >
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>