# Analisis Sistem Turnamen Esport Lokal

## 1. Latar Belakang

Turnamen Esport lokal saat ini mengalami pertumbuhan yang pesat di berbagai wilayah Indonesia. Namun, penyelenggaraan turnamen seringkali dilakukan secara manual atau menggunakan tools yang belum terintegrasi, sehingga menyulitkan dalam manajemen data peserta, pertandingan, dan hasil.

## 2. Tujuan

Membuat sistem manajemen turnamen esport lokal berbasis web menggunakan Laravel 12 dan Filament, yang memanfaatkan berbagai struktur data untuk optimalisasi pengelolaan data seperti:

* Array
* Stack
* Queue
* Tree
* Graph
* Searching

## 3. Ruang Lingkup

* Pendaftaran game dan turnamen
* Pendaftaran tim dan pemain
* Penjadwalan pertandingan (match)
* Simulasi antrean pertandingan (queue)
* Penelusuran jalur eliminasi (tree)
* Relasi antar tim dan pertandingan (graph)

## 4. Teknologi dan Tools

* Laravel 12
* Filament Admin Panel
* MySQL
* PHP 8.2
* Struktur Data: array, stack, queue, tree, graph, searching

## 5. Struktur Data yang Digunakan

| Struktur Data | Implementasi                                             |
| ------------- | -------------------------------------------------------- |
| Array         | Menyimpan daftar pemain, daftar tim sementara            |
| Stack         | Undo log pendaftaran atau pembatalan pertandingan        |
| Queue         | Antrean pertandingan berdasarkan waktu pendaftaran       |
| Tree          | Struktur eliminasi (bracket knockout)                    |
| Graph         | Hubungan antar tim dalam grup atau liga                  |
| Searching     | Mencari tim, pemain, atau match berdasarkan ID atau nama |

## 6. Entitas Utama

* Game
* Tournament
* Team
* Player
* Match (Matche)
* MatchQueue
* MatchTree

## 7. Relasi ERD (Gambaran Singkat)

* **Game** memiliki banyak **Tournament**
* **Tournament** memiliki banyak **Match** dan **Team**
* **Team** memiliki banyak **Player**
* **Match** melibatkan dua **Team**
* **MatchQueue** berisi antrean pertandingan (FIFO)
* **MatchTree** merepresentasikan struktur knockout turnamen

## 8. Kesimpulan

Sistem ini akan membantu penyelenggara turnamen lokal dalam mengelola event dengan lebih efektif dan efisien, serta menjadi sarana edukatif dalam mengimplementasikan berbagai konsep struktur data ke dalam proyek nyata berbasis Laravel dan Filament.