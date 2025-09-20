# Analisis file Menggunakan tag 
```
Kode :
<HTML>

Penjelasan :
Membuka dokumen HTML, menandakan bahwa isi file ini adalah kode HTML.
```

```
Kode :
<HEAD><TITLE> contoh JavaScript</TITLE>

Penjelasan :
Bagian <HEAD> berisi informasi tentang halaman. Di dalamnya ada <TITLE> yang menampilkan judul tab browser "Contoh JavaScript".
```

```
Kode :
<script language="JavaScript">
document.write("Program JavaScript Aku di kepala");
</script>

Penjelasan :
Tag <script> digunakan untuk menuliskan kode JavaScript. Di dalamnya ada perintah document.write() yang menuliskan teks langsung ke halaman web. Teks "Program JavaScript Aku di kepala" akan muncul di bagian atas sebelum <BODY> karena berada di dalam <HEAD>.
```

```
Kode :
</HEAD>

Penjelasan :
menutup bagian head
```

```
Kode :
<BODY>

Penjelasan :
Membuka bagian isi halaman web. Semua konten utama biasanya diletakkan di sini.
```

```
Kode :
<script language="JavaScript">
document.write("Program JavaScript Aku di body");
</script>

Penjelasan :
Kode JavaScript kedua, juga memakai document.write(). Kali ini teks "Program JavaScript Aku di body" ditampilkan di dalam bagian body halaman.
```
```
Kode :
</BODY>
</HTML>

Penjelasan :
menutup bagian body dan dokumen HTML secara keseluruhan.
```
## output :
<img src="Gambar Output/output1.jpg">

# Analisis File Event tertentu
```
Kode :
<h1>Mengenal Event Pada Javascript</h1>
<h2> Perograman WEB Event one click</h2>

Pejelasan : 
<h1> → heading utama, menampilkan judul besar.

<h2> → subjudul, lebih kecil dari <h1>.
Hasilnya akan menampilkan tulisan besar di atas halaman.
```

```
Kode :
<button onclick="tampilkan_nama()">klik disini </button>

Penjelasan :
<button> → membuat tombol dengan label "klik disini".

onclick="tampilkan_nama()" → event handler. Saat tombol diklik, akan memanggil fungsi JavaScript bernama tampilkan_nama().
```

```
Kode :
<div id="hasil"></div>

Penjelasan :
Membuat <div> kosong dengan id="hasil". Fungsinya sebagai tempat menampilkan hasil yang akan diisi lewat JavaScript.
```

```
Kode :
<script>
 function tampilkan_nama(){
   document.getElementById("hasil").innerHTML =
   "<h3>Nama Saya Adalah Andi Akram Nur Risal</h3>";
 }
</script>

Penjelasan :
<script> → blok untuk menulis kode JavaScript.

function tampilkan_nama(){...} → mendefinisikan fungsi.

document.getElementById("hasil") → mencari elemen dengan id="hasil".

.innerHTML = ... → mengubah isi elemen tersebut menjadi teks/HTML baru.

Jadi saat tombol diklik, div yang awalnya kosong berubah menampilkan: "<h3>Nama Saya Adalah Andi Akram Nur Risal</h3>"
```
## output :
<img src="Gambar Output/output2.jpg">


# Analisis File Contoh Sederhana
```
Kode :
<script language="JavaScript">
    document.write("Selamat Belajar Angkatan 2019","<br>");
    document.write("JavaScript Pembrograman WEB Teknik Komputer");
</script>

Penjelasan :
<script> → tempat menuliskan kode JavaScript.
language="JavaScript" → digunakan untuk memberi tahu bahwa kode di dalam <script> adalah JavaScript.

document.write("Selamat Belajar Angkatan 2019","<br>");
document.write → menuliskan teks langsung ke halaman web.
"Selamat Belajar Angkatan 2019" → teks yang akan ditampilkan.
"<br>" → memberi baris baru (line break).

document.write("JavaScript Pembrograman WEB Teknik Komputer");
Menuliskan teks kedua di bawah teks pertama.
```
## output
<img src="Gambar Output/output3.jpg">

# Analisis File Memasukkan Data
```
Kode :
<script language="JavaScript">
    <!--
        var nama = prompt("Siapa nama anda?");
        document.write("hai, " + nama );
    -->
</script>

Penjelasan :
<script language="JavaScript"> → mendefinisikan blok JavaScript.

<!-- dan --> adalah komentar dalam HTML.

var nama = prompt("Siapa nama anda?");
prompt(...) → membuka dialog kotak input di browser, meminta user memasukkan teks.
Nilai input user disimpan dalam variabel nama.

document.write("hai, " + nama );
Menuliskan teks ke halaman web.
"hai, " digabung (+) dengan isi variabel nama.
Jika user mengetik Rasul Rajab, maka output di halaman: "hai, Rasul Rajab".
```
## output : 
<img src="Gambar Output/output4.jpg">

