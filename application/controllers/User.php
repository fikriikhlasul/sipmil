<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function reqtransport()
    {
        $data['title'] = 'Request Transportation';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['req'] = $this->db->get_where('user_req_transport', ['user_email' =>  $this->session->userdata('email')])->result_array();
       

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
            $this->load->view('user/reqtransport', $data);
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
                'status_req' => 'Waiting Approval',
                'date_created' => time()
            ];
            $this->db->insert('user_req_transport', $data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">New Request added!</div>');
            redirect('user/reqtransport');
        }
    }
    // public function editreq()
    // {
    //     $data['title'] = 'Change Password';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //      $data['editreq'] = $this->db->get_where('user_req_transport', ['user_email' =>  $this->session->userdata('email')])->result_array();
    //     $this->form_validation->set_rules('nama_req', 'Nama', 'required');
    //     $this->form_validation->set_rules('jenis_trans', 'Jenis Transportasi', 'required');
    //     $this->form_validation->set_rules('tujuan_trans', 'Tujuan Transportasi', 'required');
    //     $this->form_validation->set_rules('keperluan_trans', 'Keperluan Transportasi', 'required');
    //     $this->form_validation->set_rules('req_dari', 'Dari', 'required');
    //     $this->form_validation->set_rules('req_ke', 'Ke', 'required');
    //     $this->form_validation->set_rules('tanggal_pinjam', 'Tanggal Pinjam', 'required');
    //     $this->form_validation->set_rules('jam_pinjam', 'Jam Pinjam', 'required');
    //     $this->form_validation->set_rules('tanggal_kembali', 'Tanggal Kembali', 'required');
    //     $this->form_validation->set_rules('jam_kembali', 'Jam Kembali', 'required');
    //     $this->form_validation->set_rules('kode_proyek', 'Kode Proyek', 'required');

    //      if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('user/reqtransport', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $data =
    //             'jenis_trans' => $this->input->post('jenis_trans'),
    //             'tujuan_trans' => $this->input->post('tujuan_trans'),
    //             'keperluan_trans' => $this->input->post('keperluan_trans'),
    //             'req_dari' => $this->input->post('req_dari'),
    //             'req_ke' => $this->input->post('req_ke'),
    //             'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
    //             'jam_pinjam' => $this->input->post('jam_pinjam'),
    //             'tanggal_kembali' => $this->input->post('tanggal_kembali'),
    //             'jam_kembali' => $this->input->post('jam_kembali'),
    //             'kode_proyek' => $this->input->post('kode_proyek')
    //         ];
    //                  $this->db->where('user_email', $this->input->post('user_email'));
    //                  $this->db->update('user_req_transport', $data);

    //                 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Request changed!</div>');
    //                 redirect('user/editreq');
    //             }
    //         }
 public function editreq()
    {
        $data['title'] = 'Request Transportation';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['editreq'] = $this->db->get_where('user_req_transport', ['user_email' =>  $this->session->userdata('email')])->row_array();
       

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
            $this->load->view('user/editreq', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'jenis_trans' => $this->input->post('jenis_trans'),
                'tujuan_trans' => $this->input->post('tujuan_trans'),
                'keperluan_trans' => $this->input->post('keperluan_trans'),
                'req_dari' => $this->input->post('req_dari'),
                'req_ke' => $this->input->post('req_ke'),
                'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
                'jam_pinjam' => $this->input->post('jam_pinjam'),
                'tanggal_kembali' => $this->input->post('tanggal_kembali'),
                'jam_kembali' => $this->input->post('jam_kembali'),
                'kode_proyek' => $this->input->post('kode_proyek')
            ];
            $this->db->where('id', $this->input->post('id'));
             $this->db->update('user_req_transport', $data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Request Changed!</div>');
            redirect('user/reqtransport');
        }
    }
    public function deletereq($id)
    {
        $this->db->delete('user_req_transport', ['id' => $id]);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Request Deleted!</div>');
        redirect('user/reqtransport');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user');
        }
    }


    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
