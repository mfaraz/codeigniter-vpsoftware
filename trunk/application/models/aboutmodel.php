<?php
    class aboutmodel extends CI_Model
    {
        var $table = "about";
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }
        
        public function select()
        {
            $query = $this->db->get($this->table);
            if($query->num_rows() > 0)
            {
                $arr = array();
                foreach ($query->result() as $row)
                {
                    $arr[] = $row;
                }
                return $arr;
            }
            return FALSE;
        }
        
        public function detail($id)
        {
            $query = $this->db->get_where($this->table, array('id'=>$id));
            if($query->num_rows() > 0)
            {
                return $query->result_array();
            }
            return FALSE;
        }
    }
?>