# Analisis File Jendela Contoh 1
```
Kode :
<script language="JavaScript">
    <!--
        window.alert("apakah anda ingin meninggalkan laman ini?");
    -->
</script>

Penjelasan :
<script language="JavaScript"> → mendefinisikan blok JavaScript.

<!-- dan --> adalah komentar dalam HTML.

window.alert("apakah anda ingin meninggalkan laman ini?");
window.alert() adalah fungsi JavaScript untuk menampilkan kotak pesan (alert box).
Pesan yang ditampilkan adalah: "apakah anda ingin meninggalkan laman ini?"
```
## output :
<img src="Gambar Output/output5.jpg">

# Analisis File Jendela Contoh 2
```
Kode :
<script language="JavaScript">
    <!--
        var jawaban = window.confirm("Apakah anda sudah yakin? ");
        document.write("Jawaban anda " + jawaban);
    -->
</script>

Penjelasan :
window.confirm("Apakah anda sudah yakin? ");
Memunculkan kotak konfirmasi dengan pesan: "Apakah anda sudah yakin?".
Kotak ini memiliki dua tombol: OK dan Cancel.
Jika user klik OK → fungsi mengembalikan true.
Jika user klik Cancel → fungsi mengembalikan false.
Nilainya disimpan dalam variabel jawaban.

document.write("Jawaban anda " + jawaban);
Menampilkan hasil ke halaman web.
Output akan berupa:
Jawaban anda true (jika user klik OK).
Jawaban anda false (jika user klik Cancel).
```
## output :
<img src="Gambar Output/output6.jpg">

# Analisis File Mendeklarasikan Variabel
```
Kode :
<script language="Javascript">
    <!--
        var VariabelKu;
        var VariabelKu2 = 3;
        VariabelKu = 1234;
        document.write(VariabelKu*VariabelKu2);
    -->
</script>

Penjelasan :
var VariabelKu;
Mendeklarasikan variabel bernama VariabelKu tanpa nilai awal.
Nilainya otomatis undefined.

var VariabelKu2 = 3;
Mendeklarasikan variabel bernama VariabelKu2 dengan nilai awal 3.

VariabelKu = 1234;
Memberi nilai 1234 ke variabel VariabelKu.

document.write(VariabelKu*VariabelKu2);
Mengalikan nilai VariabelKu (1234) dengan VariabelKu2 (3).

Hasil perkalian = 3702.
Ditulis langsung ke halaman web.
```
## output :
<img src="Gambar Output/output7.jpg">

# Analisis File Global Dan Lokal 1
```
Kode :
<script language="Javascript">
    <!--
        var a= 12;
        var b= 4;

        function Perkalian_Dengan2(b){
            a = b * 2;
            return a;
        }

        document.write("dua kali dari ", b, " adalah ", Perkalian_Dengan2(b));
        document.write(" nilai dari a adalah ", a);
    -->
</script>

Penjelasan :
var a = 12;
Membuat variabel global a dengan nilai awal 12.

var b = 4;
Membuat variabel global b dengan nilai 4.

function Perkalian_Dengan2(b){ ... }
Fungsi dengan parameter b.

Di dalam fungsi:
a = b * 2; → mengubah nilai variabel global a menjadi hasil perkalian.
return a; → mengembalikan nilai a.

document.write("dua kali dari ", b, " adalah ", Perkalian_Dengan2(b));
Menampilkan teks ke halaman web.
Fungsi Perkalian_Dengan2(b) dipanggil dengan b = 4.
Hasil perhitungan: a = 4 * 2 = 8.

Output baris pertama:
dua kali dari 4 adalah 8

document.write(" nilai dari a adalah ", a);
Menampilkan nilai terbaru dari variabel a.
Karena a diubah di dalam fungsi, maka sekarang nilainya 8.

Output tambahan:
nilai dari a adalah 8
```

## output :
<img src="Gambar Output/output8.jpg">

