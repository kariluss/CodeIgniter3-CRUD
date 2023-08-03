<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class StudentController extends CI_Controller {
        public function index() {
            $this -> load -> model("StudentModel", "stud");
            $student = $this -> stud -> studentData();
            // $student_class = $this -> stud -> studentClass();

            // $student = new StudentModel;
            // $student = $student -> studentData();

            echo "Nome: " . $student;
        }

        public function show ($id) {
            $this -> load -> model("StudentModel", "stud");
            $studentShow = $this -> stud -> studentShow($id);
            echo $studentShow;
        }
    }

?>