<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home/index';

$route['home'] = 'Home/index';
$route['profile'] = 'Profile/index';

//user & login
$route['user'] = 'User/index';
$route['login'] = 'Login/index';

//master
$route['strategis'] = 'Strategis/index';
$route['jabatan'] = 'Jabatan/index';
$route['individu'] = 'Individu/index';
$route['usulan'] = 'Usulan/index';

//laporan
$route['laporanbrg'] = 'laporanbrg';
$route['laporanprw'] = 'laporanprw';
$route['laporanprb'] = 'laporanprb';

//$route['perawatan/tambah'] = 'perawatan/dataperawatan';
$route['perawatan/form_tambah'] = 'perawatan/tambahperawatan';

$route['(:any)'] = 'gagal/index/$1';
$route['404_override'] = 'Gagal/index';
$route['translate_uri_dashes'] = FALSE;