# Analisis File Global dan Lokal 2
```
Kode :
<script language="Javascript">
    <!--
        var a = 12;
        var b = 4;

        function Perkalian_Dengan2(b){
            var a = b * 2;
            return a;
        }

        document.write("dua kali dari ", b, " adalah ", Perkalian_Dengan2(b));
        document.write(" nilai dari a adalah ", a);
    -->
</script>

Penjelasan :
var a = 12;
Mendefinisikan variabel global a dengan nilai awal 12.

var b = 4;
Mendefinisikan variabel global b dengan nilai 4.

function Perkalian_Dengan2(b){ ... }
Fungsi menerima parameter b.

Di dalam fungsi:
var a = b * 2;
return a;
Di sini ada deklarasi var a baru → ini membuat variabel lokal, hanya berlaku di dalam fungsi.
Nilai a lokal = b * 2 = 4 * 2 = 8.
return a; → fungsi mengembalikan nilai 8.
Catatan penting: variabel a global (12) tidak berubah, karena variabel a dalam fungsi berbeda (lokal).

document.write("dua kali dari ", b, " adalah ", Perkalian_Dengan2(b));
Menampilkan teks: "dua kali dari 4 adalah 8"

document.write(" nilai dari a adalah ", a);
Menampilkan nilai dari variabel global a.
Karena a global tetap 12 (tidak ikut berubah di fungsi), maka outputnya: "nilai dari a adalah 12"
```
## output :
<img src="Gambar Output/output9.jpg">

# Analisis File Konversi Tipe Data
```
Kode :
var a = parseInt("27");
document.write("1." + a + "<br>");

Penjelasan :
parseInt("27") → mengubah string "27" menjadi bilangan bulat 27 → outputnya 27
```

```
Kode :
a = parseInt("27.5");
document.write("2." + a + "<br>");

Penjelasan :
parseInt("27.5") → membaca hanya bagian bilangan bulat di depan titik → outputnya 27
```

```
Kode :
var a = parseInt("27A");
document.write("3." + a + "<br>");

Penjelasan :
parseInt("27A") → membaca dari kiri, selama berupa angka. Saat ketemu huruf A, parsing berhenti → outputnya 27
```
```
Kode :
a = parseInt("A27.5");
document.write("4." + a + "<br>");

Penjelasan :
parseInt("A27.5") → langsung huruf A → tidak ada angka yang bisa dikonversi → outputnya NaN (Not a Number)
```

```
Kode :
var b = parseFloat("27");
document.write("5." + b + "<br>");

Penjelasan :
parseFloat("27") → mengubah string "27" menjadi angka pecahan → outputnya = 27
```

```
Kode :
b = parseFloat("27.5");
document.write("6." + b + "<br>");

Penjelasan :
parseFloat("27.5") → bisa membaca bilangan desimal penuh →  outputnya = 27.5
```

```
Kode :
var b = parseFloat("27A");
document.write("7." + b + "<br>");

Penjelasan :
parseFloat("27A") → membaca angka 27, berhenti di A  →  outputnya = 27
```

```
Kode :
b = parseFloat("A27.5");
document.write("8." + b + "<br>");

Penjelasan :
parseFloat("A27.5") → string diawali huruf, jadi tidak bisa diparse.  →  outputnya = NaN
```
## output :
<img src="Gambar Output/output10.jpg">

# Analisis File Operasi Aritmatika
```
Kode :
document.write("2 + 3 = " + (2 + 3) );
document.write("<BR>");

Penjelasan :
(2 + 3) → menghitung 2 ditambah 3 = 5.
document.write(...) → menampilkan hasil di halaman web.
"<BR>" → baris baru (enter).
Outputnya = 2 + 3 = 5
```

```
Kode : 
document.write("20 - 3 = " + (20 - 3) );
document.write("<BR>");


Penjelasan :
(20 - 3) → menghitung 20 dikurangi 3 = 17.
Ditampilkan ke layar dengan teks pendukung.
outputnya = 20 - 3 = 17
```

```
Kode :
document.write("20 * 3 = " + (20 * 3) );
document.write("<BR>");


Penjelasan :
(20 * 3) → menghitung 20 dikali 3 = 60.
Ditampilkan ke halaman.
outputnya = 20 * 3 = 60
```

```
Kode :
document.write("40 / 3 = " + (40 / 3) );
document.write("<BR>");


Penjelasan :
(40 / 3) → menghitung 40 dibagi 3, hasilnya bilangan desimal 13.3333....
Ditampilkan ke layar.
outputnya = 40 / 3 = 13.333333333333334
```
## output 
<img src="Gambar Output/output11.jpg">

