<?php
  /**
   *
   */
  class Service_salon_md extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    function set_salon_service(){
      $this->db->set('services_name',$this->input->post('services_name'));
      $this->db->set('services_description',$this->input->post('services_description'));
      $this->db->set('tb_service_categories_service_categories_id',2);
    }

    function add_salon_service($services_picture){
      $this->set_salon_service();
      $this->db->set('services_picture',$this->config->item('upload_path_services').$services_picture);
      return $this->db->insert('tb_services');
    }

    function get_salon_services($num='',$offset=''){
      $this->db->join('tb_service_categories','tb_service_categories.service_categories_id=tb_services.tb_service_categories_service_categories_id');
      return $this->db->get('tb_services');
    }
  }

?>
