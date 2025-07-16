<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home/map'] = 'Home/map'; // Rute untuk mengakses peta_leaflet

// --- TAMBAHKAN ROUTE BERIKUT INI ---
$route['admin/crud/create'] = 'Admin/crud_create'; // Rute untuk menampilkan form tambah data
$route['admin/crud/store']  = 'Admin/crud_store';  // Rute untuk memproses submit form

// Opsional: Untuk edit dan delete juga, agar eksplisit
$route['admin/crud/edit/(:num)']   = 'Admin/crud_edit/$1';    // Rute untuk edit data berdasarkan ID
$route['admin/crud/delete/(:num)'] = 'Admin/crud_delete/$1';  // Rute untuk hapus data berdasarkan ID

// Jika Anda ingin rute 'admin/crud' tetap berfungsi
$route['admin/crud'] = 'Admin/crud';