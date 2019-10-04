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
   public function accreq($id)
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
            $this->db->where('id',$id);
             $this->db->update('user_req_transport', $data);
            $this->session->set_flashdata('flash', 'Request Changed!');
            redirect('kordinator',$id);
        }
    }
    public function rejectreq($id)
    {       
        
         $this->db->set('status_req','Rejected' );
         $this->db->set('color','red' );
            $this->db->where('id', $id);
            $this->db->update('user_req_transport');
        $this->session->set_flashdata('flash', 'You Rejected The User Request!');
        redirect('kordinator',$id);
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
    public function daily()
    {
        $tgl    =date("Y-m-d");


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->get_where('user_req_transport', ['tanggal_pinjam' =>  $tgl])->result_array();
       
        
        $this->load->view('kordinator/daily',$data);
    }

    public function myprofile()
{

     $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
         // $this->load->model('Invoice_model', 'uid');
         // $data['invoice'] = $this->uid->getNotif();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kordinator/myprofile', $data);
        $this->load->view('templates/footer');
    }
     public function editprofile()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userx'] = $this->db->get_where('user_req_transport', ['user_email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kordinator/editprofile', $data);
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
            $this->db->set('nama_req', $name);
            $this->db->where('user_email', $email);
            $this->db->update('user_req_transport');

            $this->session->set_flashdata('flash', 'Your profile has been updated!');
            redirect('kordinator/myprofile');
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
            $this->load->view('kordinator/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('kordinator/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('kordinator/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('flash', 'Password changed!');
                    redirect('kordinator/changepassword');
                }
            }
        }
    }


}