# Analisis File Operasi Logika Pembanding
```
Kode :
var nilai = prompt("Nilai (0-100): ", 0);

Penjelasan :
prompt(...) → membuka kotak input untuk meminta pengguna memasukkan nilai angka (0–100).
"Nilai (0-100): " → teks yang muncul di kotak input.
0 → nilai default (jika user tidak mengetik apa-apa).
Hasil input disimpan ke variabel nilai.
```

```
Kode :
var hasil = (nilai>=60) ? "Lulus" : "Tidak Lulus";

Penjelasan :
(nilai >= 60) → kondisi logika: apakah nilai lebih besar atau sama dengan 60?
? "Lulus" : "Tidak Lulus" → jika kondisi benar, simpan "Lulus" ke variabel hasil. Jika salah, simpan "Tidak Lulus".
```

```
Kode : 
document.write("Hasil : " + hasil);

Penjelasan : 
document.write(...) → menampilkan teks di halaman web.
Misalnya jika user masukkan 80, maka tampil: "Hasil : Lulus"
Kalau user masukkan 40, maka tampil: "Hasil : Tidak Lulus"
```
# output :
<img src="Gambar Output/output12.jpg">

# Analisis File Tugas No 1
```
Kode :
let angkaString = "123";     
let angka = Number(angkaString);
document.write("String ke Number: " + angka + "<br>");

Penjelasan :
angkaString = "123" → data berupa teks (string).
Number(angkaString) → mengubah string "123" menjadi angka numerik 123. Lalu hasil ditampilkan dengan document.write.
```

```
Kode :
let angka2 = 456;
let stringAngka = String(angka2);
document.write("Number ke String: " + stringAngka + "<br>");

Penjelasan :
angka2 = 456 → data berupa angka (number).
String(angka2) → mengubah angka 456 menjadi "456" (teks).
Ditampilkan ke browser.
```

```
Kode :
let booleanNilai = Boolean(0); 
document.write("0 ke Boolean: " + booleanNilai + "<br>");

Penjelasan :
Boolean(0) → mengubah angka 0 menjadi boolean.
Dalam JavaScript:
0, "" (string kosong), null, undefined, NaN → dianggap false. Selain itu → dianggap true.
Jadi Boolean(0) → false
```

## output :
<img src="Gambar Output/outputTugas1.jpg">

# Analisis File Tugas No 2
```
Kode :
let dataCampuran = ["rasul", 20, true, 3.14];

Penjelasan :
dataCampuran → sebuah array, yaitu struktur data untuk menyimpan banyak nilai.
Isi array:
"rasul" → string (teks), 20 → number (integer), true → boolean, 3.14 → number (desimal).
JavaScript memperbolehkan array berisi campuran tipe data.
```

```
Kode :
document.write("Isi Array:<br>");

Penjelasan :
document.write(...) → menulis teks ke halaman web.
"Isi Array:<br>" → menampilkan judul Isi Array lalu ganti baris.
```

```
Kode :
for (let i = 0; i < dataCampuran.length; i++){
    document.write(dataCampuran[i] + "<br>");
}

Penjelasan :
for (let i = 0; i < dataCampuran.length; i++) → perulangan dari i = 0 hingga i < jumlah elemen.
dataCampuran.length = 4 (karena ada 4 elemen).
dataCampuran[i] → mengambil elemen array berdasarkan indeks:
dataCampuran[0] = "rasul",
dataCampuran[1] = 20,
dataCampuran[2] = true,
dataCampuran[3] = 3.14.
document.write(... + "<br>") → menuliskan tiap elemen di halaman, masing-masing di baris baru.
```

## output :
<img src="Gambar Output/outputTugas2.jpg">

# Analisis File Tugas No 3
```
Kode :
<h3>Kalkulator</h3>
<input type="text" id="angka1" placeholder="Angka pertama">
<input type="text" id="angka2" placeholder="Angka kedua"><br><br>

Penjelasan :
<h3>Kalkulator</h3> → judul halaman.
<input type="text" id="angka1" ...> → kotak input pertama untuk angka pertama, identifikasi dengan id="angka1".
<input type="text" id="angka2" ...> → kotak input kedua untuk angka kedua, dengan id="angka2".
placeholder → teks petunjuk di dalam kotak input.
<br><br> → pindah baris 2 kali.
```

```
Kode :
<button onclick="hitung('+')">+</button>
<button onclick="hitung('-')">-</button>
<button onclick="hitung('*')">*</button>
<button onclick="hitung('/')">/</button>

Penjelasan :
Empat tombol untuk operasi aritmatika dasar: tambah, kurang, kali, bagi.
Setiap tombol memanggil fungsi hitung(...) dengan parameter operator yang sesuai.
Tombol + → hitung('+')
Tombol - → hitung('-')
Tombol * → hitung('*')
Tombol / → hitung('/')
```

