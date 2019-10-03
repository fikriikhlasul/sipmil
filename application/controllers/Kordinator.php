<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kordinator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'User Request List';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userkor'] = $this->db->get('user')->result_array();
        $data['kordinator'] = $this->db->get_where('user_req_transport', ['user_email' =>  $this->session->userdata('email')])->result_array();
       

     
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kordinator/index', $data);
            $this->load->view('templates/footer');
        } 
    }
   public function accreq()
    {
        $data['title'] = 'Request Transportation';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['accreq'] = $this->db->get_where('user_req_transport', ['user_email' =>  $this->session->userdata('email')])->row_array();
       

        $this->form_validation->set_rules('no_polisi', 'No Polisi', 'required');
        $this->form_validation->set_rules('nama_supir', 'Nama Supir', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kordinator/accreq', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'status_req'=> 'Approved',
                'color'=> 'green',
                'no_polisi' => $this->input->post('no_polisi'),
                'nama_supir' => $this->input->post('nama_supir')
            ];
            $this->db->where('id', $this->input->post('id'));
             $this->db->update('user_req_transport', $data);
            $this->session->set_flashdata('flash', 'Request Changed!');
            redirect('user/reqtransport');
        }
    }
    public function rejectreq($id)
    {       
        
         $this->db->set('status_req','Rejected' );
         $this->db->set('color','red' );
            $this->db->where('id', $id);
            $this->db->update('user_req_transport');
        $this->session->set_flashdata('flash', 'You Rejected The User Request!');
        redirect('kordinator').$id;
    }

    public function detailreq($id)
    {
        $data['title'] = 'List User Request';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['detailreq'] = $this->db->get_where('user_req_transport', ['user_id' =>  $id])->result_array();
       

        


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kordinator/detailreq', $data);
            $this->load->view('templates/footer');
        } 
    }
}