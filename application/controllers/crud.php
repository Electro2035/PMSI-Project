<?php
/* defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Hanya admin
        if ($this->session->userdata('user_role') !== 'admin') {
            redirect('auth/login');
        }
        $this->load->model('Laundry_model');
    }

    // List data
    public function index()
    {
        $data['judul']     = 'Manajemen Data Laundry';
        $data['laundries'] = $this->Laundry_model->get_all();
        $data['content']   = 'admin/crud/index';
        $this->load->view('layout/viewunion', $data);
    }

    // Tampilkan form tambah
    public function create()
    {
        $data['judul']   = 'Tambah Laundry';
        $data['content'] = 'admin/crud/create';
        $this->load->view('layout/viewunion', $data);
    }

    // Simpan data baru
    public function store()
    {
        $this->Laundry_model->insert($this->input->post());
        redirect('admin/crud');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $data['judul']  = 'Edit Laundry';
        $data['laundry'] = $this->Laundry_model->get_by_id($id);
        $data['content'] = 'admin/crud/edit';
        $this->load->view('layout/viewunion', $data);
    }

    // Update data
    public function update($id)
    {
        $this->Laundry_model->update($id, $this->input->post());
        redirect('admin/crud');
    }

    // Hapus data
    public function delete($id)
    {
        $this->Laundry_model->delete($id);
        redirect('admin/crud');
    }

}
*/