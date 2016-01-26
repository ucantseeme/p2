<?php
class Post_model extends CI_Model{

  private $table_name = "posts";

  public function getPosts(){
    $this->db->select("*");
    $query = $this->db->get($this->table_name);
    if($query->num_rows()>0){
      return $query->result();
    }else{
      return false;
    }
  }
}
?>
