<h2> Analisis Tambahan Untuk file Portifolio</h2>

1. `<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">` : Baris ini menghubungkan halaman HTML ke library Boxicons versi 2.1.4 yang disimpan di server CDN (unpkg).
2. `<div class="navbar">` : Membuat sebuah elemen div (kontainer) dengan atribut class="navbar".
3. `<a href="portofolio2.html">Beranda</a>` : Membuat link (anchor tag) yang mengarah ke file portofolio2.html.
4. `<a href="galeri.html">Galeri Foto</a>` : Sama seperti baris sebelumnya, tapi link ini menuju file galeri.html.
5. `</div>` : Menutup elemen <div> tadi, jadi semua link di atas berada di dalam kontainer bernama navbar.
6. `<div class="social-icons">` : Membuat sebuah container <div> dengan class social-icons.
7. `<a href="https://www.linkedin.com/in/rasul-rajab-tekom-e" target="_blank"><i class='bx bxl-linkedin-square'></i></a>` : Baris ini membuat link ke LinkedIn saya yang di buka di tab baru serta menampilkan ikon Linkedln dari baxicons
8. `<a href="https://github.com/Mr-Apostle" target="_blank"><i class='bx bxl-github'></i></a>` : sama seperti baris diatas tetapi tujuannya ke github saya
9. `<a href="mailto:mosajarasul@gmail.com" target="_blank"><i class='bx bxl-gmail'></i></a>` : sama juga tetapi tujuannya ke gmail saya 
10. `<a href="https://instagram.com/_rsull14" target="_blank"><i class='bx bxl-instagram'></i></a>` : sama juga tapi tujuannya ke instagram saya
11. `</div>` : Menutup container yang membungkus semua link sosial media saya.
12. `.navbar {backdrop-filter: blur(12px); ` : Membuat efek blur pada latar belakang navbar.
13. `background: rgba(40, 40, 40, 0.7);` : Warna abu gelap transparan (semi-transparan).
14. ` padding: 15px 30px;` : Jarak dalam (atas-bawah 15px, kiri-kanan 30px).
15. `display: flex;` : Menggunakan flexbox untuk susunan isi.
16. `justify-content: center;` :   Menyusun isi navbar ke tengah.
17. `gap: 25px;` : Jarak antar elemen di dalam navbar.
18. `position: sticky;` : Navbar menempel saat di-scroll.
19. `top: 0;` : Menempel di bagian atas halaman.
20. `z-index: 10; ` : Supaya tampil di atas elemen lain.
21. `box-shadow: 0 4px 15px rgba(0,0,0,0.4);}` :  Bayangan di bawah navbar.
22. `.navbar a {color: white;` : teks berwarna putih.
23. `text-decoration: none;` : Hilangkan garis bawah teks.
24. `padding: 10px 18px;` : Spasi dalam tiap teks.
25. `border-radius: 25px;` : Sudut membulat seperti kapsul.
26. `transition: all 0.35s ease;` : Animasi halus saat berubah.
27. `font-weight: 600;` : Teks lebih tebal.    
28. `letter-spacing: 0.5px;` : Jarak antar huruf sedikit renggang.
29. `position: relative; }` :  Untuk mengatur posisi efek tambahan. 
30. `.navbar a:hover {background: linear-gradient(135deg, #ff9800, #ff5722);` : Saat kursor diarahkan, teks punya gradasi oranye-merah.
31. `color: #fff;` warna teks tetap putih.
32. `box-shadow: 0 4px 12px rgba(255,152,0,0.5);` : Bayangan oranye muncul di bawah teks.
33. `transform: translateY(-2px);` : teks terlihat naik sedikit saat dihover.
34. `h2 {border-bottom: 3px solid transparent;` : Bikin garis bawah “kosong” (tidak terlihat) sebagai dasar.
35. `background: linear-gradient(90deg, #ff9800, #ff5722);` : Kasih background gradasi oranye-merah.
36. `-webkit-background-clip: text;` : Membuat background gradasi hanya menempel pada bentuk huruf.
37. `-webkit-text-fill-color: transparent;` : Isi teks dibuat transparan agar gradasi background muncul.
38. `width: fit-content;` : Lebarnya pas mengikuti panjang teks, tidak penuh ke kanan.
39. `margin: 50px auto 25px;` : Jarak atas 50px, kiri-kanan auto (tengah), bawah 25px.
40. `padding-bottom: 5px;` : Ruang ekstra di bawah teks untuk garis bawah.
41. `font-size: 2rem;` : Ukuran teks lebih besar (2 rem).
42. `position: relative;}` : Agar bisa jadi “induk” posisi untuk elemen ::after.
43. `h2::after {content: '';` : Membuat elemen kosong tambahan setelah teks.
44. `position: absolute;` : Posisi bebas, mengikuti elemen induk (h2).
45.  `bottom: -8px;` : Diletakkan sedikit di bawah teks (8px ke bawah).
46. `left: 0;` : Mulai dari sisi kiri teks.
47. `width: 100%;` : Panjang garis mengikuti lebar teks.
48. `height: 3px;` : Tebal garis 3 piksel.
49. `background: linear-gradient(90deg, #ff9800, #ff5722);` : Garis diberi gradasi oranye-merah.
50. `border-radius: 5px;` : Ujung garis dibuat agak melengkung.
51. `animation: slideIn 1.2s ease forwards;}` : Garis muncul dengan animasi masuk (durasi 1.2 detik).
52. `.social-icons {margin-top: 15px;` : Jarak ke atas sebesar 15px dari elemen sebelumnya.
53. `display: flex;` : Gunakan flexbox untuk tata letak ikon.
54. `justify-content: center;` : Semua ikon ditaruh di tengah horizontal.
55. `gap: 18px;}` : Jarak antar ikon adalah 18px.
56. `.social-icons a {font-size: 2rem;` : Ukuran ikon besar (2 rem ≈ 32px).
57. `color: white;` : Warna ikon default putih.
58. ` transition: all 0.3s ease;}` : Ada animasi halus saat ikon berubah
59. `.social-icons a:hover {color: #ff9800;` : Saat diarahkan kursor, warna berubah oranye.
60. `transform: scale(1.2);}` : Ikon membesar sedikit (20% lebih besar).
61. `@keyframes fadeInDown {` : Mendefinisikan sebuah animasi baru bernama fadeInDown.
62. `from {opacity: 0;transform: translateY(-30px);}` : Kondisi awal animasi (from), opacity 0 : elemen transparan (tidak terlihat), transform translateY(-30px) :  elemen berada 30px lebih tinggi dari posisi normalnya.
63. `to {opacity: 1;transform: translateY(0);}` : Kondisi akhir animasi (to), opacity 1 : elemen sepenuhnya terlihat (jelas).
transform translateY(0) : elemen kembali ke posisi normal (tidak bergeser).
64. `}` : Menutup blok definisi animasi.
65. `@keyframes fadeInUp {` : Mendefinisikan animasi baru bernama fadeInUp.
66. `from {opacity: 0;transform: translateY(30px);}` : Kondisi awal animasi (from), opacity 0 : elemen transparan (tidak terlihat). transform translateY(30px) : elemen bergeser 30px ke bawah dari posisi normal.
67. `to {opacity: 1;transform: translateY(0);}` ; Kondisi akhir animasi (to), opacity 1 ; elemen sepenuhnya terlihat. transform translateY(0) : elemen kembali ke posisi normal (tidak bergeser).
68. `}` : Menutup blok definisi.
69. `@keyframes slideIn {` : Mendefinisikan sebuah animasi baru bernama slideIn.
70. `from { width: 0;}` : Kondisi awal animasi (from), width 0 : elemen mulai dengan lebar 0 (tidak terlihat secara horizontal).
71. `to {width: 100%;} : Kondisi akhir animasi (to), width 100% :  elemen melebar penuh sesuai lebar kontainer induknya.
`}` : Menutup blok animasi.


<h2>Analisis untuk file galeri</h2>

1. `<h1>Foto Saya</h1>` : Membuat judul utama halaman dengan teks "Foto Saya".
2. `<div class="photo-list">` : Membuat sebuah wadah (container) dengan class photo-list. Class ini nantinya bisa dipakai di CSS untuk mengatur tampilan daftar foto.
3. `<img src="foto1.jpg" alt="Foto 1">` : Menampilkan gambar pertama dengan file foto1.jpg. dan teks alternatif "Foto 1"  muncul kalau gambar gagal muncul dimuat.
4. `<img src="foto2.jpg" alt="Foto 2">` : Menampilkan gambar kedua dengan file foto2.jpg, dan teks alternatif "Foto 2".
5. `<img src="foto3.jpg" alt="Foto 3">` : Menampilkan gambar ketiga dengan file foto3.jpg, dan teks alternatif "Foto 3".
6. `</div>` ; Menutup container photo-list.
7. `.photo-list {display: grid;` : Susunan isi foto menggunakan grid.
8. `grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));` : Membagi grid jadi beberapa kolom otomatis, tiap kolom minimal 220px dan maksimal fleksibel (1fr).
9. `gap: 20px;` : Memberi jarak antar foto sebesar 20px.
10. `padding: 20px;` : Memberi ruang di dalam wadah .photo-list sebesar 20px.
11. `}` : Menutup aturan CSS untuk .photo-list.
12. `.photo-list img {width: 100%;` : Gambar menyesuaikan lebar penuh kolom.
13. `height: 450px;` : Tinggi gambar dipaksa 450px.
14. `object-fit: cover;` : Gambar dipotong/diperbesar agar pas kotak tanpa merusak rasio.
15. `border-radius: 15px;` : Sudut gambar dibuat melengkung 15px.
16. `transition: transform 0.3s, box-shadow 0.3s;` : Animasi halus untuk perubahan skala dan bayangan selama 0.3 detik.
17. `cursor: pointer;` : Saat diarahkan kursor, pointer berubah jadi tangan klik.
18. `box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);` : Memberi bayangan lembut di sekitar gambar. 
19. `}` : Menutup aturan CSS untuk .photo-list img.
20. `.photo-list img:hover {transform: scale(1.05);` : Saat di-hover, gambar sedikit membesar (5%).
21. `box-shadow: 0 10px 25px rgba(0, 0, 0, 0.7);` : Bayangan lebih besar dan lebih gelap agar gambar lebih menonjol.
22. `}` : Menutup aturan CSS hover.