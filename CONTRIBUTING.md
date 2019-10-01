# Berkontribusi

Terima kasih telah meluangkan waktu untuk membaca panduan berkontribusi di blog komunitas PHPBali. Saat ini, kami hanya menerima bantuan teman-teman dalam bentuk tulisan tentang pengembangan web dan PHP. 

Sebelum melakukan kontribusi, kami harapkan teman-teman sudah terbiasa dengan Git, melakukan mekanisme [pull request](https://www.petanikode.com/github-workflow/), memahami [penggunaan Jigsaw](https://jigsaw.tighten.co/docs/installation/), dan menggunakan [markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet) saat membuat tulisan.

## Mekanisme kontribusi

- Lakukan fork repository dan [pastikan fork tetap update](https://gist.github.com/CristinaSolana/1885435).
- Anda harus menggunakan satu branch untuk satu tulisan. Jika lebih dari satu maka tidak akan diterima.
- Buat satu branch yang berisi satu tulisan dan format nama branch harus menggunakan tanda "-" untuk menggantikan spasi. Misalnya, saya ingin membuat tulisan penggunaan array map dan filter di PHP maka nama branch adalah `penggunaan-array-map-dan-filter-di-php`.

---

## Membuat Konten dan Menambahkan Gambar

Anda diharapkan menulis dengan format markdown dan tempatkan tulisan Anda di dalam folder `source/_posts/` folder.
Di bagian paling atas berisi sebuah kepala YAML yang menentukan bagaimana seharusnya ditampilkan. 
Atribut `title` digunakan untuk menghasilkan tag HTML `title` dan tag OpenGraph untuk setiap halaman.
Atribut `extends` mendefinisikan yang mana parent layout Blade yang akan digunakan. 
Atribut `section` attribute mendefinisikan konten akan ditempatkan padaa "sesi" Blade tertentu.

Berikut adalah format yang telah ditetapkan.

Nama file harus diberi tanda "-" untuk menggantikan spasi dan pastikan dengan ekstensi `.md`. Misalnya nama file adalah `penggunaan-array-map-dan-filter-diphp.md`

```yaml
---
extends: _layouts.post
section: content
title: Apa judulnya?
date: 2018-12-25
description: Berikan deskripsi singkat.
cover_image: /assets/img/post-cover-image-2.png
author: Nama Anda
---
```

Jika tulisan Anda memiliki gambar maka silakan ditambahkan ke dalam folder `/source/assets/images`.

---

## Melakukan Pull Request

- Lakukan git push
- Masuk ke [halaman pull request](https://github.com/baliphp/phpbali-blog/pulls) dan buat pull request.
- Pilih `base: master` dan `compare` adalah nama branch Anda.
- Gunakan judul dari tulisan sebagai judul dari pull request.
- Berikan penjelasan singkat tentang apa yang Anda tulis. Misalnya, `Berikut tulisan saya berjudul Penggunaan Array Map dan Filter di PHP. Mohon direview agar bisa di merge.`.
- Submit pull request dan tunggu hasil dari kami apakah pull request Anda diterima atau ditolak.
- Jika pull request Anda ditolak, kami pasti akan memberikan alasan yang jelas dan kami memohon Anda untuk memperbaikinya. Jika mengalami kendala terkait pull request, silakan chat kami di [Telegram komunitas PHPBali](https://t.me/phpbali).