<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laundry_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // WAJIB agar $this->db aktif
    }

    public function get_all()
    {
        return $this->db->get('laundry')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('laundry', ['id' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert('laundry', $data);
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update('laundry', $data);
    }

    public function delete($id)
    {
        return $this->db->where('id', $id)->delete('laundry');
    }
}
