<?php
/**
 * Admin Controller
 */
class Admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('login_md');
  }

  function index(){
    $this->login();
  }

  function login(){
    if($this->session->userdata('logged')==TRUE):
      redirect('dashboard');
    endif;
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username','username','required');
    $this->form_validation->set_rules('password','password','required');

   /*check User*/
    if($this->form_validation->run()==TRUE):
     $username=$this->input->post('username');
     $password=md5($this->input->post('password'));

     /*check user dari database*/
     $query=$this->login_md->check_user($username,$password);
     if(count($query)):
       $user_data=array('username'=>$query->admin_username,
                         'display_name'=>$query->admin_display_fullname,
                         'logged'=>TRUE
       );
       $this->session->set_userdata($user_data);
       redirect('dashboard');
     else:
       $data['error']="Username atau Password Tidak sesuai dengan database";
     endif;
   else:
     $data['error']=validation_errors();
   endif;
   $this->load->view('admin/login');
  }

  function logout(){
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('display_name');
    $this->session->unset_userdata('logged');
    redirect('admin/login');
  }

}

?>
