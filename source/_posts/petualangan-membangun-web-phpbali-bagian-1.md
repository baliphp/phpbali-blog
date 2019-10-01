---
extends: _layouts.post
section: content
title: Petualangan Membangun Web PHPBali bagian 1
date: 2018-11-03
description: Jika Anda belum mengikuti ceritanya, Anda bisa buka di cerita membangun web PHPBali bagian 0. Salah satu permasalahan di web PHPBali adalah teknik deployment yang bersifat manual yakni mengunggah berkas file termasuk folder vendor ke FTP yang mana memakan waktu dan tidak efisien. Lantas, saya mencari cara untuk memangkasnya.
author: Satya Kresna
---

Jika Anda belum mengikuti ceritanya, Anda bisa buka di cerita membangun web PHPBali bagian 0.
Salah satu permasalahan di web PHPBali adalah teknik deployment yang bersifat manual yakni mengunggah berkas file termasuk folder vendor ke FTP yang mana memakan waktu dan tidak efisien. Lantas, saya mencari cara untuk memangkasnya. Ada dua pilihan:

- Menggunakan CI/CD milik Gitlab ditambah dengan Laravel Deployer.
- Menggunakan fasilitas Github Webhook.

Pilihan pertama, kendalanya adalah repository web PHPBali berada di Github sedangkan CI/CD dilakukan di Gitlab yang mana berbeda layanan. Sejauh ini Gitlab memberikan percobaan gratis untuk CI/CD nya sampai tanggal 22 Maret 2019, setelah itu kami harus membayarnya sesuai paket yang kami pilih per tahun. Hanya saja komunitas kami dibentuk dengan tidak ada dana dan sejauh ini biaya untuk hosting dan domain bersumber dari dana pribadi saya.

<img src="/assets/images/pernyataan-dari-gitlab-untuk-ci-cd-di-github.jpeg" alt="Pernyataan dari Gitlab untuk percobaan CI/CD di Github.">

Detailnya di tautan ini: https://about.gitlab.com/solutions/github/.

Pilihan kedua merupakan opsi yang saya ambil karena langsung dari satu layanan yakni Github dan menggunakan webhook. Tutorial dari servers for hackers yang memenuhi kebutuhan saya. Dengan sedikit modifikasi akhirnya saya berhasil melakukan setup deployment dengan baik. Silahkan buka tautan teknik deployment Laravel dengan Github webhook.

Untuk masalah tempat deployment, saya menggunakan VPS pribadi dan berhasil memangkas uang sebesar Rp 33.000 per bulan serta hanya fokus pada pembayaran VPS pribadi sebesar Rp 75.000 per bulan yang saya beli di Digital Ocean.
Urusan deployment sudah selesai dan berlanjut pada gaya ngoding (coding style). 

Untuk permasalahan ini terdapat 3 cara.

1. Menggunakan file .editorconfig dan menginstall plugin editorconfig di masing-masing editor teks untuk mendeteksi file .editorconfig serta saat kami menyimpan kodingan, file .editorconfig akan melakukan validasi terhadap format kodingan kami.

2. Menggunakan file **.php_cs.dist** yang berisikan aturan rekomendasi PHP (PHP Standard Recommendation) dan untuk merapikan kodingan kami cukup menjalankan perintah `php-cs-fixer fix ./app/Models && php-cs-fixer fix ./app/Http`

3. Menggunakan layanan StyleCI yang otomatis saat pull request akan melakukan pengecekan terhadap gaya ngoding kami sesuai standar PHP dan langsung melakukan perbaikan otomatis dalam bentuk pull request baru. 🤘

Dari hasil di atas, saya pribadi senang dengan hal yang telah saya lakukan seputar deployment Laravel yang menggunakan Github Webhook. Terima kasih kepada Wayan Jimmy sudah membantu dibagian gaya ngoding dan memotivasi saya untuk mempelajari teknik deployment Laravel dengan Github Webhook. 🙏

Terima kasih kepada pembaca yang sudah berkenan membaca petualangan kami membangun web PHPBali. Perjalanan kami masih panjang untuk membuat web kami lebih progresif dan jika Anda ingin berkontribusi bisa melalui issue di repository PHPBali. Mari berkunjung ke website kami di https://phpbali.com dan menjadi anggota komunitas kami via [telegram PHPBali](https://t.me/phpbali).