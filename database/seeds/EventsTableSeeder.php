<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('events')->insert([
        	[
        		'nama' => 'Berbakti Kepada Orang Tua',
        		'alamat' => 'Masjid UI',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-one.jpg',
        		'user_id' => 1,
                'tanggal_mulai' => Carbon::create('2019', '07', '01', '09', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '01', '12', '00'),
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Dua Waktu Singkat',
        		'alamat' => 'Masjid An-Nur',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-two.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '02', '13', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '02', '16', '00'),
        		'user_id' => 1,
        		'created_at' => Carbon::now(),
        	],
            [
                'nama' => '100 Amalan Sunnah',
                'alamat' => 'Masjid Al-Falah',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-three.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '03', '18', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '03', '21', '00'),
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Peringatan Terhadap Dosa',
                'alamat' => 'Masjid Al-Hikmah',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-four.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '04', '20', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '04', '22', '00'),
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Saudaraku Seislam',
                'alamat' => 'Masjid Al-Furqan',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-five.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '05', '05', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '05', '06', '00'),
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
        	[
        		'nama' => 'Adab Penuntut Ilmu',
        		'alamat' => 'Masjid Nurul Fikri',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-six.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '06', '09', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '06', '12', '00'),
        		'user_id' => 2,
        		'created_at' => Carbon::now(),
        	],
        	[
        		'nama' => 'Pahala Puasa Arafah',
        		'alamat' => 'Masjid Nurul Huda',
        		'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-seven.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '07', '13', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '07', '16', '00'),
        		'user_id' => 2,
        		'created_at' => Carbon::now(),
        	],
            [
                'nama' => 'Doa Orang Shaleh',
                'alamat' => 'Masjid Al-Ikhlas',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-eight.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '08', '18', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '08', '21', '00'),
                'user_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Fiqh Tawakkal',
                'alamat' => 'Masjid Al-Umm',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-nine.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '09', '20', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '09', '22', '00'),
                'user_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Fiqh Qurban',
                'alamat' => 'Masjid Al-Ikhlas',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-ten.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '10', '05', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '10', '07', '00'),
                'user_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Macam-Macam Riya',
                'alamat' => 'Masjid Al-Ikhwan',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-one.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '11', '09', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '11', '12', '00'),
                'user_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Khusyuk Dalam Shalat',
                'alamat' => 'Masjid Al-Ikhwan',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-two.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '12', '13', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '12', '16', '00'),
                'user_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Fiqh Muamalah',
                'alamat' => 'Masjid An-Nur',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-three.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '13', '18', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '13', '21', '00'),
                'user_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Tanda-Tanda Kiamat',
                'alamat' => 'Masjid Al-Falah',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-four.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '14', '20', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '14', '22', '00'),
                'user_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Taubat Sempurna',
                'alamat' => 'Masjid Nurul Fikri',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-five.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '15', '05', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '15', '06', '00'),
                'user_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Keajaiban Istighfar',
                'alamat' => 'Masjid Al-Ikhwan',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-six.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '16', '09', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '16', '12', '00'),
                'user_id' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Jalan Kebahagiaan',
                'alamat' => 'Masjid Al-Ikhwan',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-seven.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '17', '13', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '17', '16', '00'),
                'user_id' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Pentingnya Tabayyun',
                'alamat' => 'Masjid An-Nur',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-eight.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '18', '18', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '18', '21', '00'),
                'user_id' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Hati yang Kaya',
                'alamat' => 'Masjid Al-Falah',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-nine.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '19', '20', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '19', '22', '00'),
                'user_id' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Dahsyatnya Sedekah',
                'alamat' => 'Masjid Nurul Fikri',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-ten.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '20', '05', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '20', '06', '00'),
                'user_id' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Motivasi Berhijrah',
                'alamat' => 'Masjid Al-Ikhwan',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-one.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '21', '09', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '21', '12', '00'),
                'user_id' => 5,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Bahaya Syirik',
                'alamat' => 'Masjid Al-Ikhwan',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-two.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '22', '13', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '22', '16', '00'),
                'user_id' => 5,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Bagaimana Menyikapi Perbedaan',
                'alamat' => 'Masjid An-Nur',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-three.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '23', '18', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '23', '21', '00'),
                'user_id' => 5,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Keutamaan Doa',
                'alamat' => 'Masjid Al-Falah',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-four.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '24', '20', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '24', '22', '00'),
                'user_id' => 5,
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => 'Prinsip Dasar Aqidah',
                'alamat' => 'Masjid Nurul Fikri',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'gambar' => 'image-five.jpg',
                'tanggal_mulai' => Carbon::create('2019', '07', '25', '05', '00'),
                'tanggal_selesai' => Carbon::create('2019', '07', '25', '06', '00'),
                'user_id' => 5,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
