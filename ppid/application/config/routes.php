<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'beranda';
$route['in/Setiap-Saat'] = 'kategori/Setiap-Saat';
$route['in/Berkala'] = 'kategori/Berkala';
$route['in/Serta-Merta'] = 'kategori/Serta-Merta';
$route['in/Dikecualikan'] = 'kategori/Dikecualikan';

$route['l/alur_permohonan'] = 'layananio/alur_permohonan';
$route['l/cek_permohonan'] = 'layananio/cek_permohonan';
$route['l/ringkasan_permohonan'] = 'layananio/ringkasan_permohonan';


$route['p/dasar_hukum'] = 'profile/dasar_hukum';
$route['p/profile_singkat'] = 'profile/profile_singkat';
$route['p/tugas'] = 'profile/tugas';
$route['p/struktur'] = 'profile/struktur';
$route['p/visi_misi'] = 'profile/visi_misi';

$route['r/list_regulasi'] = 'regulasi/list_regulasi';

$route['sl/Hak-dan-Kewajiban-Pemohon-Informasi'] = 'standart_layanan/Hak-dan-Kewajiban-Pemohon-Informasi';
$route['sl/Hak-dan-Kewajiban-Bawaslu-dalam-Pelayanan-Informasi'] = 'standart_layanan/Hak-dan-Kewajiban-Bawaslu-dalam-Pelayanan-Informasi';
$route['sl/Maklumat-Pelayanan'] = 'standart_layanan/Maklumat-Pelayanan';
$route['sl/Prosedur-Pelayanan-Informasi'] = 'standart_layanan/Prosedur-Pelayanan-Informasi';
$route['sl/Prosedur-Pengajuan-Keberatan'] = 'standart_layanan/Prosedur-Pengajuan-Keberatan';
$route['sl/Prosedur-Permohonan-Penyelesaian-Sengketa-Informasi'] = 'standart_layanan/Prosedur-Permohonan-Penyelesaian-Sengketa-Informasi';
$route['sl/Waktu-Layanan'] = 'standart_layanan/Waktu-Layanan';
$route['sl/Biaya-Layanan'] = 'standart_layanan/Biaya-Layanan';



$route['m/login'] = 'Auth/login';
$route['m/registrasi'] = 'Auth/registrasi';



$route['ac/simpan'] = 'Auth/registrasi_simpan';
$route['ac/verivikasi'] = 'Auth/login_ac';


$route['u/dashboard'] = 'user/dashboard';


$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
