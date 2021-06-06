<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\House;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        House::insert([
	    [
			"id" => 1,
			"tipe" => 21,
			"lantai" => 1,
			"sertifikasi" => "SHM - Sertifikat Hak Milik",
			"luas_tanah" => 60,
			"luas_bangunan" => 60,
			"harga" => 350000000,
			"alamat" => "Tembalang, Semarang Kota, Jawa Tengah",
			"lokasi_gps" => "-10.43 240.232",
			"deskripsi" => "Dapur granit dan keramic dinding Tandon atas pinguin 750lt",
			"kontak" => "+6281326304242",
		],
		[
			"id" => 2,
			"tipe" => 36,
			"lantai" => 1,
			"sertifikasi" => "SHM - Sertifikat Hak Milik",
			"luas_tanah" => 60,
			"luas_bangunan" => 36,
			"harga" => 180000000,
			"alamat" => "Cikampak ciampea Bogor",
			"lokasi_gps" => "-10.43 240.232",
			"deskripsi" => "Jual perumahan Curug cicadas Cikampak ciampea Bogor 
Sudah Renovasi
Akses terdekat
Fakultas IPB Dramaga
RS .karya bakti Pertiwi Dramaga
RS .Medika Dramaga
Mall Giant Dramaga
Mall Yogya Dramaga
Akses toll Borr",
			"kontak" => "+6285921497708",
		],
		[
			'id' => 3,
			"tipe" => 45,
			"lantai" => 1,
			"sertifikasi" => "SHM - Sertifikat Hak Milik",
			"luas_tanah" => 100,
			"luas_bangunan" => 45,
			"harga" => 425000000,
			"alamat" => "Gianyar, Gianyar Kab., Bali",
			"lokasi_gps" => "-10.43 240.232",
			"deskripsi" => '2 KT / 1 KM
Jalan Paving Blok Lebar 5-6 meter
Listrik PLN
Air Bersih Sumur Bor / PDAM
SHM
IMB
Bisa Cash & KPR
Lokasi perumahan bisa dicari di google map "Perum Pacung Garden Residence',
			"kontak" => "+628123801919",
		],
		[
			'id' => 4,
			"tipe" => 54,
			"lantai" => 1,
			"sertifikasi" => "SHM - Sertifikat Hak Milik",
			"luas_tanah" => 115,
			"luas_bangunan" => 54,
			"harga" => 425000000,
			"alamat" => "Mapanget, Manado Kota, Sulawesi Utara",
			"lokasi_gps" => "-10.43 240.232",
			"deskripsi" => "Lokasi Rumah di Perum Griya Paniki Indah Manado, dekat dengan Bandara Int'l Sam Ratulangi manado dan kawasan Bisnis di Kawanua Manado.",
			"kontak" => "+6282196649888",
		],
		[
			'id' => 5,
			"tipe" => 60,
			"lantai" => 1,
			"sertifikasi" => "SHM - Sertifikat Hak Milik",
			"luas_tanah" => 139,
			"luas_bangunan" => 60,
			"harga" => 500000000,
			"alamat" => "jln aur duri/jalan ikhlas 2 bukit barisan, Tenayan Raya, Pekanbaru Kota, Riau",
			"lokasi_gps" => "-10.43 240.232",
			"deskripsi" => "perumahan sahabat regency (perumahan cluster) .",
			"kontak" => "+6285276199199",
		],
		[
			'id' => 6,
			"tipe" => 70,
			"lantai" => 1,
			"sertifikasi" => "SHM - Sertifikat Hak Milik",
			"luas_tanah" => 104,
			"luas_bangunan" => 70,
			"harga" => 460000000,
			"alamat" => "Tlogo pamukti baru prambanan klaten",
			"lokasi_gps" => "-10.43 240.232",
			"deskripsi" => "Rumah baru proses finishing type 70/104 ,lokasi tlogo lor pamukti baru, strategis 300mtr dari pintu masuk sebelah timur candi prambanan,
belakang hotel prambanan inn, 400mtr dari pasar prambanan, 200mtr dari jalan raya jogja solo, lingkungan pendatang akses jalan lebar mobil bisa simpangan,
dlm komplek mini cluster, dalam kawasan wisata candi prambanan,perdagangan,dan perkantoran, unit terbatas SHMP-IMB 
Free biaya balik nama.
Free pagar depan",
			"kontak" => "+6281227244090",
		],
		[
			'id' => 7,
			"tipe" => 120,
			"lantai" => 2,
			"sertifikasi" => "SHM - Sertifikat Hak Milik",
			"luas_tanah" => 126,
			"luas_bangunan" => 120,
			"harga" => 850000000,
			"alamat" => "Star Safira Regeny Cluster Royal Mansion D9 /8 Bohar Taman Sidoarjo Jawa Timur",
			"lokasi_gps" => "-10.43 240.232",
			"deskripsi" => "Di Jual Rumah Milik Saya Pribadi dan atas nama Saya Sendiri ( bukan perantara) Sertifikat Ready 
tidak dalam agunan di Perumahan Star Safira Regency Cluster Royal Mansion Bohar , 
Taman Sidoarjo Jawa Timur Lengkap beserta Perabotan, 
Lemari, Tempat tidur, Kitchen Set, AC 4 Unit , kursi taman dll.",
			"kontak" => "+6281338544255",
		]
		]);
    }
}
