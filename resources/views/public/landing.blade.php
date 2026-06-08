<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReliefFlow | Sistem Distribusi Bantuan Darurat</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        crossorigin=""
    />
</head>

<body class="bg-white font-sans text-slate-900 antialiased">
    <main class="min-h-screen overflow-x-hidden">

        <!-- NAVBAR -->
        <header class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
                <a href="/" class="flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-blue-700 text-sm font-black text-white shadow-sm">
                        RF
                    </div>

                    <div>
                        <p class="text-xl font-black tracking-tight text-blue-950">ReliefFlow</p>
                        <p class="hidden text-xs font-semibold text-slate-500 sm:block">Aid Distribution System</p>
                    </div>
                </a>

                <nav class="hidden items-center gap-8 text-sm font-bold text-slate-600 lg:flex">
                    <a href="/" class="text-blue-700">Beranda</a>
                    <a href="#fitur" class="transition hover:text-blue-700">Fitur</a>
                    <a href="#cara-kerja" class="transition hover:text-blue-700">Cara Kerja</a>
                    <a href="#transparansi" class="transition hover:text-blue-700">Transparansi</a>
                    <a href="#lacak" class="transition hover:text-blue-700">Lacak Bantuan</a>
                </nav>

                <div class="flex items-center gap-3">
                    <a href="#transparansi" class="hidden rounded-xl border border-slate-200 px-5 py-3 text-sm font-bold text-slate-700 transition hover:bg-slate-50 md:inline-flex">
                        Lihat Dashboard
                    </a>

                    <a href="/login" class="rounded-xl bg-blue-950 px-6 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-blue-900">
                        Masuk
                    </a>
                </div>
            </div>
        </header>

        <!-- HERO -->
        <section class="relative overflow-hidden bg-slate-50">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,#dbeafe_0,transparent_32%),radial-gradient(circle_at_top_right,#ccfbf1_0,transparent_28%)]"></div>

            <div class="relative mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-6 py-16 lg:grid-cols-2 lg:px-8 lg:py-20">
                <div>
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-white px-4 py-2 shadow-sm">
                        <span class="h-2.5 w-2.5 rounded-full bg-green-500"></span>
                        <span class="text-sm font-bold text-blue-800">Sistem distribusi bantuan darurat berbasis data</span>
                    </div>

                    <h1 class="max-w-3xl text-5xl font-black leading-tight tracking-tight text-blue-950 md:text-6xl lg:text-7xl">
                        Prioritaskan bantuan yang paling mendesak.
                    </h1>

                    <p class="mt-6 max-w-2xl text-lg font-medium leading-8 text-slate-600">
                        ReliefFlow membantu koordinator mengelola posko, stok, permintaan bantuan,
                        prioritas distribusi, pengiriman, dan transparansi publik dalam satu aplikasi web.
                    </p>

                    <div class="mt-9 flex flex-col gap-4 sm:flex-row">
                        <a href="#transparansi" class="inline-flex items-center justify-center rounded-2xl bg-blue-700 px-8 py-4 text-base font-black text-white shadow-lg shadow-blue-700/20 transition hover:-translate-y-0.5 hover:bg-blue-800">
                            Lihat Transparansi
                        </a>

                        <a href="#lacak" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-8 py-4 text-base font-black text-blue-950 shadow-sm transition hover:-translate-y-0.5 hover:bg-slate-50">
                            Lacak Bantuan
                        </a>
                    </div>

                    <div class="mt-10 grid max-w-xl grid-cols-3 gap-5">
                        <div>
                            <p class="text-3xl font-black text-blue-950">532</p>
                            <p class="mt-1 text-sm font-semibold leading-5 text-slate-500">Posko terbantu</p>
                        </div>

                        <div>
                            <p class="text-3xl font-black text-blue-950">3.247</p>
                            <p class="mt-1 text-sm font-semibold leading-5 text-slate-500">Pengiriman selesai</p>
                        </div>

                        <div>
                            <p class="text-3xl font-black text-blue-950">1.089</p>
                            <p class="mt-1 text-sm font-semibold leading-5 text-slate-500">Penerimaan diverifikasi</p>
                        </div>
                    </div>
                </div>

                <!-- DASHBOARD PREVIEW -->
                <div class="relative">
                    <div class="absolute -left-8 top-16 h-32 w-32 rounded-full bg-blue-200/60 blur-3xl"></div>
                    <div class="absolute -right-8 bottom-16 h-40 w-40 rounded-full bg-teal-200/50 blur-3xl"></div>

                    <div class="relative rounded-[2rem] border border-slate-200 bg-white p-4 shadow-2xl shadow-slate-300/40">
                        <div class="flex items-center justify-between border-b border-slate-100 px-2 pb-4">
                            <div>
                                <p class="text-sm font-black text-blue-950">Dashboard Koordinator</p>
                                <p class="mt-1 text-xs font-semibold text-slate-500">Ringkasan distribusi hari ini</p>
                            </div>

                            <span class="rounded-full bg-green-100 px-4 py-2 text-xs font-black text-green-700">
                                Live
                            </span>
                        </div>

                        <div class="mt-4 grid grid-cols-2 gap-3 sm:grid-cols-4">
                            <div class="rounded-2xl border border-slate-100 bg-slate-50 p-4">
                                <p class="text-xs font-bold text-slate-500">Posko Aktif</p>
                                <p class="mt-2 text-2xl font-black text-blue-950">128</p>
                            </div>

                            <div class="rounded-2xl border border-slate-100 bg-slate-50 p-4">
                                <p class="text-xs font-bold text-slate-500">Permintaan</p>
                                <p class="mt-2 text-2xl font-black text-blue-950">312</p>
                            </div>

                            <div class="rounded-2xl border border-slate-100 bg-red-50 p-4">
                                <p class="text-xs font-bold text-red-500">Mendesak</p>
                                <p class="mt-2 text-2xl font-black text-red-600">28</p>
                            </div>

                            <div class="rounded-2xl border border-slate-100 bg-amber-50 p-4">
                                <p class="text-xs font-bold text-amber-600">Stok Tipis</p>
                                <p class="mt-2 text-2xl font-black text-amber-600">36</p>
                            </div>
                        </div>

                        <div class="mt-4 rounded-2xl border border-slate-100 bg-white p-4">
                            <div class="mb-3 flex items-center justify-between">
                                <h3 class="text-sm font-black text-blue-950">Peta Posko Aktif</h3>
                                <span class="text-xs font-black text-green-700">OpenStreetMap</span>
                            </div>

                            <div class="h-[330px] overflow-hidden rounded-2xl border border-slate-100 bg-slate-100">
                                <div class="reliefflow-map h-full w-full"></div>
                            </div>
                        </div>

                        <div class="mt-4 rounded-2xl bg-blue-950 p-4">
                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm font-black text-white">RF-DLV-2026-0024</p>
                                    <p class="mt-1 text-xs font-semibold text-blue-100">
                                        Air mineral 70 dus sedang dikirim ke Posko Sukamaju
                                    </p>
                                </div>

                                <div class="flex items-center gap-2">
                                    <span class="h-2.5 w-2.5 rounded-full bg-green-400"></span>
                                    <span class="text-xs font-black text-green-200">In Transit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FITUR -->
        <section id="fitur" class="bg-white py-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="max-w-3xl">
                    <p class="text-sm font-black uppercase tracking-[0.22em] text-blue-700">Fitur Utama</p>
                    <h2 class="mt-3 text-4xl font-black tracking-tight text-blue-950">
                        Dirancang untuk alur bantuan yang jelas dari awal sampai selesai.
                    </h2>
                    <p class="mt-4 text-lg font-medium leading-8 text-slate-600">
                        Fitur ReliefFlow dibuat sederhana untuk tim lapangan, tetapi tetap kuat untuk kebutuhan koordinasi dan transparansi.
                    </p>
                </div>

                <div class="mt-12 grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-700 text-sm font-black text-white">01</div>
                        <h3 class="text-lg font-black text-blue-950">Skor Prioritas</h3>
                        <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                            Mengurutkan permintaan berdasarkan urgensi, kelompok rentan, stok, dan waktu tunggu.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-700 text-sm font-black text-white">02</div>
                        <h3 class="text-lg font-black text-blue-950">Manajemen Stok</h3>
                        <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                            Memantau stok tersedia, stok dialokasikan, dan stok yang sudah tersalurkan.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-700 text-sm font-black text-white">03</div>
                        <h3 class="text-lg font-black text-blue-950">Tracking Distribusi</h3>
                        <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                            Melacak bantuan dari planned, packed, in transit, delivered, sampai confirmed.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-700 text-sm font-black text-white">04</div>
                        <h3 class="text-lg font-black text-blue-950">Dashboard Publik</h3>
                        <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                            Menampilkan dampak bantuan tanpa membuka data pribadi atau informasi sensitif.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CARA KERJA -->
        <section id="cara-kerja" class="bg-slate-50 py-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="text-sm font-black uppercase tracking-[0.22em] text-blue-700">Alur Sistem</p>
                    <h2 class="mt-3 text-4xl font-black tracking-tight text-blue-950">Cara Kerja ReliefFlow</h2>
                    <p class="mt-4 text-lg font-medium leading-8 text-slate-600">
                        Semua proses dibuat runtut agar mudah dipahami koordinator, gudang, posko, dan publik.
                    </p>
                </div>

                <div class="mt-14 grid grid-cols-1 gap-5 md:grid-cols-5">
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-700 text-xl font-black text-white">1</div>
                        <h3 class="mt-5 text-lg font-black text-blue-950">Posko Mengajukan</h3>
                        <p class="mt-2 text-sm font-medium leading-6 text-slate-500">
                            Petugas posko mencatat kebutuhan bantuan sesuai kondisi lapangan.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-700 text-xl font-black text-white">2</div>
                        <h3 class="mt-5 text-lg font-black text-blue-950">Skor Dihitung</h3>
                        <p class="mt-2 text-sm font-medium leading-6 text-slate-500">
                            Sistem menentukan prioritas berdasarkan parameter yang transparan.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-700 text-xl font-black text-white">3</div>
                        <h3 class="mt-5 text-lg font-black text-blue-950">Bantuan Dialokasikan</h3>
                        <p class="mt-2 text-sm font-medium leading-6 text-slate-500">
                            Koordinator menyetujui alokasi berdasarkan stok yang tersedia.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-700 text-xl font-black text-white">4</div>
                        <h3 class="mt-5 text-lg font-black text-blue-950">Gudang Mengirim</h3>
                        <p class="mt-2 text-sm font-medium leading-6 text-slate-500">
                            Petugas gudang memperbarui status pengiriman secara bertahap.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-700 text-xl font-black text-white">5</div>
                        <h3 class="mt-5 text-lg font-black text-blue-950">Posko Konfirmasi</h3>
                        <p class="mt-2 text-sm font-medium leading-6 text-slate-500">
                            Penerimaan bantuan dikonfirmasi melalui kode atau QR distribusi.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- TRANSPARENCY -->
        <section id="transparansi" class="bg-white py-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-10 lg:grid-cols-5">
                    <div class="lg:col-span-2">
                        <p class="text-sm font-black uppercase tracking-[0.22em] text-blue-700">Transparansi Publik</p>
                        <h2 class="mt-3 text-4xl font-black tracking-tight text-blue-950">
                            Pantau bantuan yang sudah tersalurkan.
                        </h2>
                        <p class="mt-4 max-w-2xl text-lg font-medium leading-8 text-slate-600">
                            Data ringkasan distribusi dapat dilihat publik tanpa menampilkan informasi sensitif.
                        </p>

                        <div class="mt-8 grid grid-cols-1 gap-5">
                            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                                <p class="text-3xl font-black text-blue-950">1.248.750</p>
                                <p class="mt-1 text-sm font-bold text-slate-500">Total bantuan tersalurkan</p>
                            </div>

                            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                                <p class="text-3xl font-black text-blue-950">532</p>
                                <p class="mt-1 text-sm font-bold text-slate-500">Posko terbantu</p>
                            </div>

                            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                                <p class="text-3xl font-black text-blue-950">3.247</p>
                                <p class="mt-1 text-sm font-bold text-slate-500">Pengiriman selesai</p>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3">
                        <div class="rounded-[2rem] border border-slate-200 bg-white p-5 shadow-xl shadow-slate-200/70">
                            <div class="mb-4 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-black text-blue-950">Peta Lokasi Posko</h3>
                                    <p class="mt-1 text-sm font-semibold text-slate-500">
                                        Sebaran posko aktif dan lokasi pengguna
                                    </p>
                                </div>

                                <span class="rounded-full bg-green-100 px-4 py-2 text-xs font-black text-green-700">
                                    Live Map
                                </span>
                            </div>

                            <div class="h-[520px] overflow-hidden rounded-[1.5rem] border border-slate-100 bg-slate-100">
                                <div class="reliefflow-map h-full w-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="lacak" class="bg-slate-50 py-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="overflow-hidden rounded-[2rem] bg-blue-950 shadow-2xl shadow-blue-950/20">
                    <div class="grid grid-cols-1 items-center gap-8 p-8 lg:grid-cols-2 lg:p-12">
                        <div>
                            <p class="text-sm font-black uppercase tracking-[0.22em] text-blue-200">Lacak Bantuan</p>
                            <h2 class="mt-3 text-4xl font-black tracking-tight text-white">
                                Cek status distribusi dengan kode pengiriman.
                            </h2>
                            <p class="mt-4 text-lg font-medium leading-8 text-blue-100">
                                Donatur dan publik dapat melihat status bantuan tanpa mengakses data internal.
                            </p>
                        </div>

                        <div class="rounded-3xl bg-white p-5 shadow-xl">
                            <label for="tracking_code" class="text-sm font-black text-blue-950">Kode Distribusi</label>

                            <div class="mt-3 flex flex-col gap-3 sm:flex-row">
                                <input
                                    id="tracking_code"
                                    type="text"
                                    value="RF-DLV-2026-0024"
                                    class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm font-bold text-slate-700 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100"
                                >

                                <button class="rounded-2xl bg-blue-700 px-7 py-4 text-sm font-black text-white transition hover:bg-blue-800">
                                    Lacak
                                </button>
                            </div>

                            <div class="mt-5 rounded-2xl border border-green-100 bg-green-50 p-5">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm font-bold text-slate-500">Status</p>
                                        <p class="text-xl font-black text-green-700">Confirmed</p>
                                    </div>

                                    <span class="rounded-full bg-green-100 px-4 py-2 text-xs font-black text-green-700">
                                        Selesai
                                    </span>
                                </div>

                                <div class="mt-4 grid grid-cols-2 gap-4 text-sm">
                                    <div>
                                        <p class="font-bold text-slate-500">Posko Tujuan</p>
                                        <p class="mt-1 font-black text-blue-950">Posko Sukamaju</p>
                                    </div>

                                    <div>
                                        <p class="font-bold text-slate-500">Diterima</p>
                                        <p class="mt-1 font-black text-blue-950">23 Mei 2026</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-white">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 border-t border-slate-200 px-6 py-12 lg:grid-cols-4 lg:px-8">
                <div>
                    <div class="flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-blue-700 text-sm font-black text-white">
                            RF
                        </div>
                        <h3 class="text-2xl font-black text-blue-950">ReliefFlow</h3>
                    </div>

                    <p class="mt-4 max-w-sm text-sm font-medium leading-6 text-slate-500">
                        Sistem pendukung keputusan distribusi bantuan darurat berbasis prioritas, tracking, dan transparansi.
                    </p>
                </div>

                <div>
                    <h4 class="text-sm font-black uppercase tracking-wider text-blue-950">Menu</h4>
                    <ul class="mt-4 space-y-3 text-sm font-semibold text-slate-500">
                        <li><a href="/" class="hover:text-blue-700">Beranda</a></li>
                        <li><a href="#fitur" class="hover:text-blue-700">Fitur</a></li>
                        <li><a href="#cara-kerja" class="hover:text-blue-700">Cara Kerja</a></li>
                        <li><a href="#transparansi" class="hover:text-blue-700">Transparansi</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm font-black uppercase tracking-wider text-blue-950">Sistem</h4>
                    <ul class="mt-4 space-y-3 text-sm font-semibold text-slate-500">
                        <li>Skor Prioritas</li>
                        <li>Manajemen Stok</li>
                        <li>Tracking Distribusi</li>
                        <li>QR Konfirmasi</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm font-black uppercase tracking-wider text-blue-950">Kontak</h4>
                    <ul class="mt-4 space-y-3 text-sm font-semibold text-slate-500">
                        <li>info@reliefflow.id</li>
                        <li>+62 80 0446 7910</li>
                        <li>www.reliefflow.id</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-200 py-5 text-center text-sm font-semibold text-slate-500">
                © 2026 ReliefFlow. Semua hak dilindungi.
            </div>
        </footer>
    </main>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const poskoLocations = [
                ['Posko Sukamaju', 'Sangat Mendesak', 'Air Bersih', -6.9018, 107.6186],
                ['Posko Harapan Jaya', 'Mendesak', 'Makanan', -6.9344, 107.6047],
                ['Posko Tanjung Lestari', 'Sedang', 'Obat-obatan', -6.8895, 107.6454],
                ['Posko Maju Bersama', 'Sedang', 'Selimut', -6.9481, 107.6385],
                ['Posko Sejahtera', 'Rendah', 'Perlengkapan Bayi', -6.9109, 107.5857],
            ];

            document.querySelectorAll('.reliefflow-map').forEach(function (mapElement) {
                if (mapElement.dataset.mapReady === 'true') {
                    return;
                }

                mapElement.dataset.mapReady = 'true';

                const map = L.map(mapElement, {
                    zoomControl: false,
                    scrollWheelZoom: true,
                }).setView([-6.9175, 107.6191], 11);

                L.control.zoom({
                    position: 'topleft',
                }).addTo(map);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; OpenStreetMap contributors',
                }).addTo(map);

                const markerGroup = L.featureGroup().addTo(map);

                poskoLocations.forEach(function (posko) {
                    L.marker([posko[3], posko[4]])
                        .bindPopup(
                            '<div style="min-width:190px">' +
                            '<strong>' + posko[0] + '</strong><br>' +
                            'Status: ' + posko[1] + '<br>' +
                            'Bantuan: ' + posko[2] +
                            '</div>'
                        )
                        .addTo(markerGroup);
                });

                map.fitBounds(markerGroup.getBounds(), {
                    padding: [35, 35],
                });

                setTimeout(function () {
                    map.invalidateSize();
                }, 300);
            });
        });
    </script>
</body>
</html>