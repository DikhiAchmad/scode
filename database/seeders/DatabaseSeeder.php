<?php

namespace Database\Seeders;

use App\Models\HavingClass;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\Quiz;
use App\Models\Study;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::insert([
            [
                'name' => 'Dikhi Achmad Dani',
                'telp' => '089424535234',
                'jenis_kelamin' => 'L',
                'email' => 'dikia656@gmail.com',
                'password' => Hash::make('BetterOne'),
                'status' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ratu',
                'telp' => '08224535234',
                'jenis_kelamin' => 'P',
                'email' => 'fed2@gmail.com',
                'password' => Hash::make('BetterOne'),
                'status' => 'pengajar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'alifia',
                'telp' => '08922535234',
                'jenis_kelamin' => 'P',
                'email' => 'fed@gmail.com',
                'password' => Hash::make('BetterOne'),
                'status' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        Kelas::insert([
            [
                'gambar' => 'banner.jpg',
                'nama_kelas' => 'Belajar PHP untuk Pemula',
                'deskripsi' => 'Berkenalan dengan php, bahasa program yang sangat populer yang digunakan pada bagian back-end...',
                'user_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gambar' => 'banner.jpg',
                'nama_kelas' => 'Belajar PHP untuk Menengah',
                'deskripsi' => 'Berkenalan dengan php, bahasa program yang sangat populer yang digunakan pada bagian back-end...',
                'user_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gambar' => 'banner.jpg',
                'nama_kelas' => 'Belajar PHP Advance',
                'deskripsi' => 'Berkenalan dengan php, bahasa program yang sangat populer yang digunakan pada bagian back-end...',
                'user_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
        Materi::insert([
            [
                'kelas_id' => '1',
                'link_video' => 'https://www.youtube.com/embed/tgbNymZ7vqY',
                'judul' => 'Belajar PHP Dasar Pengenalan Dan Kegunaan PHP',
                'isi' => '<h1 class="header-content">Belajar PHP Dasar Pengenalan Dan Kegunaan PHP</h1>
                <p class="description-content">Selamat datang di tutorial PHP dasar Belajar PHP Part 1 :
                    Pengenalan PHP di malasngoding.com. anda yang sudah mulai memasuki tutorial dasar php
                    ini di asumsikan untuk mempelajari tentang HTML dan CSS dasar terlebih dahulu sebelum
                    melompat ke tutorial PHP. untuk tutorial HTML dan CSS dasar nya sendiri bisa anda ikuti
                    di tutorial-tutorial malasngoding.com. Akan sangat lebih baik jika bahasa pemrograman di
                    pelajari secara bertahap agar mengerti dari tiap dasar dan fungsi nya masing-masing. hal
                    ini dapat mengakibatkan anda menemukan kesulitan dalam mempelajari pemrograman php jika
                    HTML dan CSS dasar belum anda kuasai. sehingga dapat berujung kepada malas ngoding :).
                    Pada artikel Belajar PHP Part 1 : Pengenalan PHP ini akan di jelaskan tentang
                    pengenalan-pengenalan dari bahasa pemrograman PHP. seperti bagaimana bentuk penulisan
                    syntax PHP, sifat dari PHP, sktruktur nya dan bagaimana cara menjalankan file PHP.
                    berikut tentang pengenalan dasar bahasa pemrograman PHP.
                </p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
        Quiz::insert([
            [
                'materi_id' => '1',
                'pertanyaan' => 'sistem penyimpanan informasi data yang besar juga kompleks ?',
                'pilihan_1' => 'server',
                'pilihan_2' => 'hard disk',
                'pilihan_3' => 'RAM',
                'pilihan_4' => 'cloud',
                'jawaban_benar' => 'server',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'materi_id' => '1',
                'pertanyaan' => 'yang manakah media penyimpanan digital ?',
                'pilihan_1' => 'server',
                'pilihan_2' => 'dompet',
                'pilihan_3' => 'coin',
                'pilihan_4' => 'sandal',
                'jawaban_benar' => 'server',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);



        // Study::insert([
        //     'urutan' => 1,
        //     'kelas_id' => 1,
        //     'materi_id' => 1,
        // ]);
    }
}