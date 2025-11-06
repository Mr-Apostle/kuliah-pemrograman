<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keranjang Belanja</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gradient-to-br from-slate-900 via-blue-900 to-purple-900 text-white relative">
  <header class="absolute inset-x-0 top-0 z-50">
    <div class="text-center py-4">
      <h1 class="text-3xl md:text-4xl font-bold text-white drop-shadow-md">Toko Syahrul 🛒🥚🍜</h1>
    </div>

      <nav class="hidden lg:block">
      <div class="flex justify-center space-x-8 pb-4">
        <a href="/index" class="text-2xl text-white font-medium hover:text-blue-600 transition duration-200">🏠 Home</a>
        <a href="/menu" class="text-2xl text-white font-medium hover:text-blue-600 transition duration-200">📋 Menu</a>
        <a href="/pesan" class="text-2xl text-white font-medium hover:text-blue-600 transition duration-200">🛒 Pesan</a>
      </div>
    </nav>


    <div class="lg:hidden absolute top-4 left-4">
      <button id="menu-toggle"
        class="p-2 text-white rounded-md bg-blue-900/50 backdrop-blur-sm hover:bg-blue-800 transition">
        <span class="sr-only">Buka menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-6 w-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>


    <div id="mobile-menu" class="hidden lg:hidden bg-blue-900/90 backdrop-blur-md p-6 space-y-4 text-center">
      <a href="/index" class="block text-2xl text-white font-medium hover:text-blue-600 transition">🏠 Home</a>
      <a href="/menu" class="block text-2xl text-white font-medium hover:text-blue-600 transition">📋 Menu</a>
      <a href="/pesan" class="block text-2xl text-white font-medium hover:text-blue-600 transition">🛒 Pesan</a>
    </div>
  </header>

  <div class="relative isolate px-6 pt-24 sm:pt-32 lg:px-8">
    <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
      <div class="relative left-1/2 aspect-[1155/678] w-[72.1875rem]
                  -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr
                  from-blue-500 to-orange-400 opacity-20"></div>
    </div>

    <main class="container mx-auto px-4 py-8">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-2 text-white">Form Pesanan</h2>
        <p class="text-center text-gray-300 mb-8">Isi form berikut untuk memesan makanan favorit Anda</p>

        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
          <div class="mb-8">
            <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">
              <i class="fas fa-user text-blue-500 mr-2"></i>Informasi Pelanggan
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label for="nama" class="block text-black mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                <input type="text" id="nama" name="nama"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 text-black"
                  required>
              </div>
              <div>
                <label for="telepon" class="block text-black mb-2">
                  Nomor Telepon <span class="text-red-500">*</span>
                </label>
                <input type="tel" id="telepon" name="telepon"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 text-black"
                  required inputmode="numeric" pattern="[0-9]+"
                  oninput="this.value = this.value.replace(/[^0-9]/g, '')">
              </div>

              <div class="md:col-span-2">
                <label for="alamat" class="block text-black mb-2">Alamat Lengkap <span
                    class="text-red-500">*</span></label>
                <textarea id="alamat" name="alamat" rows="2"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 text-black"
                  required></textarea>
              </div>
              <div>
                <label for="metode" class="block text-black mb-2">Metode Pembayaran <span
                    class="text-red-500">*</span></label>
                <select id="metode" name="metode" required
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 text-black">
                  <option value="">-- Pilih Metode Pembayaran --</option>
                  <option value="Tunai (Bayar di Tempat)">Tunai (Bayar di Tempat)</option>
                  <option value="Transfer Bank">Transfer Bank</option>
                </select>
              </div>
              <div>
                <label for="catatan" class="block text-black mb-2">Catatan Pesanan</label>
                <input type="text" id="catatan" name="catatan"
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 text-black"
                  placeholder="Opsional">
              </div>
            </div>

            <div class="mb-8">
              <h3 class="text-xl font-semibold mb-4 text-gray-700 border-b pb-2">
                <i class="fas fa-list text-gray-500 mr-2"></i>Pilih Menu
              </h3>


              <div class="mb-6">
                <h4 class="text-lg font-medium mb-3 text-blue-700"><i class="fas fa-cookie mr-2"></i>Makanan Ringan &
                  Kerupuk</h4>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-3">
                  <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-blue-800">Maitos</h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                  <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Gery salut keju</h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                  <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800"> Gery salut matcha </h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                  <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Spix mie goreng </h5>
                      <p class="text-base font-bold text-blue-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                  <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Pilus</h5>
                      <p class="text-base font-bold text-blue-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Siip</h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Cheetos </h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Qtela </h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sarigandum </h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Superstar </h5>
                      <p class="text-base font-bold text-blue-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Beng-beng </h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kalpa </h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Nextar</h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Upin Ipin</h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Choki-Choki </h5>
                      <p class="text-base font-bold text-blue-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                    <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Roma Kelapa </h5>
                      <p class="text-base font-bold text-blue-700">Rp 10.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                    <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Oreo </h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Indomie Goreng </h5>
                      <p class="text-base font-bold text-blue-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Indomie Soto </h5>
                      <p class="text-base font-bold text-blue-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Indomie Coto Makassar </h5>
                      <p class="text-base font-bold text-blue-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Indomie  Goreng Aceh</h5>
                      <p class="text-base font-bold text-blue-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Indomie Kaldu </h5>
                      <p class="text-base font-bold text-blue-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Indomie Kari Ayam</h5>
                      <p class="text-base font-bold text-blue-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Indomie Goreng Rendang </h5>
                      <p class="text-base font-bold text-blue-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sedaap Goreng </h5>
                      <p class="text-base font-bold text-blue-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sedaap Soto </h5>
                      <p class="text-base font-bold text-blue-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Intermie Goreng </h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                   <div
                    class="menu-item flex items-center justify-between p-3 bg-blue-50 rounded border border-blue-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Intermie Soto </h5>
                      <p class="text-base font-bold text-blue-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-blue-200 text-blue-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-blue-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="mb-6">
                <h4 class="text-lg font-medium mb-3 text-yellow-700"><i class="fas fa-wine-bottle mr-2"></i>Minuman</h4>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-3">
                  <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Aqua 1500ml</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 7.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Aqua 600ml</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 4.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Le Mineral 1500ml</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 7.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Le Mineral 600ml</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 4.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Club 1500ml</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 7.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Teh Kotak</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 5.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Teh Pucuk</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 5.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kopi Golda</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 5.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kopi ABC Botol</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 5.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kopi GoodDay Botol</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 7.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Ultramilk 125ml</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 4.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Ultramilk 200ml</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Ultramilk 250ml</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 7.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Lasegar</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sprite</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Pocari Sweat</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 7.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Nipis Madu</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Susu Beruang</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 10.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">You C 1000</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 12.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Susu FrisianFlag Kaleng</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 14.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Susu Cap Enak Kaleng</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 14.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Susu Omela Kaleng</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 13.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sirup ABC Jeruk</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 15.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kopi Kapal Api Sachet</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 1.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kopi GoodDay Merah Sachet</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kopi GoodDay Biru Sachet</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kopi GoodDay Cappucino Sachet</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 2.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Susu Dancow Sachet</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 5.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Energen</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 2.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Susu Milo Sachet</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Teh SariWangi Sachet</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 2.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Susu FrisianFlag Sachet</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">ExtraJoss</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 1.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kukubima</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 1.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Air Gelas Celebes 1 Dus</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 18.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Mountea</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Teh Gelas</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kopikap</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Panther</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Okky Jelly Koko Drink</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Okky Jelly Drink</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Okky Jelly Drink Big</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-yellow-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-yellow-50 rounded border border-yellow-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Air Galon</h5>
                      <p class="text-base font-bold text-yellow-700">Rp 5.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-yellow-200 text-yellow-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-yellow-200 text-blue-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                </div>
              </div>

              <div class="mb-6"></div>
              <div>
                <h4 class="text-lg font-medium mb-3 text-green-600"><i class="fas fa-shopping-basket mr-2"></i>Sembako & Bumbu Dapur
                </h4>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-3">
                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Telur Ayam</h5>
                      <p class="text-base font-bold text-green-700">Rp 2.000/Butir</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Minyak Kita 1L</h5>
                      <p class="text-base font-bold text-green-700">Rp 20.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Minyak Kunci Mas 2L</h5>
                      <p class="text-base font-bold text-green-700">Rp 44.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Minyak Gelas Rose Brand</h5>
                      <p class="text-base font-bold text-green-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Gula 1Kg</h5>
                      <p class="text-base font-bold text-green-700">Rp 21.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Gula 500g</h5>
                      <p class="text-base font-bold text-green-700">Rp 12.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Gas LPG 3Kg</h5>
                      <p class="text-base font-bold text-green-700">Rp 23.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Tepung Terigu Kompas 1Kg</h5>
                      <p class="text-base font-bold text-green-700">Rp 14.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Tepung Terigu gatot Kaca 500g</h5>
                      <p class="text-base font-bold text-green-700">Rp 7.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Tepung Tapioka Rumah Kelinci 500g</h5>
                      <p class="text-base font-bold text-green-700">Rp 9.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Tepung Beras Rose Brand 500g</h5>
                      <p class="text-base font-bold text-green-700">Rp 10.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Tepung Beras ketan Rose Brand 500g</h5>
                      <p class="text-base font-bold text-green-700">Rp 14.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Bijag</h5>
                      <p class="text-base font-bold text-green-700">Rp 9.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kecap Botol ABC 130ml</h5>
                      <p class="text-base font-bold text-green-700">Rp 11.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Lombok Botol ABC 130ml</h5>
                      <p class="text-base font-bold text-green-700">Rp 10.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kecap Adinata Bantal 620ml</h5>
                      <p class="text-base font-bold text-green-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Lombok Adinata Bantal 620ml</h5>
                      <p class="text-base font-bold text-green-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Micin Ajinomoto 90g</h5>
                      <p class="text-base font-bold text-green-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Micin Ajinomoto 16g</h5>
                      <p class="text-base font-bold text-green-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Garam Meja Halus 500g</h5>
                      <p class="text-base font-bold text-green-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Garam Kasar 400g</h5>
                      <p class="text-base font-bold text-green-700">Rp 4.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sajiku Tepung Serbaguna 75g</h5>
                      <p class="text-base font-bold text-green-700">Rp 3.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Amanda Margarin Serbaguna 200g</h5>
                      <p class="text-base font-bold text-green-700">Rp 8.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sajiku Bumbu Nasi Goreng 20g</h5>
                      <p class="text-base font-bold text-green-700">Rp 2.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Masako Sachet</h5>
                      <p class="text-base font-bold text-green-700">Rp 500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Royco Sachet</h5>
                      <p class="text-base font-bold text-green-700">Rp 500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Kecap ABC Sachet</h5>
                      <p class="text-base font-bold text-green-700">Rp 500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Desaku Kunyit Bubuk 5g</h5>
                      <p class="text-base font-bold text-green-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Desaku Ketumbar Bubuk 12,5g</h5>
                      <p class="text-base font-bold text-green-700">Rp 8.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-green-50 rounded border border-green-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Ladaku Merica Bubuk 2,5g</h5>
                      <p class="text-base font-bold text-green-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-green-200 text-green-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-green-200 text-green-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                  
                </div>
              </div>

              <div class="mb-6"></div>
              <div>
                <h4 class="text-lg font-medium mb-3 text-red-600"><i class="fas fa-shopping-basket mr-2"></i>Rokok
                </h4>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-3">
                  <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sampoerna 16</h5>
                      <p class="text-base font-bold text-red-700">Rp 36.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sampoerna 12</h5>
                      <p class="text-base font-bold text-red-700">Rp 27.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Marlbiri Hitam 20</h5>
                      <p class="text-base font-bold text-red-700">Rp 40.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Marlboro Hitam Hitam 16</h5>
                      <p class="text-base font-bold text-red-700">Rp 33.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Marlboro Hitam 12</h5>
                      <p class="text-base font-bold text-red-700">Rp 25.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Marlboro Putih</h5>
                      <p class="text-base font-bold text-red-700">Rp 53.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Marlboro Biru</h5>
                      <p class="text-base font-bold text-red-700">Rp 53.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Marlboro Merah</h5>
                      <p class="text-base font-bold text-red-700">Rp 53.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Surya 16</h5>
                      <p class="text-base font-bold text-red-700">Rp 36.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Surya 12</h5>
                      <p class="text-base font-bold text-red-700">Rp 27.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Troy</h5>
                      <p class="text-base font-bold text-red-700">Rp 30.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Nation Gold</h5>
                      <p class="text-base font-bold text-red-700">Rp 26.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Classmild 16</h5>
                      <p class="text-base font-bold text-red-700">Rp 30.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Classmild 12</h5>
                      <p class="text-base font-bold text-red-700">Rp 22.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Classmild RedMax</h5>
                      <p class="text-base font-bold text-red-700">Rp 25.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                   <div
                    class="menu-item flex items-center justify-between p-3 bg-red-50 rounded border border-red-200">
                    <div>
                      <h5 class="font-medium text-gray-800">LA Ice</h5>
                      <p class="text-base font-bold text-red-700">Rp 35.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-red-200 text-red-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-red-200 text-red-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                </div>
              </div>

              <div class="mb-6"></div>
              <div>
                <h4 class="text-lg font-medium mb-3 text-purple-600"><i class="fas fa-shopping-basket mr-2"></i>Kebutuhan Rumah Tangga
                </h4>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-3">
                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Salonpas</h5>
                      <p class="text-base font-bold text-purple-700">Rp 2.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>
                  
                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Popok Sweety S</h5>
                      <p class="text-base font-bold text-purple-700">Rp 2.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Popok Sweety M</h5>
                      <p class="text-base font-bold text-purple-700">Rp 3.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Popok Sweety L</h5>
                      <p class="text-base font-bold text-purple-700">Rp 3.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Popok Sweety XL</h5>
                      <p class="text-base font-bold text-purple-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Softex Laurier Pink</h5>
                      <p class="text-base font-bold text-purple-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Softex Charm Hitam</h5>
                      <p class="text-base font-bold text-purple-700">Rp 3.500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Downy Sachet</h5>
                      <p class="text-base font-bold text-purple-700">Rp 500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Molto Sachet</h5>
                      <p class="text-base font-bold text-purple-700">Rp 500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Shampo Clear Sachet</h5>
                      <p class="text-base font-bold text-purple-700">Rp 500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Shampo Lifebuoy Sachet</h5>
                      <p class="text-base font-bold text-purple-700">Rp 500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Shampo Sunsilk Sachet</h5>
                      <p class="text-base font-bold text-purple-700">Rp 500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Shampo Pantene Sachet</h5>
                      <p class="text-base font-bold text-purple-700">Rp 500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Shampo Head&Shoulders Sachet</h5>
                      <p class="text-base font-bold text-purple-700">Rp 500</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-grpurpleeen-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sabun Batang Shinzui</h5>
                      <p class="text-base font-bold text-purple-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Sabun Batang Lifebuoy</h5>
                      <p class="text-base font-bold text-purple-700">Rp 4.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Odol Pepsodent 75g</h5>
                      <p class="text-base font-bold text-purple-700">Rp 7.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Odol Pepsodent 190g</h5>
                      <p class="text-base font-bold text-purple-700">Rp 16.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Boom Deterjen Bubuk</h5>
                      <p class="text-base font-bold text-purple-700">Rp 6.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Rinso Cair sachet</h5>
                      <p class="text-base font-bold text-purple-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple-800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                  <div
                    class="menu-item flex items-center justify-between p-3 bg-purple-50 rounded border border-purple-200">
                    <div>
                      <h5 class="font-medium text-gray-800">Rinso Bubuk Sachet</h5>
                      <p class="text-base font-bold text-purple-700">Rp 1.000</p>
                    </div>
                    <div class="flex items-center">
                      <button class="bg-purple-200 text-purple-800 rounded-l px-2 py-1 decrease">-</button>
                      <span class="bg-white px-3 py-1 quantity text-black">0</span>
                      <button class="bg-purple-200 text-purple -800 rounded-r px-2 py-1 increase">+</button>
                    </div>
                  </div>

                </div>
              </div>


            </div>

            <div class="bg-amber-50 p-6 rounded-lg mb-6 text-black">
              <h2 class="text-xl font-bold text-black mb-4">Ringkasan Pesanan</h2>
              <div id="order-summary" class="mb-4">
                <p class="text-gray-600">Belum ada pesanan</p>
              </div>
              <div class="flex justify-between items-center border-t pt-4">
                <div>
                  <p class="text-gray-600">Total</p>
                  <p id="total-price" class="text-2xl font-bold text-amber-600">Rp 0</p>
                </div>
                <button id="pesan-btn"
                  class="bg-amber-500 hover:bg-amber-600 text-white px-6 py-2 rounded font-medium transition duration-200 opacity-50 cursor-not-allowed"
                  disabled>
                  <i class="fas fa-shopping-cart mr-2"></i>Pesan Sekarang
                </button>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-xl shadow-md p-6">
            <h3 class="text-xl font-semibold mb-4 text-gray-700">Butuh Bantuan?</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="flex items-start">
                <i class="fas fa-phone-alt text-amber-500 text-xl mr-3 mt-1"></i>
                <div>
                  <h4 class="font-medium text-gray-800">Telepon</h4>
                  <p class="text-gray-600">0853-4254-9499</p>
                  <p class="text-sm text-gray-500">Setiap Hari, 06:00 - 23:00 WITA</p>
                </div>
              </div>
              <div class="flex items-start">
                <i class="fas fa-comments text-amber-500 text-xl mr-3 mt-1"></i>
                <div>
                  <h4 class="font-medium text-gray-800">WhatsApp</h4>
                  <p class="text-gray-600">0853-4254-9499</p>
                  <p class="text-sm text-gray-500">Respon cepat via chat</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
  </div>

  <footer class="bg-gray-800 text-white py-8 mt-12">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <h3 class="text-xl font-bold mb-4">Toko Syahrul</h3>
          <p class="text-gray-400">Menyajikan kebutuhan sehari-hari dengan harga terjangkau sejak 2018.</p>
        </div>
        <div>
          <h4 class="font-semibold mb-4">Kontak Kami</h4>
          <p class="text-gray-400 mb-2"><i class="fas fa-map-marker-alt mr-2"></i> Jl. Kacong Dg Lalang No.112</p>
          <p class="text-gray-400 mb-2"><i class="fas fa-phone mr-2"></i> 085342549499</p>
          <p class="text-gray-400"><i class="fas fa-envelope mr-2"></i> info@tokosyahrul.com</p>
        </div>
        <div>
          <h4 class="font-semibold mb-4">Jam Operasional</h4>
          <p class="text-gray-400 mb-2">Setiap Hari : 10.00 - 23.00 WITA</p>
        </div>
      </div>
      <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
        <p>&copy; 2018 Toko Syahrul. All rights reserved.</p>
      </div>
    </div>
  </footer>

   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
    const toggleBtn = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");

    toggleBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });

    document.querySelectorAll("#mobile-menu a").forEach(link => {
      link.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
      });
    });


    document.querySelectorAll('.increase').forEach(button => {
      button.addEventListener('click', function () {
        const qty = this.parentElement.querySelector('.quantity');
        qty.textContent = parseInt(qty.textContent) + 1;
        updateOrderSummary();
      });
    });

    document.querySelectorAll('.decrease').forEach(button => {
      button.addEventListener('click', function () {
        const qty = this.parentElement.querySelector('.quantity');
        let current = parseInt(qty.textContent);
        if (current > 0) {
          qty.textContent = current - 1;
          updateOrderSummary();
        }
      });
    });

    function updateOrderSummary() {
      const orderSummary = document.getElementById('order-summary');
      const totalPriceEl = document.getElementById('total-price');
      let total = 0;
      let items = [];

      document.querySelectorAll('.menu-item').forEach(item => {
        const name = item.querySelector('h5').textContent;
        const priceText = item.querySelector('.text-base.font-bold').textContent;
        const price = parseInt(priceText.replace(/[^0-9]/g, ''));
        const qty = parseInt(item.querySelector('.quantity').textContent);

        if (qty > 0) {
          const subtotal = price * qty;
          total += subtotal;
          items.push({ name, qty, subtotal });
        }
      });

      if (items.length === 0) {
        orderSummary.innerHTML = '<p class="text-gray-600">Belum ada pesanan</p>';
      } else {
        let html = '';
        items.forEach(item => {
          html += `
            <div class="flex justify-between py-2 border-b">
              <div>
                <span class="font-medium">${item.name}</span>
                <span class="text-gray-500 ml-2">x${item.qty}</span>
              </div>
              <span class="font-medium">Rp ${item.subtotal.toLocaleString('id-ID')}</span>
            </div>
          `;
        });
        orderSummary.innerHTML = html;
      }

      totalPriceEl.textContent = `Rp ${total.toLocaleString('id-ID')}`;

      const btn = document.getElementById('pesan-btn');
      if (total > 0) {
        btn.disabled = false;
        btn.classList.remove('opacity-50', 'cursor-not-allowed');
      } else {
        btn.disabled = true;
        btn.classList.add('opacity-50', 'cursor-not-allowed');
      }
    }

    document.getElementById('pesan-btn').addEventListener('click', function (e) {
      e.preventDefault();

      const nama = document.getElementById('nama').value.trim();
      const telepon = document.getElementById('telepon').value.trim();
      const alamat = document.getElementById('alamat').value.trim();
      const metode = document.getElementById('metode').value.trim();
      const catatan = document.getElementById('catatan').value.trim();
      const totalText = document.getElementById('total-price').textContent;

      if (!nama || !telepon) {
        alert('Harap isi nama dan nomor telepon Anda!');
        return;
      }

      if (totalText === 'Rp 0') {
        alert('Harap pilih minimal satu item untuk dipesan!');
        return;
      }

      if (!alamat) {
        alert('Harap isi alamat lengkap Anda!');
        return;
      }

      if (!metode) {
        alert('Harap pilih metode pembayaran!');
        return;
      }


      let items = [];
      document.querySelectorAll('.menu-item').forEach(item => {
        const name = item.querySelector('h5').textContent;
        const qty = parseInt(item.querySelector('.quantity').textContent);
        if (qty > 0) {
          items.push(`${name} x${qty}`);
        }
      });

      const pesan =
        `Halo, saya ingin memesan di *Toko Syahrul* 🛒

👤 Nama: ${nama}
📞 Telepon: ${telepon}
🏠 Alamat: ${alamat || '-'}
📝 Catatan: ${catatan || '-'}

📋 Pesanan:
- ${items.join("\n- ")}
💳 Metode Pembayaran: ${metode}
💰 Total: ${totalText}

Terima kasih 🙏`;

      const nomorWA = "6285342549499";
      const isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);

      let url = "";
      if (isMobile) {

        url = `https://api.whatsapp.com/send?phone=${nomorWA}&text=${encodeURIComponent(pesan)}`;
      } else {

        url = `https://web.whatsapp.com/send?phone=${nomorWA}&text=${encodeURIComponent(pesan)}`;
        window.open(url, "_blank");
      }
    });

    $(document).ready(function () {
  let isAnimating = false;

  $("#menu-toggle").click(function () {
    if (isAnimating) return;
    isAnimating = true;

    const $menu = $("#mobile-menu");
    const isOpen = $menu.hasClass("open");

    if (isOpen) {
  
      $menu.animate(
        { height: 0, opacity: 0 },
        300,
        function () {
          $(this).removeClass("open").css({ height: "", opacity: "" });
          isAnimating = false;
        }
      );
    } else {
    
      const targetHeight = $menu.get(0).scrollHeight;
      $menu
        .css({ height: 0, opacity: 0 })
        .animate(
          { height: targetHeight, opacity: 1 },
          300,
          function () {
            $(this).addClass("open").css("height", "");
            isAnimating = false;
          }
        );
    }
  });


  $("#mobile-menu a").click(function () {
    if ($("#mobile-menu").hasClass("open") && !isAnimating) {
      isAnimating = true;
      $("#mobile-menu").animate(
        { height: 0, opacity: 0 },
        300,
        function () {
          $(this).removeClass("open").css({ height: "", opacity: "" });
          isAnimating = false;
        }
      );
    }
  });
});
  </script>
</body>

</html>