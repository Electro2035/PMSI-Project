<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Pastikan hanya admin yang boleh mengakses
        if ($this->session->userdata('user_role') !== 'admin') {
            redirect('auth/login');
        }

        // Load model yang sesuai
        $this->load->model('Laundry_model');
    }

    public function crud()
    {
        $data['judul']     = 'Manajemen Data Laundry';
        $data['laundries'] = $this->Laundry_model->get_all();
        $data['content']   = 'admin/crud/table';
        $this->load->view('layout/viewunion', $data);
    }

    public function crud_create()
    {
        $data['judul']   = 'Tambah Data Laundry';
        $data['content'] = 'admin/crud/create';
        $this->load->view('admin/crud/create', $data);
    }

    public function crud_store()
    {
        $this->Laundry_model->insert($this->input->post());
        redirect('admin/crud');
    }

    public function crud_edit($id)
    {
        $data['judul']  = 'Edit Laundry';
        $data['laundry'] = $this->Laundry_model->get_by_id($id);
        $data['content'] = 'admin/crud/edit';
        $this->load->view('admin/crud/edit', $data);
    }

    public function crud_update($id)
    {
        $this->Laundry_model->update($id, $this->input->post());
        redirect('admin/crud');
    }

    public function crud_delete($id)
    {
        $this->Laundry_model->delete($id);
        redirect('admin/crud');
    }
}
