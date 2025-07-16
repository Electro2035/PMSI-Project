<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('laundry_model');

        // Cek apakah user sudah login
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login'); // paksa login
        }
    }

    public function index()
    {
        $data = array(
            'judul' => 'WebGIS Trainning',
            'content' => 'web/home', // or 'web/home' depending on actual path
            'laundries' => $this->laundry_model->get_all()
        );
        $this->load->view('layout/viewunion', $data, FALSE); // This is how about.php works
    }

    public function about()
    {
        $data = array(
            'judul' => 'Tentang Kami - E-Laundry',
            'content' => 'web/about' // ini view yang akan kamu buat nanti
        );
        $this->load->view('layout/viewunion', $data, FALSE);
    }


    public function test_koneksi()
    {
        $this->load->database();
        if ($this->db->conn_id) {
            echo "✅ Berhasil terhubung ke database!";
        } else {
            echo "❌ Gagal koneksi ke database!";
        }
    }

    public function tampilkan_laundry()
    {
        $this->load->model('laundry_model');
        $data['laundries'] = $this->laundry_model->get_all();
        $this->load->view('home', $data);
    }

        public function map() 
    {
        $data = array(
            'judul' => 'Peta Lokasi Laundry',
            'content' => 'peta_leaflet' // Ini akan memuat application/views/peta_leaflet.php
        );
        $this->load->view('peta_leaflet');
    }

}



