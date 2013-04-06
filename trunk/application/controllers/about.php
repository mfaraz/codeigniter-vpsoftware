<?php
    class about extends CI_Controller
    {
        public function __construct() {
            parent::__construct();
            $this->load->Model('aboutmodel');
        }
        
        public function index()
        {
            $data['query'] = $this->aboutmodel->select();
            
            $this->load->view('template/header');
            $this->load->view('template/static');
            $this->load->view('template/menuleft');
            $this->load->view('about/about',$data);
            $this->load->view('template/footer');
        }    
        
        public function update($id)
        {
            $data['query'] = $this->aboutmodel->detail($id);
            
            $this->load->view('template/header');
            $this->load->view('template/static');
            $this->load->view('template/menuleft');
            $this->load->view('about/update',$data);
            $this->load->view('template/footer');
        }
    }
?>
