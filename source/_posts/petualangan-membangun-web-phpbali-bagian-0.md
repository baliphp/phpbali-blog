---
extends: _layouts.post
section: content
title: Petualangan Membangun Web PHPBali bagian 0
date: 2018-10-26
description: 
author: Satya Kresna
---

# Intro
Sudah setengah tahun komunitas PHPBali berdiri dan saya berterima kasih kepada teman-teman yang sudah mendukung secara langsung maupun tidak langsung pada komunitas ini. Sebagai inisiator dari komunitas PHPBali, saya bentuk ini bukan cuma membahas teknologi yang ada di PHP saja tetapi teknologi yang ada di web terlepas dari platform, tools dan lain-lain.

Itulah sebabnya di meetup ketiga saya berkolaborasi dengan BaliJS membahas teknologi yang ada di web serta kami menambahkan sesi baru yakni tukar pikiran. Bagi teman-teman yang belum sempat tonton silahkan lihat [di sini](https://www.facebook.com/pg/balihypertext/videos/).

<img src="../../assets/images/phpbali-site-third-meetup.png" alt="PHPBali site third meetup">

## Mulai

Untuk proses membuat website PHPBali saya dibantu oleh dua orang dan saya berperan sebagai pengarah, tetapi kadang-kadang terlibat ngoding. Kami mengambil website BaliJS sebagai referensi kami membangun web kami.

Biaya yang harus dikeluarkan: 
- Domain phpbali.com seharga 125k/tahun
- Shared hosting seharga 33k/bulan.

Saya membelinya di IDCloudHost dan biaya tersebut berasal dari uang pribadi saya. Untungnya saya sudah bekerja. He he he. Pembuatan web kurang lebih sekitar 3 minggu untuk mencapai MVP. MVP yang kami perlukan antara lain:

- Authentikasi menggunakan langkah umum atau dengan Github.
- Manajemen event dan topik
- Manajemen RSVP
- Manajemen member
- Manajemen konten kode etik
- Verifikasi email menggunakan Mailgun khusus bagi user yang melakukan authentikasi menggunakan langkah umum.

Untuk deployment kami lakukan dengan cara manual yakni upload via FTP. Kami melakukannya di sore hari dan sebelumnya kami down website kami dengan perintah php artisan down.

Manajemen penyimpanan data berupa aset gambar atau file, kami tidak melakukan symlink ke folder storage. Kami melakukan binding ke folder public.

Untuk menguji performa website PHPBali versi 0, kami menggunakan situs webpagetest dan hasilnya kurang memuaskan baik dari sisi mobile dan dekstop walaupun kami menggunakan Laravel page-speed untuk memampatkan tag html.

**[Hasil performa website PHPBali melalui webpagetest di platform mobile](https://www.webpagetest.org/result/181026_0A_ba35012371707c5541c2e78bd3586971/?source=post_page-----ca8a23a1f540----------------------)**

**[Hasil performa website PHPBali melalui webpagetest di platform desktop](https://www.webpagetest.org/result/181026_FN_a6afb68155142332335c7696761eec34/?source=post_page-----ca8a23a1f540----------------------)**

Faktor-faktor yang mempengaruhi performa website menurut saya:
- Gambar poster yang sampai 2 MB (silahkan inspect element). Hal ini terjadi karena kesalahan yang kami lakukan menggunakan intervention image.
- JavaScript dan JQuery yang semestinya tidak perlu dipanggil namun tetapi dipanggil.
- Style CSS yang semestinya tidak perlu dipanggil namun tetapi dipanggil. Kami menggunakan Bootstrap untuk style CSS.
- Font icon seperti font awesome yang dipanggil seperlunya tetapi semuanya dipanggil.
- Shared hosting dan kami kurang mendapatkan kendali penuh untuk VPS

Beberapa dari kami menggunakan teks editor yang berbeda, kurangnya kepedulian pentingnya kode yang rapi dan enak dibaca oleh manusia yang berguna untuk pewarisan project (ingat lomba lari estafet? Kira-kira seperti itu rasanya), penamaan yang campur-campur (Indonesia dan Inggris) yang menyebabkan hasil kualitas kode yang kurang baik.

Banyak yang beranggapan yang penting project jadi dan jalan serta user tidak peduli kodingan kita. Nah, pertanyaannya kalau bukan dari diri kita sendiri yang peduli, lalu siapa lagi? Apa lagi kalau project itu berkelompok.

Namun di balik itu semua saya tetap bersyukur teman-teman yang sudah membantu saya membuat situs phpbali.com untuk berjalan sampai sekarang. Dari cerita ini banyak hal yang bisa diubah ke arah lebih baik secara setahap demi setahap layaknya langkah progresif.

*0 bukanlah menumpuk kegagalan, tetapi 0 adalah awal untuk memulai segalanya.*

Berikut saya perkenalkan tim yang membuat website dan memelihara website.

<img src="../../assets/images/phpbali-site-team.png" alt="PHPBali site team">

Tunggu cerita kami membangun web PHPBali bagian pertama.