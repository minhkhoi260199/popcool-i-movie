<?php
    class ve extends CI_Model
    {
        public $idve;
        public $id_sc;
        public $email;
        public function layDsVe()
        {
            $this->load->database();
            $this->db->select('ve.*, suatchieu.*, phim.tenphim')
            ->from('ve')
            ->join('suatchieu','ve.id_sc=suatchieu.id_sc')
            ->join('phim', 'suatchieu.idphim=phim.idphim');
            $query = $this->db->get();
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function themVe($list)
        {
        $this->load->database();
        $this->load->helper('url');
        $query=$this->db->insert('ve',$list);
        $this->db->close();
        return $query;
        }
        public function xoaVe($id)
        {
            $this->load->database();
            $query=$this->db->query("delete from ve where idve = $id");
            $this->db->close();
            return $query;
        }
    }
?>