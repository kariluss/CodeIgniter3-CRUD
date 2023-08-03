<?php
    class EmployeeModel extends CI_Model {
        public function insertEmployee($data) {
            $this -> db -> insert('employee', $data);
        }

        public function getEmployee() {
            $employee = $this -> db -> get('employee');
            return $employee -> result();
        }

        public function editEmployee($id) {
            $employee = $this -> db -> get_where('employee', ['id' => $id]);
            return $employee -> row();
        }

        public function updateEmployee($data, $id) {
            return $this -> db -> update('employee', $data, ['id' => $id]);
        }

        public function deleteEmployee($id) {
            return $this -> db -> delete('employee', ['id' => $id]);
        }
    }
?>