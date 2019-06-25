<?php
  class Crud_model extends CI_Model {

    function __construct(){
      $this->load->database();
    }

    public function createData(){
      $data = array(
        'firstName' => $this->input->post('firstName'),
        'lastName' => $this->input->post('lastName'),
        'dob' => $this->input->post('dob'),
        'address' => $this->input->post('address'),
        'phone' => $this->input->post('phone')
      );
      $this->db->insert('data',$data);//here first arrgument 'data' is the table name of database
    }
    public function getAllData(){
      $query = $this->db->get('data');
      return $query->result();
    }

    public function getData($id){
      $this->db->where('id',$id);
      $query = $this->db->get('data');
      return $query->row();

    }
    public function updateData($id){
      $data = array(
        'firstName' => $this->input->post('firstName'),
        'lastName' => $this->input->post('lastName'),
        'dob' => $this->input->post('dob'),
        'address' => $this->input->post('address'),
        'phone' => $this->input->post('phone')
      );
      $this->db->where('id',$id);
      $this->db->update('data',$data);
    }

    public function deleteData($id){
      $this->db->where('id',$id);
      $this->db->delete('data');
    }
  }

 ?>
