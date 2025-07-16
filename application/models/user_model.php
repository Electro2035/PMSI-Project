<?php
class User_model extends CI_Model
{
    public function insert($data)
    {
        return $this->db->insert('user', $data);
    }
}
