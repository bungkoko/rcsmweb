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
  }

?>
