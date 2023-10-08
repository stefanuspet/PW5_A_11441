<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login');
});
Route::get('/dashboard', function () {
    return view('Dashboard');
});
Route::get('/gyms', function () {
    return view('Gyms/index', [
        'kelas' => [
            [
                'no' => 1,
                "gambar" => "https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png",
                "nama" => "Body Combat",
                'instruktur' => 'Jolly',
                'ruang' => 'Kelas A',
                'rating' => '5'
            ],
            [
                'no' => 2,
                'gambar' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/dc/83/bc.jpg',
                'nama' => 'Bungee ',
                'instruktur' => 'Agung',
                'ruang' => 'Kelas B',
                'rating' => '3',
            ],
            [
                'no' => 3,
                'gambar' => 'https://fitbod.me/wp-content/uploads/2021/07/yoga-and-the-gym-on-the-same-day.jpg',
                'nama' => 'Yogalates ',
                'instruktur' => 'Raka',
                'ruang' => 'Kelas C',
                'rating' => '4',
            ],
            [
                'no' => 4,
                'gambar' =>
                'https://res.cloudinary.com/display97/image/upload/7930/boxing2-224119.jpeg',
                'nama' => 'Boxing ',
                'instruktur' => 'Tebri',
                'ruang' => 'Kelas D',
                'rating' => '5',
            ]
        ]
    ]);
});

Route::get('/gyms/presensi', function () {
    return view('Gyms/presensi', [
        'kelas' => [
            "title" => "Body Combat ",
            "instruktur" => "Stepanus Petra ",
            "ruang" => "Kelas A ",
            "total_member" => "6",
        ],
        "member" => [
            [
                "nama" => "Caturangga Hutagalung",
                "email" => "Caturangga@gmail.com",
                "notelp" => "081234567890",
                "jenisCard" => "Gold",
                "metodePembayaran" => "Deposit Kelas"
            ],
            [
                "nama" => "Rizky Ramadhan",
                "email" => "Rizky@gmail.com",
                "notelp" => "081234567890",
                "jenisCard" => "Silver",
                "metodePembayaran" => "Deposit Uang"
            ],
            [
                "nama" => "Iqbal Ramadhan",
                "email" => "Iqbal@gmail.com",
                "notelp" => "081234567890",
                "jenisCard" => "Black",
                "metodePembayaran" => "Deposit Kelas"
            ],
            [
                "nama" => "Usman Pradana",
                "email" => "Usman@gmail.com",
                "notelp" => "081234567890",
                "jenisCard" => "Black",
                "metodePembayaran" => "Deposit Uang"
            ],
            [
                "nama" => "Estiawan Dongoran",
                "email" => "Estiawan@gmail.com",
                "notelp" => "081234567890",
                "jenisCard" => "Gold",
                "metodePembayaran" => "Deposit Kelas"
            ],
            [
                "nama" => "Balidin Halim",
                "email" => "Balidin@gmail.com",
                "notelp" => "081234567890",
                "jenisCard" => "Silver",
                "metodePembayaran" => "Deposit Uang"
            ],
        ],
        "eye" => [
            "title" => "Body Combat ",
            "instruktur" => "Stepanus Petra Pambudi",
            "kode" => "210711441",
            "ruang" => "Kelas A ",
        ]
    ]);
});
