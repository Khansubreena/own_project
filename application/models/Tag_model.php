<?php
  if (!defined('BASEPATH')) exit('NO direct script access allowed');
class Tag_model extends CI_Model {
    public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function insert_data($data){
      $this->db->insert('gift_card', $data);
  }
  // public function get_tag_by_id(int $id){
  //   $this->db->where('id', $id);
  //   $query = $this->db->get('blog_tags');
  //   return $query->row();
  // }
  // public function update(int $id,$data){
  //   $this->db->where('id', $id);
  //   $this->db->update('blog_tags', $data);
  // }
  // public function create(array $data){
  //   $this->db->insert('blog_tags', $data);
  // }
  // public function delete_tag(int $id){
  //   $this->db->where('id', $id);
  //   $this->db->delete('blog_tags');
  // }
  // public function get_tag_name_by_id(int $id){
  //   $this->db->where('id', $id);
  //   $query = $this->db->get('blog_tags');
  //   return $query->row()->title;
  // }
  }