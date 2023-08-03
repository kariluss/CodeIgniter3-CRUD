<?php 
    class StudentModel extends CI_Model {
        public function studentData() {
            $student_class = $this -> studentClass();
            return $name = "Pedro. His class is: " . $student_class;
        }

        private function studentClass() {
            return $class = "BCA";
        }

        public function studentShow($id) {
            return "User $id";
        }

        public function demo() {
            return $title = "Hello, welcome to page and Im title.";
        }
    }

?>