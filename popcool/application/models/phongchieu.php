<?php
    class phongchieu extends CI_Model
    {
        public $idphong;
        public $soghe;
        public function layDsPhong()
        {
            $this->load->database();
            $query=$this->db->get('phongchieu');
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function taoPhong($list)
        {
            $this->load->database();
            $this->load->helper('url');
            $query=$this->db->insert('phongchieu',$list);
            $this->db->close();
            return $query;
        }
        public function xoaPhong($idphong)
        {
            $this->load->database();
            $query = $this->db->query("delete * from phongchieu where idphong = '$idphong'");
            $this->db->close();
            return $query;
        }
        public function layDsPhongById($idphong)
        {
            $this->load->database();
            $query = $this->db->query("select * from phongchieu where idphong='$idphong'");
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function updatePhong($idphong,$list)
        {
            $this->load->database();
            $this->db->where('idphong',$idphong);
            $query=$this->db->update('phongchieu',$list);
            $this->db->close();
            return $query;
        }
        public function layIdPhong()
        {
            $this->load->database();
            $query = $this->db->query("select idphong from phongchieu");
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
    }
?>