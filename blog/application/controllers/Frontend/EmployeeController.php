<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class EmployeeController extends CI_Controller {
        public function index() {
            $this -> load -> view('templates/header');

            $this -> load -> model('EmployeeModel', 'emd');
            $data['employee'] = $this -> emd -> getEmployee();

            $this -> load -> view('frontend/employee', $data);
            $this -> load -> view('templates/footer');
        }

        public function create() {
            $this -> load -> view('templates/header');
            $this -> load -> view('frontend/create');
            $this -> load -> view('templates/footer');           
        }

        public function store() {
            $this -> form_validation ->set_rules('firstName', 'First Name', 'required');
            $this -> form_validation ->set_rules('lastName', 'Last Name', 'required');
            $this -> form_validation ->set_rules('phoneNum', 'Phone No.', 'required');
            $this -> form_validation ->set_rules('emailID', 'Email ID', 'required');

            if ($this -> form_validation -> run()) {
                $data = [
                    'firstName' => $this -> input -> post('firstName'),
                    'lastName' => $this -> input -> post('lastName'),
                    'phoneNum' => $this -> input -> post('phoneNum'),
                    'emailID' => $this -> input -> post('emailID')
                ];

                $this -> load -> model('EmployeeModel', 'emd');
                $this -> emd -> insertEmployee($data);
                $this -> session -> set_flashdata('status', 'Dados inseridos com sucesso');
                redirect(base_url('employee'));
            } else {
                $this -> create();
            }
        }

        public function edit($id) {
            $this -> load -> model('EmployeeModel', 'emd');
            $data['employee'] = $this -> emd -> editEmployee($id);

            $this -> load -> view('templates/header');
            $this -> load -> view('frontend/edit', $data);
            $this -> load -> view('templates/footer'); 
        }

        public function update($id) {
            $this -> form_validation ->set_rules('firstName', 'First Name', 'required');
            $this -> form_validation ->set_rules('lastName', 'Last Name', 'required');
            $this -> form_validation ->set_rules('phoneNum', 'Phone No.', 'required');
            $this -> form_validation ->set_rules('emailID', 'Email ID', 'required');

            if ($this -> form_validation -> run()) {
                $data = [
                    'firstName' => $this -> input -> post('firstName'),
                    'lastName' => $this -> input -> post('lastName'),
                    'phoneNum' => $this -> input -> post('phoneNum'),
                    'emailID' => $this -> input -> post('emailID')
                ];

                $this -> load -> model('EmployeeModel', 'emd');
                $this -> emd -> updateEmployee($data, $id);
                $this -> session -> set_flashdata('status', 'Dados editados com sucesso');
                redirect(base_url('employee'));
            } else {
                $this -> edit($id);
            }
        }

        public function delete($id){
            $this -> load -> model('EmployeeModel', 'emd');
            $this -> emd -> deleteEmployee($id);
            redirect(base_url('employee'));
        }
    }
?>