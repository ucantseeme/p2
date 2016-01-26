<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

  function listData($table_name,$field_name,$field_value,$orderBy='ASC') {
      $items = array();
      $CI =& get_instance();
      if($orderBy) {
          $CI->db->order_by($field_value, $orderBy);
      }
      $query = $CI->db->select("$field_name,$field_value")->from($table_name)->get();
      if ($query->num_rows() > 0) {
          foreach($query->result() as $data) {
              $items[$data->$field_name] = $data->$field_value;
          }
          $query->free_result();
          return $items;
      }
  }
?>
