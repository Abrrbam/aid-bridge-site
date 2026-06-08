<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Koordinator | ReliefFlow</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        crossorigin=""
    />
</head>

<body class="bg-slate-50 font-sans text-slate-900 antialiased">
    <main class="min-h-screen">
        <div class="flex min-h-screen">

            <aside class="fixed inset-y-0 left-0 z-40 hidden w-72 flex-col bg-blue-950 text-white shadow-2xl lg:flex">
                <div class="flex h-full flex-col px-5 py-6">
                    <a href="/dashboard" class="flex items-center gap-3">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white text-sm font-black text-blue-700 shadow-lg">
                            RF
                        </div>

                        <div>
                            <p class="text-2xl font-black tracking-tight">ReliefFlow</p>
                            <p class="text-xs font-semibold text-blue-100">Aid Distribution System</p>
                        </div>
                    </a>

                    <nav class="mt-10 flex flex-1 flex-col justify-between">
                        <div class="space-y-2">
                            <a href="/dashboard" class="flex items-center gap-4 rounded-2xl bg-blue-600 px-5 py-4 text-sm font-black text-white shadow-lg shadow-blue-900/30">
                                <span>🏠</span>
                                Dashboard
                            </a>

                            <a href="#" class="flex items-center gap-4 rounded-2xl px-5 py-4 text-sm font-bold text-blue-100 transition hover:bg-white/10 hover:text-white">
                                <span>🏥</span>
                                Data Posko
                            </a>

                            <a href="#" class="flex items-center gap-4 rounded-2xl px-5 py-4 text-sm font-bold text-blue-100 transition hover:bg-white/10 hover:text-white">
                                <span>📌</span>
                                Antrean Prioritas
                            </a>

                            <a href="#" class="flex items-center gap-4 rounded-2xl px-5 py-4 text-sm font-bold text-blue-100 transition hover:bg-white/10 hover:text-white">
                                <span>📦</span>
                                Data Stok
                            </a>

                            <a href="#" class="flex items-center gap-4 rounded-2xl px-5 py-4 text-sm font-bold text-blue-100 transition hover:bg-white/10 hover:text-white">
                                <span>🤝</span>
                                Alokasi Bantuan
                            </a>

                            <a href="#" class="flex items-center gap-4 rounded-2xl px-5 py-4 text-sm font-bold text-blue-100 transition hover:bg-white/10 hover:text-white">
                                <span>🚚</span>
                                Pengiriman
                            </a>

                            <a href="#" class="flex items-center gap-4 rounded-2xl px-5 py-4 text-sm font-bold text-blue-100 transition hover:bg-white/10 hover:text-white">
                                <span>📄</span>
                                Laporan
                            </a>

                            <a href="#" class="flex items-center gap-4 rounded-2xl px-5 py-4 text-sm font-bold text-blue-100 transition hover:bg-white/10 hover:text-white">
                                <span>👥</span>
                                Manajemen Pengguna
                            </a>
                        </div>

                        <div class="space-y-2">
                            <a href="#" class="flex items-center gap-4 rounded-2xl px-5 py-4 text-sm font-bold text-blue-100 transition hover:bg-white/10 hover:text-white">
                                <span>⚙️</span>
                                Pengaturan
                            </a>

                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="flex w-full items-center gap-4 rounded-2xl px-5 py-4 text-sm font-bold text-blue-100 transition hover:bg-white/10 hover:text-white">
                                    <span>↩</span>
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </nav>
                </div>
            </aside>

            <section class="min-h-screen flex-1 lg:pl-72">
                <header class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur">
                    <div class="flex items-center justify-between gap-4 px-5 py-4 lg:px-8">
                        <div>
                            <p class="text-xs font-black uppercase tracking-[0.25em] text-blue-700">Dashboard</p>
                            <h1 class="mt-1 text-2xl font-black tracking-tight text-blue-950">
                                Koordinator ReliefFlow
                            </h1>
                        </div>

                        <div class="hidden w-full max-w-md items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm md:flex">
                            <input
                                type="text"
                                placeholder="Cari sesuatu..."
                                class="w-full border-0 bg-transparent text-sm font-semibold text-slate-600 outline-none placeholder:text-slate-400 focus:ring-0"
                            >
                        </div>

                        <div class="flex items-center gap-4">
                            <button class="relative flex h-11 w-11 items-center justify-center rounded-2xl border border-slate-200 bg-white text-blue-950 shadow-sm">
                                🔔
                                <span class="absolute -right-1 -top-1 flex h-6 w-6 items-center justify-center rounded-full bg-red-600 text-xs font-black text-white">
                                    2
                                </span>
                            </button>

                            <div class="hidden items-center gap-3 sm:flex">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-100 text-sm font-black text-blue-700">
                                    {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                                </div>

                                <div class="text-right">
                                    <p class="text-sm font-black text-blue-950">
                                        {{ Auth::user()->name ?? 'Andi Pratama' }}
                                    </p>
                                    <p class="text-xs font-semibold text-slate-500">
                                        Koordinator
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="px-5 py-6 lg:px-8 lg:py-8">
                    <div class="mb-6 rounded-3xl border border-blue-100 bg-blue-50 p-5 lg:hidden">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-lg font-black text-blue-950">ReliefFlow</p>
                                <p class="text-sm font-semibold text-slate-600">Dashboard Koordinator</p>
                            </div>

                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="rounded-xl bg-blue-700 px-4 py-2 text-sm font-bold text-white">
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>

                    <section class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-5">
                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="flex items-center gap-5">
                                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-3xl">🏥</div>
                                <div>
                                    <p class="text-3xl font-black text-blue-950">128</p>
                                    <p class="mt-1 text-sm font-semibold text-slate-500">Posko Aktif</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="flex items-center gap-5">
                                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-3xl">👥</div>
                                <div>
                                    <p class="text-3xl font-black text-blue-950">15.720</p>
                                    <p class="mt-1 text-sm font-semibold text-slate-500">Total Pengungsi</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="flex items-center gap-5">
                                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-50 text-3xl">📋</div>
                                <div>
                                    <p class="text-3xl font-black text-blue-950">312</p>
                                    <p class="mt-1 text-sm font-semibold text-slate-500">Permintaan Aktif</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="flex items-center gap-5">
                                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-red-50 text-3xl">📍</div>
                                <div>
                                    <p class="text-3xl font-black text-blue-950">28</p>
                                    <p class="mt-1 text-sm font-semibold text-slate-500">Sangat Mendesak</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="flex items-center gap-5">
                                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-50 text-3xl">⏳</div>
                                <div>
                                    <p class="text-3xl font-black text-blue-950">36</p>
                                    <p class="mt-1 text-sm font-semibold text-slate-500">Stok Hampir Habis</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mt-6 grid grid-cols-1 items-stretch gap-6 2xl:grid-cols-5">
                        <div class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm 2xl:col-span-2">
                            <div>
                                <h2 class="text-xl font-black text-blue-950">Distribusi Bantuan per Kategori</h2>
                                <p class="mt-1 text-sm font-semibold text-slate-500">Komposisi bantuan yang sudah dialokasikan</p>
                            </div>

                            <div class="mt-8 flex flex-col items-center gap-7">
                                <div class="mx-auto flex h-[210px] w-[210px] shrink-0 items-center justify-center">
                                    <svg viewBox="0 0 42 42" class="block h-[210px] w-[210px]">
                                        <circle cx="21" cy="21" r="15.9155" fill="transparent" stroke="#e5e7eb" stroke-width="7"></circle>
                                        <circle cx="21" cy="21" r="15.9155" fill="transparent" stroke="#2563eb" stroke-width="7" stroke-dasharray="35 65" stroke-dashoffset="0" transform="rotate(-90 21 21)"></circle>
                                        <circle cx="21" cy="21" r="15.9155" fill="transparent" stroke="#16a34a" stroke-width="7" stroke-dasharray="28 72" stroke-dashoffset="-35" transform="rotate(-90 21 21)"></circle>
                                        <circle cx="21" cy="21" r="15.9155" fill="transparent" stroke="#f97316" stroke-width="7" stroke-dasharray="18 82" stroke-dashoffset="-63" transform="rotate(-90 21 21)"></circle>
                                        <circle cx="21" cy="21" r="15.9155" fill="transparent" stroke="#ef4444" stroke-width="7" stroke-dasharray="12 88" stroke-dashoffset="-81" transform="rotate(-90 21 21)"></circle>
                                        <circle cx="21" cy="21" r="15.9155" fill="transparent" stroke="#f59e0b" stroke-width="7" stroke-dasharray="7 93" stroke-dashoffset="-93" transform="rotate(-90 21 21)"></circle>
                                        <circle cx="21" cy="21" r="9.2" fill="white"></circle>
                                    </svg>
                                </div>

                                <div class="grid w-full min-w-0 grid-cols-1 gap-3 sm:grid-cols-2 2xl:grid-cols-1">
                                    <div class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3">
                                        <div class="flex items-center gap-3">
                                            <span class="h-3.5 w-3.5 rounded-full bg-blue-600"></span>
                                            <p class="text-sm font-black text-slate-700">Air Bersih</p>
                                        </div>
                                        <p class="text-sm font-black text-blue-950">35%</p>
                                    </div>

                                    <div class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3">
                                        <div class="flex items-center gap-3">
                                            <span class="h-3.5 w-3.5 rounded-full bg-green-600"></span>
                                            <p class="text-sm font-black text-slate-700">Makanan</p>
                                        </div>
                                        <p class="text-sm font-black text-blue-950">28%</p>
                                    </div>

                                    <div class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3">
                                        <div class="flex items-center gap-3">
                                            <span class="h-3.5 w-3.5 rounded-full bg-orange-500"></span>
                                            <p class="text-sm font-black text-slate-700">Selimut</p>
                                        </div>
                                        <p class="text-sm font-black text-blue-950">18%</p>
                                    </div>

                                    <div class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3">
                                        <div class="flex items-center gap-3">
                                            <span class="h-3.5 w-3.5 rounded-full bg-red-500"></span>
                                            <p class="text-sm font-black text-slate-700">Obat-obatan</p>
                                        </div>
                                        <p class="text-sm font-black text-blue-950">12%</p>
                                    </div>

                                    <div class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3 sm:col-span-2 2xl:col-span-1">
                                        <div class="flex items-center gap-3">
                                            <span class="h-3.5 w-3.5 rounded-full bg-amber-500"></span>
                                            <p class="text-sm font-black text-slate-700">Perlengkapan Bayi</p>
                                        </div>
                                        <p class="text-sm font-black text-blue-950">7%</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex rounded-3xl border border-slate-200 bg-white p-7 shadow-sm 2xl:col-span-3">
                            <div class="flex min-h-full w-full flex-col">
                                <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                                    <div>
                                        <h2 class="text-xl font-black text-blue-950">Peta Lokasi Posko</h2>
                                        <p class="mt-1 text-sm font-semibold text-slate-500">
                                            Sebaran posko aktif dan lokasi pengguna secara langsung
                                        </p>
                                    </div>

                                    <span class="w-fit rounded-full bg-green-100 px-4 py-2 text-xs font-black text-green-700">
                                        Live Map
                                    </span>
                                </div>

                                <div class="mt-6 min-h-[520px] flex-1 overflow-hidden rounded-3xl border border-slate-100 bg-slate-100">
                                    <div class="reliefflow-map h-full min-h-[520px] w-full"></div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mt-6 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
                        <div class="border-b border-slate-200 px-6 py-5">
                            <h2 class="text-xl font-black text-blue-950">Permintaan Paling Mendesak</h2>
                            <p class="mt-1 text-sm font-semibold text-slate-500">
                                Daftar permintaan yang perlu diprioritaskan koordinator
                            </p>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full min-w-[900px] text-left">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th class="px-6 py-4 text-sm font-black text-blue-950">Kode Permintaan</th>
                                        <th class="px-6 py-4 text-sm font-black text-blue-950">Posko</th>
                                        <th class="px-6 py-4 text-sm font-black text-blue-950">Jenis Bantuan</th>
                                        <th class="px-6 py-4 text-sm font-black text-blue-950">Skor Prioritas</th>
                                        <th class="px-6 py-4 text-sm font-black text-blue-950">Status</th>
                                        <th class="px-6 py-4 text-sm font-black text-blue-950">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-slate-100">
                                    <tr class="transition hover:bg-slate-50">
                                        <td class="px-6 py-4 text-sm font-bold text-slate-700">RF-REQ-0024</td>
                                        <td class="px-6 py-4 text-sm font-bold text-slate-700">Posko Sukamaju</td>
                                        <td class="px-6 py-4 text-sm font-bold text-slate-700">Air Bersih</td>
                                        <td class="px-6 py-4 text-sm font-black text-blue-950">87/100</td>
                                        <td class="px-6 py-4">
                                            <span class="rounded-xl bg-red-100 px-3 py-2 text-xs font-black text-red-600">Sangat Mendesak</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="text-sm font-black text-blue-700 hover:text-blue-900">Lihat Detail</a>
                                        </td>
                                    </tr>

                                    <tr class="transition hover:bg-slate-50">
                                        <td class="px-6 py-4 text-sm font-bold text-slate-700">RF-REQ-0017</td>
                                        <td class="px-6 py-4 text-sm font-bold text-slate-700">Posko Harapan Jaya</td>
                                        <td class="px-6 py-4 text-sm font-bold text-slate-700">Makanan</td>
                                        <td class="px-6 py-4 text-sm font-black text-blue-950">74/100</td>
                                        <td class="px-6 py-4">
                                            <span class="rounded-xl bg-orange-100 px-3 py-2 text-xs font-black text-orange-600">Mendesak</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="text-sm font-black text-blue-700 hover:text-blue-900">Lihat Detail</a>
                                        </td>
                                    </tr>

                                    <tr class="transition hover:bg-slate-50">
                                        <td class="px-6 py-4 text-sm font-bold text-slate-700">RF-REQ-0019</td>
                                        <td class="px-6 py-4 text-sm font-bold text-slate-700">Posko Tanjung Lestari</td>
                                        <td class="px-6 py-4 text-sm font-bold text-slate-700">Obat-obatan</td>
                                        <td class="px-6 py-4 text-sm font-black text-blue-950">63/100</td>
                                        <td class="px-6 py-4">
                                            <span class="rounded-xl bg-orange-100 px-3 py-2 text-xs font-black text-orange-600">Mendesak</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="text-sm font-black text-blue-700 hover:text-blue-900">Lihat Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </section>
        </div>
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

                const locateButton = L.control({
                    position: 'topright',
                });

                locateButton.onAdd = function () {
                    const button = L.DomUtil.create('button', 'leaflet-bar leaflet-control');

                    button.type = 'button';
                    button.innerHTML = 'Lokasi Saya';
                    button.style.backgroundColor = 'white';
                    button.style.padding = '10px 14px';
                    button.style.fontWeight = '800';
                    button.style.fontSize = '12px';
                    button.style.color = '#172554';
                    button.style.cursor = 'pointer';
                    button.style.border = 'none';

                    L.DomEvent.disableClickPropagation(button);

                    button.addEventListener('click', function () {
                        map.locate({
                            setView: true,
                            maxZoom: 15,
                            enableHighAccuracy: true,
                        });
                    });

                    return button;
                };

                locateButton.addTo(map);

                let userMarker = null;
                let userCircle = null;

                map.on('locationfound', function (event) {
                    const radius = event.accuracy;

                    if (userMarker) {
                        map.removeLayer(userMarker);
                    }

                    if (userCircle) {
                        map.removeLayer(userCircle);
                    }

                    userMarker = L.marker(event.latlng)
                        .addTo(map)
                        .bindPopup('Lokasi kamu terdeteksi dalam radius sekitar ' + Math.round(radius) + ' meter.')
                        .openPopup();

                    userCircle = L.circle(event.latlng, {
                        radius: radius,
                        color: '#2563eb',
                        fillColor: '#3b82f6',
                        fillOpacity: 0.15,
                    }).addTo(map);
                });

                map.on('locationerror', function () {
                    alert('Lokasi tidak bisa diakses. Pastikan izin lokasi browser sudah diaktifkan.');
                });

                setTimeout(function () {
                    map.invalidateSize();
                }, 300);
            });
        });
    </script>
</body>
</html>