<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;
use App\Models\Siswa;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Pembeli;
use App\Models\Barangdua;
use App\Models\Transaksi;
use App\Models\Template;
use App\Models\Template2;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('/about', function () {
    return '<h1>Halo World</h1>'
    . 'Selamat datang di web app saya<br>'
    . 'Laravel, emang keren.';
});

// buat route basic introduce yourself
Route::get('/biodata', function () {
    return '<h1>Biodata</h1>'
    . 'Nama : Felisha indriayani <br>'
    . 'Tempat Lahir : Bandung <br>'
    . 'Tanggal lahir : 19 Februari 2007 <br>'
    . 'Sekolah : SMK ASSALAAM BANDUNG.';
});

// buat route basic to view
Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetables_page',['buah' => $fruit]);
});

// route parameter: parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk : $name";
});

// route parameter: parameter ditandai dengan {}
Route::get('identitas/{nama}/{bb}/{tb}', function ($nama, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "Ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekurangan berat badan";
    }
    return "Nama : $nama <br>".
            "Berat Badan = $bb <br>".
            "Tinggi Badan = $tb<br>".
            "Nilai BMI =  $bmi <br>".
            "Keterangan = $ket";
});

// Route Optional Parameter -> ditandai dengan ?
Route::get ('myname/{nama?}', function($a = "Felisa"){
    return "my name is $a";
});

// menampilkan data dari database
Route::get('/testmodel', function () {
    $post = Post::all();

    return view('tampil_post', compact('post'));
});

Route::get('/testbarang', function () {
    $barang = Barang::all();

    return view('tampil_barang', compact('barang'));
});

Route::get('/testsiswa', function () {
    $siswa = Siswa::all();
    // $data = Siswa::find(7);
    // $siswa = Siswa::where('jenis_kelamin','like','laki - laki%')->get();
    // $siswa = Siswa::where('alamat','like','rancamanyar%')->get();

    //tambah data
    // $siswa = new Siswa;
    // $siswa->nama = "Bareska harsacandra";
    // $siswa->jenis_kelamin = "laki - laki";
    // $siswa->alamat = "dago atas";
    // $siswa->agama = "islam";
    // $siswa->telepon = 62112;
    // $siswa->email = "bareskahc@gmail.com";
    // $siswa->save();

    return view('tampil_siswa', compact('siswa'));
});


Route::get('/testpengguna', function () {
    $pengguna = Pengguna::all();

    return view('tampil_pengguna', compact('pengguna'));
});

Route::get('/testtelepon', function () {
    $telepon = Telepon::all();

    return view('tampil_telepon', compact('telepon'));
});

Route::get('/testmerek', function () {
    $merek = Merek::all();

    return view('tampil_merek', compact('merek'));
});

Route::get('/testproduk', function () {
    $produk = Produk::all();

    return view('tampil_produk', compact('produk'));
});

Route::get('/testpembeli', function () {
    $pembeli = Pembeli::all();

    return view('tampil_pembeli', compact('pembeli'));
});

Route::get('/testbarangdua', function () {
    $barangdua = Barangdua::all();

    return view('tampil_barangdua', compact('barangdua'));
});

Route::get('/testtransaksi', function () {
    $transaksi = Transaksi::all();

    return view('tampil_transaksi', compact('transaksi'));
});

Route::get('/template', function () {
    $post = Post::all();

    return view('template', compact('post'));
});

Route::get('/template2', function () {
    $produk = Produk::all();

    return view('template2', compact('produk'));
});