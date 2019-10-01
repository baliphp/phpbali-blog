# Blog Komunitas PHPBali

Kami migrasi dari website medium PHPBali. Blog ini berisi tentang tulisan pengembangan web dan PHP. Jika Anda tertarik berkontribusi di blog ini silakan [baca panduan kontribusi](/CONTRIBUTING.md) kami.

## Teknologi

Kami menggunakan bantuan Jigsaw (Laravel Static Site Generator), markdown untuk konten, Travis CI untuk melakukan proses deployment, dan Github Pages sebagai tempat menampung hasil deployment.

## Instalasi

Setelah melakukan clone repository, lakukan langkah-langkah berikut:

1. Jalankan perintah `composer install` untuk menginstal paket-paket yang ada di file `composer.json`.
2. Jalankan perintah `npm install` untuk menginstal paket-paket yang ada di file `package.json`.
3. Jalankan perintah `./vendor/bin/jigsaw build` untuk memperoleh hasil website.
4. Jalankan perintah `./vendor/bin/jigsaw serve` untuk melihat hasil website di browser.

*Jika Anda ingin memperoleh dan melihat hasil website secara otomatis, abaikan langkah ke -3 dan -4 dan jalankan perintah `npm run watch`.*