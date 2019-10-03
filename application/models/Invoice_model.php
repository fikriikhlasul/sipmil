<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice_model extends CI_Model
{
    
     public function getNotif($id)
    {
        $query = "SELECT * FROM user_req_transport
WHERE status_req LIKE 'Approved' or status_req LIKE 'W%';
                ";
        return $this->db->query($query)->num_rows();
    }

}
