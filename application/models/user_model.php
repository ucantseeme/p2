<?php
class user_model extends CI_Model{

  private $table_name = "student";

  public function validate_user($username, $password){
    $this->db->select("*");
    $this->db->where("username", $username);
    $this->db->where("password", $password);
    $query = $this->db->get($this->table_name);
    return $query->row();
  }
}
?>
