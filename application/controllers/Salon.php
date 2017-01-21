<?php
/**
 *
 */
class Salon extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('service_salon_md');
  }

  function index(){
    $this->daftar();
  }
  function daftar($offset=''){
    if($this->session->userdata('logged')==FALSE):
      redirect('admin/login');
    endif;

    $data['profile']='dashboard/profile';
    $data['sidebar']='dashboard/sidebar';

    $config['base_url']=base_url().'salon/daftar/';
    $config['total_rows']=$this->service_salon_md->get_salon_services()->num_rows();
    $config['per_page']='10';
    $config['num_links']='6';

    $this->pagination->initialize($config);
    $data['pagination']=$this->pagination->create_links();

    $data['gt_salon']=$this->service_salon_md->get_salon_services($config['per_page'],$offset);
    $data['offset']=$offset;

    $data['content']="services/salon/grid";
    $this->load->view('admin/index',$data);
  }

  function tambah(){
    if($this->input->post('submit')):
      $this->form_validation->set_rules('services_name', 'Title Service','required');
      $this->form_validation->set_rules('services_description','Deskripsi','required');
      
    endif;
  }
}

?>
