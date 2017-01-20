<?php
/**
 *
 */
class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('talent_md');
  }

  function index(){
    if($this->session->userdata('logged')==FALSE):
      redirect('admin/login');
    endif;
    $data['profile']='dashboard/profile';
    $data['sidebar']="dashboard/sidebar";
    $data['content']="dashboard/dashboard";
    $this->load->view('admin/index',$data);
  }


  




}

?>
