<?php
/**
 * Login Model
 */
class Login_md extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function check_user($username,$password){
    $this->db->where('admin_username',$username);
    $this->db->where('admin_password',$password);
    return $this->db->get('tb_admin')->row();
  }
}

?>
