<?php
  /**
   *
   */
  class Talent extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('talent_md');
    }

    function index(){
      $this->daftar();
    }

    function daftar($offset=''){
      if($this->session->userdata('logged')==FALSE):
        redirect('admin/login');
      endif;
      $data['profile']='dashboard/profile';
      $data['sidebar']="dashboard/sidebar";

      $config['base_url']=base_url().'talent/daftar/';
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
    function tambah(){
      if($this->session->userdata('logged')==FALSE):
        redirect('admin/login');
      endif;
      if($this->input->post('submit')):
        $this->form_validation->set_rules('talent_name','Nama Talent','required');
        $this->form_validation->set_rules('talent_hours_start','Jam Masuk','required');
        $this->form_validation->set_rules('talent_hours_finish','Jam Selesai','required');
        $this->form_validation->set_rules('talent_profile','Profil Talent','required');

        if($this->form_validation->run()==TRUE):
          $config['upload_path']='.'.$this->config->item('upload_path_talent');
            $config['allowed_types']=$this->config->item('allowed_types');
            //$config['max_size']=$this->config->item('max_size');
            $config['encrypt_name']=TRUE;


            $this->load->library('image_lib');
            $this->load->helper('file');


            $this->load->library('upload');

            $this->upload->initialize($config);

            if(!$this->upload->do_upload('talent_picture')):
              echo $this->upload->display_errors();
            else:
                $dt_talent=$this->upload->data();
                $talent_nm=$dt_talent['raw_name'];
                $talent_ext=$dt_talent['file_ext'];
                $talent_path=$dt_talent['file_name'];
                $talent_fullpath=$dt_talent['full_path'];

                //Resize Image
                $config['image_library']=$this->config->item('image_library');
                $config['maintain_ratio']=$this->config->item('maintain_ratio');
                $config['width']=500;
                $config['height']=500;

                $config['source_image']=$talent_fullpath;

                $this->image_lib->initialize($config);
                //$this->image_lib->resize();
                $this->image_lib->clear();

                $this->talent_md->add_talent($talent_path);
                redirect('talent');
            endif;
          else:
            $data['msg']="Data Anda Belum Lengkap. Silakan Melengkapi Data Anda Kembali";
        endif;
      endif;
      $data['profile']='dashboard/profile';
      $data['sidebar']="dashboard/sidebar";
      $data['content']="talent/add";
      $this->load->view('admin/index',$data);
    }

    function hapus($id){
      $this->talent_md->delete_talent($id);
      redirect('talent');
    }

    function edit($id){
      $data['dt_read']=$this->talent_md->read_data($id);

      if($this->input->post('submit')):
        $this->form_validation->set_rules('talent_name','Nama Talent','required');
        $this->form_validation->set_rules('talent_hours_start','Jam Masuk','required');
        $this->form_validation->set_rules('talent_hours_finish','Jam Keluar','required');
        $this->form_validation->set_rules('talent_profile','Profile','required');

        if($this->form_validation->run()==true):
          $this->talent_md->update_talent($id);
          $this->session->set_flashdata('message','Data sudah berhasil diubah');
          redirect('talent');
        else:
          $data['error']=validation_errors();
        endif;
      endif;

      $data['profile']='dashboard/profile';
      $data['sidebar']="dashboard/sidebar";
      $data['content']='talent/update';
      $this->load->view('admin/index',$data);
    }
  }

?>
