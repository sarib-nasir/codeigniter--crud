<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Crud_model');
    }
	public function index() {
      $data['result'] = $this->Crud_model->getAllData();
      $this->load->view('templates/header');
	    $this->load->view('pages/CrudView', $data);
      $this->load->view('templates/footer');
    }
    public function create() {
      $this->form_validation->set_rules('firstName',' firstname','required');
      $this->form_validation->set_rules('lastName','lastname','required');
      $this->form_validation->set_rules('dob','date of birth','required');
      $this->form_validation->set_rules('address','address','required');
      $this->form_validation->set_rules('phone','phone','required');

      if ($this->form_validation->run()==TRUE) {
        $this->Crud_model->createData();
        redirect(base_url().'index.php/CrudController');
      }else{
        redirect(base_url().'index.php/CrudController');
      }
      // redirect(base_url());
    }
    public function edit($id) {
      $data['row'] = $this->Crud_model->getData($id);
      $this->load->view('templates/header');
      $this->load->view('pages/CrudEdit',$data);
      $this->load->view('templates/footer');
    }
    public function update($id) {
      $this->form_validation->set_rules('firstName',' firstname','required');
      $this->form_validation->set_rules('lastName','lastname','required');
      $this->form_validation->set_rules('dob','date of birth','required');
      $this->form_validation->set_rules('address','address','required');
      $this->form_validation->set_rules('phone','phone','required');

      if ($this->form_validation->run()==TRUE) {
        $this->Crud_model->updateData($id);
        redirect(base_url().'index.php/CrudController');
      }else{
        $this->load->view('templates/header');
        $this->load->view('pages/CrudEdit');
        $this->load->view('templates/footer');
      }

      // redirect(base_url());
    }
    public function delete($id){
      $this->Crud_model->deleteData($id);
      redirect(base_url().'index.php/CrudController');
      //redirect(base_url());
    }

}
