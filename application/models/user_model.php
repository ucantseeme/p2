<?php
class User_model extends CI_Model{

  private $table_name = "users";

  public function validate_user($username, $password){
    $password = md5($password);
    $this->db->select("*");
    $this->db->where("username", $username);
    $this->db->where("password", $password);
    $query = $this->db->get($this->table_name);
    if($query->num_rows()==1){
      return $query->result();
    }else{
      return false;
    }
  }

  public function registerUser($username, $email, $password){
    $password = md5($password);
    $query = "INSERT INTO $this->table_name(username, email, password) VALUES ('$username', '$email', '$password')";
    $this->db->query($query);
    return true;
  }
}
?>
