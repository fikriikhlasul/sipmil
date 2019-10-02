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
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kordinator'] = $this->db->get_where('user_req_transport', ['user_email' =>  $this->session->userdata('email')])->result_array();
       

        $this->form_validation->set_rules('nama_req', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_trans', 'Jenis Transportasi', 'required');
        $this->form_validation->set_rules('tujuan_trans', 'Tujuan Transportasi', 'required');
        $this->form_validation->set_rules('keperluan_trans', 'Keperluan Transportasi', 'required');
        $this->form_validation->set_rules('req_dari', 'Dari', 'required');
        $this->form_validation->set_rules('req_ke', 'Ke', 'required');
        $this->form_validation->set_rules('tanggal_pinjam', 'Tanggal Pinjam', 'required');
        $this->form_validation->set_rules('jam_pinjam', 'Jam Pinjam', 'required');
        $this->form_validation->set_rules('tanggal_kembali', 'Tanggal Kembali', 'required');
        $this->form_validation->set_rules('jam_kembali', 'Jam Kembali', 'required');
        $this->form_validation->set_rules('kode_proyek', 'Kode Proyek', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kordinator/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'user_email' => $this->input->post('user_email'),
                'nama_req' => $this->input->post('nama_req'),
                'jenis_trans' => $this->input->post('jenis_trans'),
                'tujuan_trans' => $this->input->post('tujuan_trans'),
                'keperluan_trans' => $this->input->post('keperluan_trans'),
                'req_dari' => $this->input->post('req_dari'),
                'req_ke' => $this->input->post('req_ke'),
                'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
                'jam_pinjam' => $this->input->post('jam_pinjam'),
                'tanggal_kembali' => $this->input->post('tanggal_kembali'),
                'jam_kembali' => $this->input->post('jam_kembali'),
                'kode_proyek' => $this->input->post('kode_proyek'),
                'status_req' => 'Waiting Approval'
            ];
            $this->db->insert('user_req_transport', $data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">New Request added!</div>');
            redirect('user/reqtransport');
        }
    }}