```
Kode :
<p>Hasil: <span id="hasil"></span></p>

Penjelasan :
<p> → paragraf untuk menampilkan hasil.
<span id="hasil"></span> → tempat hasil akan ditampilkan oleh JavaScript.
```

```
Kode :
function hitung(operator){
    let a = parseFloat(document.getElementById("angka1").value);
    let b = parseFloat(document.getElementById("angka2").value);
    let hasil = 0;

    if (operator == '+') hasil = a + b;
    else if (operator == '-') hasil = a - b;
    else if (operator == '*') hasil = a * b;
    else if (operator == '/') hasil = a / b;
    
    document.getElementById("hasil").innerText = hasil;
}

Penjelasan :
Mengambil nilai input
document.getElementById("angka1").value → mengambil isi kotak pertama.
document.getElementById("angka2").value → mengambil isi kotak kedua.
parseFloat(...) → mengubah input string menjadi angka pecahan.

Menentukan operasi
if (operator == '+') hasil = a + b; → jika operator tambah, hasilnya penjumlahan.
else if (operator == '-') → pengurangan.
else if (operator == '*') → perkalian.
else if (operator == '/') → pembagian.

Menampilkan hasil
document.getElementById("hasil").innerText = hasil; → menuliskan hasil ke elemen <span id="hasil">.
```

## output :
<img src="Gambar Output/outputTugas3.jpg">

# Analisis File Tugas No 4
```
Kode :
<h3>Hitungan Bangun Ruang</h3>

Penjelasan :
Memberi judul utama halaman.
```

```
Kode :
<h4>Volume Kubus</h4>
<input type="text" id="sisi" placeholder="Sisi kubus">
<button onclick="volumeKubus()">Hitung</button>
<p>Hasil: <span id="hasilkubus"></span></p>

Penjelasan :
User masukkan nilai sisi kubus.
Tombol Hitung memanggil fungsi volumeKubus().
Hasil ditampilkan di <span id="hasilkubus"></span>.
```

```
Kode :
function volumeKubus(){
    let s = parseFloat(document.getElementById("sisi").value);
    document.getElementById("hasilkubus").innerText = s * s * s;
}

Penjelasan :
document.getElementById("sisi").value → ambil nilai input.
parseFloat → ubah string menjadi angka pecahan.
Rumus volume kubus = s × s × s.
Ditampilkan di elemen hasilkubus.
```

```
Kode :
<h4>Volume Balok</h4>
<input type="text" id="panjang" placeholder="Panjang">
<input type="text" id="lebar" placeholder="Lebar">
<input type="text" id="tinggi" placeholder="Tinggi">
<button onclick="volumeBalok()">Hitung</button>
<p>Hasil: <span id="hasilBalok"></span></p>

Penjelasan :
User isi panjang, lebar, dan tinggi.
Tombol hitung memanggil volumeBalok().
Hasil ditampilkan di hasilBalok.
```

```
Kode :
function volumeBalok() {
    let p = parseFloat(document.getElementById("panjang").value);
    let l = parseFloat(document.getElementById("lebar").value);
    let t = parseFloat(document.getElementById("tinggi").value);
    document.getElementById("hasilBalok").innerText = p * l * t; 
}

Penjelasan :
Ambil panjang (p), lebar (l), dan tinggi (t).
Rumus volume balok = p × l × t.
Hasil ditampilkan di hasilBalok.
```

```
Kode :
<h4>Volume Tabung</h4>
<input type="text" id="jari" placeholder="Jari-jari">
<input type="text" id="tinggiTabung" placeholder="Tinggi">
<button onclick="volumeTabung()">Hitung</button>
<p>Hasil: <span id="hasilTabung"></span></p>

Penjelasan :
User isi jari-jari (r) dan tinggi (t).
Tombol hitung memanggil volumeTabung().
Hasil ditampilkan di hasilTabung.
```

```
Kode :
function volumeTabung(){
    let r = parseFloat(document.getElementById("jari").value);
    let t = parseFloat(document.getElementById("tinggiTabung").value);
    document.getElementById("hasilTabung").innerText = (Math.PI * r * r * t).toFixed(2);
}

Penjelasan :
Ambil jari-jari (r) dan tinggi (t).
Rumus volume tabung = π × r² × t.
Math.PI → nilai π (3.14159…).
.toFixed(2) → membatasi hasil ke 2 angka desimal.
```
## output :
<img src="Gambar Output/outputTugas4.jpg">