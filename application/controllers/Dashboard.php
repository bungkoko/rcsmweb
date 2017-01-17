<?php
/**
 *
 */
class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index(){
    if($this->session->userdata('logged')==FALSE):
      redirect('admin/login');
    endif;
    $data['profile']='profile/profile';
    $data['sidebar']="sidebar/sidebar";
    $data['content']="dashboard/dashboard";
    $this->load->view('admin/index',$data);
  }

  function talent(){

  }


}

?>
