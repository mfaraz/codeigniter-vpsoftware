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
            $this->load->view('about/about',$data);
            $this->load->view('template/menu');
        }    
        
        public function update($id)
        {
            $data['query'] = $this->aboutmodel->detail($id);
            
            $this->load->view('template/header');
            $this->load->view('template/static');
            $this->load->view('about/update',$data);
            $this->load->view('template/menu');
        }
        
        public function update_action()
        {
            $id = $this->input->post('id');
            $var1 = $this->input->post('txtndtiengviet');
            $var2 = $this->input->post('txtndtienganh');
            
            if($this->aboutmodel->update($var1, $var2, $id)==true)
            {
                redirect('about');
            }
            else echo "<script>alert('Thất bại !');</script>";
            
            //$data['message'] ="thanh cong";
            //$this->load->view('about',$data);
        }
    }
?>
