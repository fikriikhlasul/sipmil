<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice_model extends CI_Model
{
    public function total_rows($q= NULL)
    {
       $this->db->like('id',$q);
       $this->db->like('user_id',$q);
       $this->db->like('user_email',$q);
       $this->db->like('nama_req',$q);
       $this->db->like('jenis_trans',$q);
       $this->db->like('keperluan_trans',$q);
       $this->db->like('req_dari',$q);
       $this->db->like('id',$q);

    }
}
