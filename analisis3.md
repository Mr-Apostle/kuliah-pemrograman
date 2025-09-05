**<h1> Berikut adalah analisis dari kode yang ada di portofolio saya : </h1>

1. `<!DOCTYPE html>` : Memberi tahu browser bahwa ini adalah dokumen HTML5. Harus selalu ada di baris pertama.
2. `<meta charset="UTF-8" />` : Membuka tag HTML utama. lang="id" artinya halaman ini menggunakan Bahasa Indonesia
3. `<head>` : Bagian ini berisi metadata (informasi tentang halaman), seperti judul, pengaturan, dan gaya.
4. `<meta charset="UTF-8" />` : Mengatur enkoding karakter ke UTF-8, agar huruf, simbol, dan emoji (seperti 🎮) muncul dengan benar. 
5. `<meta name="viewport" content="width=device-width, initial-scale=1.0" />` : Membuat halaman responsif di HP. Artinya : Lebar halaman = lebar layar HP, Zoom awal = 100%,  dan Penting untuk tampilan mobile.
6. `<title>Portofolio Rasul Rajab</title>` : Judul halaman yang muncul di tab browser 
7. `</head>`: Menutup bagian head
8. `<body>` : Membuka bagian body dimana semua konten yang dilihat pengguna diletakkan di sini.
9. `<img src="fotoku.jpg" alt="Foto Profil Rasul Rajab" />` : Menampilkan gambar dari file fotoku.jpg. alt adalah teks alternatif jika gambar gagal dimuat
10. `<h1>Rasul Rajab</h1>` : Judul utama menggunakan heading 1 biasanya untuk nama pemilik portofolio, agar tampil besar dan tebal.
11. `<p>🎮 Pecinta Game | 💻 Mahasiswa JTIK | 🚀 Belajar Pemrograman Web </p>`: Deskripsi singkat tentang diri saya yaitu, hobi, jurusan, dan tujuan belajar.
12. `<h2>Tentang Saya</h2>` : Subjudul menggunakan heading 2 untuk bagian "tentang saya"
13. `<p> Hai! Saya <b>Rasul Rajab</b>, mahasiswa yang sedang belajar membuat website keren dengan HTML & CSS. Saya suka bermain game, menonton dracin dari tiktok, dan eksplorasi dunia teknologi.Saya percaya bahwa belajar itu menyenangkan jika dilakukan dengan semangat! </p>` : Paragraf yang berisi penjelasan tentang diri saya, `<b>` (untuk membuat teks tebal)
14. `<h2>Keahlian</h2>` : Subjudul untuk bagian keahlian.
15. `<p> ✅ Bermain Game<br> ✅ Desain Web Sederhana<br> ✅ Kerja Tim & Komunikasi </p>` : Daftar keahlian saya, `<br>` untuk membuat baris baru tanpa membuat paragraf  baru.
16. `<h2>Pendidikan</h2>` : Subjudul untuk bagian pendidikan.
17. `<p>🎓 Universitas Negeri Makassar — Program Studi Teknik Komputer (2024–Sekarang) </p>` : Informasi tentang pendidikan terkini.
18. `<h2>Kontak</h2>` : Subjudul untuk informasi kontak.
19. `<p>📧 Email: <a href="mailto:mosajarasul@gmail.com">mosajarasul@gmail.com</a><br> 📱 Instagram: <a href="https://instagram.com/_rsull14">@_rsull14</a><br></p>` : `<ahref="mailto:...">` (saat diklik, buka aplikasi email untuk mengirim pesan ke alamat tersebut),  `<a href="https://...">`(link untuk langsung ke Instagram).
20. `</body>` : Menutup bagian body.
21. `<style>` : Membuka blok CSS. Semua gaya (warna, font, animasi) didefinisikan di sini.
22. `body {font-family:'Segoe UI', sans-serif;` : Mengatur jenis huruf: utamanya Segoe UI (font Windows), dan jika tidak ada, gunakan sans-serif.
23. `background: url('background.jpg') no-repeat center center fixed;` : Latar belakang halaman menggunakan gambar dari file background.jpg. no-repeat berarti gambar tidak diulang, center center berarti gambar di tengah layar, fixed berarti gambar tetap saat discroll (efek parallax ringan)
24. `background-size: cover;` : Gambar diperbesar/perkecil agar memenuhi seluruh layar tanpa distorsi.
25. `color: white;` : Warna teks utama adalah putih.
26. `margin: 0;` : Menghapus jarak luar default dari body.
27. `padding: 40px 20px;` : Memberi jarak dalam: 40px atas-bawah, 20px kiri-kanan.
28. `min-height: 100vh;` : Tinggi minimal halaman = 100% tinggi layar (vh = viewport height). 
29. `display: flex;` : Sistem layout fleksibel.
30. `flex-direction: column;` : Susun elemen dari atas ke bawah.
31. `align-items: center;` : Sejajarkan semua ke tengah (horizontal).
32. `text-align: center;` : Teks dibuat rata tengah.
33. `line-height: 1.8;` : Jarak antar baris teks = 1.8 kali ukuran font.
34. `position: relative;` : Agar bisa menambahkan `::before` (overlay gelap) di bawah konten. 
35. `}` : Menutup aturan CSS untuk body.
36. `body::before {content:''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.6); z-index: -1;}` : Membuat lapisan hitam transparan 60% di atas gambar latar, agar teks putih tetap terbaca. `z-index: -1` berarti lapisan ini di bawah konten, tapi di atas gambar.
37. `img {width: 150px; height: 150px;` : Ukuran foto 150px x 150px.
38. `border-radius: 50%;` : Membuat sudut gambar melengkung 50%, sehingga gambar menjadi lingkaran sempurna.
39. `object-fit: cover;` : Gambar di-resize agar mengisi kotak tanpa merusak rasio (potong bagian luar jika perlu).
40. `object-position: center 30%;` : Mengatur posisi gambar di dalam kotak, center berarti horizontal di tengah, 35% berarti 35% dari atas.
41. `border: 5px solid white;` : Garis putih tebal di sekeliling foto.
42. `box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);` : Bayangan halus di bawah foto.
43. `animation: float 3s ease-in-out infinite alternate;` : Menerapkan animasi bernama float, 3s berarti durasi 1 siklus = 3 detik, ease-in-out berarti gerakan pelan di awal & akhir tapi cepat di tengah infinite berarti animasi berulang terus, alternate berarti (bolak-balik), tidak loncat.
44. `transition: transform 0.3s ease, box-shadow 0.3s ease;` : Membuat perubahan pada `transform` (seperti scale) dan `box-shadow` menjadi lebih halus selama 0.3 detik. 
45. `}` : Akhir dari aturan CSS img.
46. `@keyframes float {`: Mendefinisikan animasi bernama `float`. Ini adalah rencana gerakan yang akan digunakan oleh elemen `img`.`
47. `0% { transform: translateY(0); }` : Saat animasi dimulai (0%), gambar berada di posisi normal (tidak bergerak vertikal).
48. `100% { transform: translateY(-12px); }` : Saat animasi mencapai akhir (100%), gambar bergerak 12px ke atas.
49. `}` : Menutup definisi animasi float.
50. `img:hover {` : Aturan ini hanya berlaku saat kursor mouse mengarah ke gambar. 
51. `transform: scale(1.15) translateY(-12px);` : Saat di hover, `scale(1.15)` berarti gambar membesar 15%, `translateY(-12px)` berarti tetap berada di posisi "atas" dari animasi float.
52. `box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);` : Bayangan menjadi lebih besar dan lebih gelap saat di hover, `15px` berarti turun, `40px` berarti blur (lebih tebal),`rgba(0,0,0,0.5)` berarti 50% hitam (lebih gelap dari biasanya).
53. `}` : Menutup aturan CSS dari img:hover.
54. `h1 {font-size: 2.8rem;` : Ukuran huruf sangat besar. 1rem = 16px, jadi 2.8rem = 45px. Cocok untuk judul utama seperti nama.
55. `font-weight: 800;` : Ketebalan huruf 800 berarti sangat tebal, lebih tebal dari `bold`.
56. `margin: 10px 0 10px;` : Jarak luar, Atas 10px, Kiri & kanan 0, Bawah 10px.
57. `color: white;` : Warna teks putih.
58. `text-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);` :Bayangan pada teks, 0 berarti tidak bergeser kiri/kanan, 3px berarti bayangan turun 3px, 8px berarti blur bayangan, rgba(0,0,0,4) berarti warna hitam 40% transparan.
59. `opacity: 0;` : Awalnya tidak terlihat agar bisa dimunculkan dengan animasi.
60. `animation: fadeIn 0.8s ease-out 0.2s forwards;` : Memulai animasi bernama fadeIn, Durasi 0.8 detik, ease-out berarti gerakan cepat di awal pelan di akhir, 0.2s berarti tunda 0.2 detik sebelum animasi dimulai, forwards berarti setelah animasi selesai, tetap di posisi akhir (tidak kembali transparan).
61. `}` : Menutup bagian h1.
62. `p {font-size: 1.2rem;` : Ukuran teks deskripsi agak besar agar enak dibaca.
63. `margin: 10px auto;` : Jarak atas-bawah 10px, dan rata tengah (karena `auto`).
64. `max-width: 600px;` : Lebar maksimal 600px, biar teks tidak terlalu lebar di layar besar.
65. `opacity: 0;` : Awalnya tidak keliatan.
66. `animation: fadeIn 0.7s ease-out 0.4s forwards;` : Muncul setelah `h1`, dengan jeda 0.4 detik.
67. `}` Menutup bagian p.
68. `h2 {font-size: 1.9rem;` : Ukuran subjudul agak besar, tapi lebih kecil dari `h1`.
69. `margin: 50px 0 25px;` : Jarak atasnya 50px, agar terpisah dari konten sebelumnya.
70. `color: #fff;` : Warna teks putih.
71. `border-bottom: 3px solid rgba(255, 255, 255, 0.6);` : Ada garis bawah yang tipis, agar kelihatan rapi.
72. `padding-bottom: 8px;` : Kasih jarak antara teks dan garis, agar tidak menempel.
73. ` width: fit-content;`Lebarnya pas sesuai teks dan tidak memenuhi layar.
74. `margin-left: auto; margin-right: auto;` : agar rata tengah.
75. `  opacity: 0;` : Awalnya tidak kelihatan.
76. `animation: fadeIn 0.8s ease-out 0.6s forwards;` : Muncul setelah `p`, dengan jeda 0.6 detik.
77. `}` : Menutup bagian `h2`
78. `@keyframes fadeIn {from {opacity: 0; transform: translateY(15px);} to {opacity: 1; transform: translateY(0); } ` : Ini adalah animasi yang dari tidak kelihatan dan turun 15px jadi kelihatan dan naik ke posisi normal.
79. `}` : Menutup animasi.
80. `a {color: #ffffff;` : Warna teks link putih.
81. `padding: 3px 8px;` : kasih ruang kecil di sekitar teks link.
82. `border-radius: 6px;` : Sudutnya membulat, seperti tombol mini.
83. `text-decoration: none;` : Hilangkan garis bawah bawaan link.
84. `font-weight: 600;` :  Teks link agak tebal.
85. `} a:hover { background: #cccccc; color: #ffffff; }` : Saat kursor di atas link latar jadi abu-abu terang, teks tetap putih dan kelihatan bisa diklik. 
86. `}`: Menutup bagian link.
87. `@media (max-width: 480px) { h1 { font-size: 2.2rem; } p { font-size: 1.1rem; } h2 { font-size: 1.6rem; } img { width: 120px; height: 120px; } body { padding: 30px 15px; } }` : Kalau dibuka di HP (layar ≤ 480px). Huruf diperkecil,Foto diperkecil, dan jarak dikurangi agar muat.
88. `</style>` : Menutup bagian CSS.
89. `</html>` : Menutup semua kode HTML dan selesai