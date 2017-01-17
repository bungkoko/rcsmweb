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

  function talent($offset=''){
    $data['profile']='dashboard/profile';
    $data['sidebar']="dashboard/sidebar";

    $config['base_url']=base_url().'dashboard/talent/';
    $config['total_rows']=$this->talent_md->get_talent()->num_rows();
    $config['per_page']='10';
    $config['num_links']='6';

    $this->pagination->initialize($config);
    $data['pagination']=$this->pagination->create_links();

    $data['gt_talent']=$this->talent_md->get_talent($config['per_page'],$offset);
    $data['offset']=$offset;

    $data['content']="talent/grid";
    //$data['talent']='talent/grid';

    $this->load->view('admin/index',$data);
  }


}

?>
