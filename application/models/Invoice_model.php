<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice_model extends CI_Model
{
    
     public function getNotif()
    {
//         $query = "SELECT * FROM user_req_transport
// WHERE status_req LIKE 'Approved' or status_req LIKE 'W%';
//                 ";
    	$query = "SELECT user_email, nama_req FROM user_req_transport
WHERE status_req LIKE 'A%'";
        return $this->db->query($query)->row_array();
    }

}
