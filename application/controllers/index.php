<?php
    class index extends CI_Controller
    {
        public function __construct() {
            parent::__construct();
        }
        
        public function index()
        {            
            $this->load->view('template/header');
            $this->load->view('template/static');
            $this->load->view('index');
            $this->load->view('template/menu');
        }    
    }
?>
