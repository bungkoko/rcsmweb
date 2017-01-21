<?php
  /**
   * talent Model
   */
  class Talent_md extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    function get_talent($num='',$offset=''){
      $this->db->order_by('talent_id','asc');
      $this->db->limit($num,$offset);
      return $this->db->get('tb_talent');
    }

    function set_talent(){
      $this->db->set('talent_name',$this->input->post('talent_name'));
      $this->db->set('talent_hours_start',$this->input->post('talent_hours_start'));
      $this->db->set('talent_hours_finish',$this->input->post('talent_hours_finish'));
      $this->db->set('talent_profile',$this->input->post('talent_profile'));
    }

    function add_talent($talent_picture){
      $this->set_talent();
      $this->db->set('talent_picture',$this->config->item('upload_path_talent').$talent_picture);
      return $this->db->insert('tb_talent');
    }

    function read_data($id){
      $this->db->where('talent_id',$id);
      return $this->db->get('tb_talent')->row();
    }

    function delete_talent($id){
      $this->db->where('talent_id',$id);
      $query=$this->db->get('tb_talent');
      $row=$query->row();
      unlink(".$row->talent_picture");
      return $this->db->delete('tb_talent',array('talent_id'=>$id));
    }

    function update_talent($id){
      $this->set_talent();
      $this->db->where('talent_id',$id);
      return $this->db->update('tb_talent');
    }
  }

?>
