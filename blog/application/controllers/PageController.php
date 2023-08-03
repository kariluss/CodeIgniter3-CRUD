<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class PageController extends CI_Controller {
        public function index() {
            echo "Teste Index";
        }

        public function about() {
            echo "Teste About";
        }

        public function blog($blog_url = '') {
            echo $blog_url;

            $this->load->view('blogview');
        }

        public function demo() {
            $this -> load -> model("StudentModel", "stud");
            $title = $this -> stud -> demo();

            // $data['title'] = "Hello, welcome to page.";
            $data['title'] = $title;
            $data['body'] = "Im body.";
            $this -> load -> view("demo", $data);
        }
    }