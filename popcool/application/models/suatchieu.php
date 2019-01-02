<?php
    class suatchieu extends CI_Model
    {
        public $startdate;
        public $starttime;
        public $idphong;
        public $idphim;
        public function taoSuatChieu($newSuatChieu)
        {
            $this->load->database();
            $query=$this->db->insert('suatchieu',$newSuatChieu);
            $this->db->close();
            return $query;
        }
        public function layDsSuatChieuByIdPhim($idphim)
        {
            $this->load->database();
            $query = $this->db->query("select * from suatchieu where idphim = '$idphim'");
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function layDsSuatChieuById($id_sc)
        {
            $this->load->database();
            $this->db->where('id_sc',$id_sc);
            $query = $this->db->get('suatchieu');
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function layDsSuatChieuReturnRow($id_sc)
        {
            $this->load->database();
            $this->db->where('id_sc',$id_sc);
            $query = $this->db->get('suatchieu');
            $result = $query->row();
            $this->db->close();
            return $result;
        }
        public function layDsSuatChieu()
        {
            $this->load->database();
            $this->db->select('suatchieu.* , phim.tenphim AS tenphim')
            ->from('suatchieu')
            ->join('phim', 'suatchieu.idphim = phim.idphim');
            $this->db->order_by('id_sc', 'DESC');
            //$this->db->group_by('tenphim');
            $query = $this->db->get();
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function xoaSuatChieu($id_sc)
        {
            $this->load->database();
            $this->db->where('id_sc',$id_sc);
            $query = $this->db->delete('suatchieu');
            $this->db->close();
            return $query;
        }
        //============================
        public function capNhatSuatChieu($id_sc,$check)
        {
            $this->load->database();
            $this->db->where('id_sc',$id_sc);
            $result = $this->db->update('suatchieu',$check);
            return $result;
        }
        public function layDsSuatChieuByDate($date)
        {
            $this->load->database();
            $this->db->select('suatchieu.id_sc AS id_sc, suatchieu.date AS date, suatchieu.time AS time, suatchieu.idphong AS idphong, phim.tenphim AS tenphim')
            ->from('suatchieu')
            ->join('phim', 'suatchieu.idphim = phim.idphim');
            $this->db->where('date',$date);
            $this->db->order_by('suatchieu.time', 'ASC');
               $result = $this->db->get();
               $result = $result->result_array();
               return $result;
        }
        public function layDsSuatChieuByDatePhim($date,$tenphim)
        {
            $this->load->database();
            $this->db->select('suatchieu.time AS time, suatchieu.id_sc AS id_sc')
            ->from('suatchieu')
            ->join('phim', 'suatchieu.idphim = phim.idphim');
            $this->db->where('date',$date);
            $this->db->where('tenphim',$tenphim);
            $this->db->order_by('id_sc', 'DESC');
            $result = $this->db->get();
            $result = $result->result_array();
            return $result;
        }
        /*
        public function layDsSuatChieuByDateRow($date)
        {
            $this->load->database();
            $this->db->select('suatchieu.id_sc AS id_sc, suatchieu.date AS date, suatchieu.time AS time, suatchieu.idphong AS idphong, phim.tenphim AS tenphim')
            ->from('suatchieu')
            ->join('phim', 'suatchieu.idphim = phim.idphim');
            $this->db->where('date',$date);
            $this->db->order_by('suatchieu.time', 'ASC');
               $result = $this->db->get();
               $result = $result->num_rows();
               return $result;
        }
        */
        public function getSuatchieuDataByID($id)
        {
            $this->load->database();
            $this->db->select('suatchieu.id_sc AS id_sc, suatchieu.date AS date, suatchieu.time AS time, suatchieu.idphong AS idphong, phim.tenphim AS tenphim, phim.poster AS poster')
            ->from('suatchieu')
            ->join('phim', 'suatchieu.idphim = phim.idphim');
            $this->db->where('id_sc',$id);
            $this->db->order_by('suatchieu.time', 'ASC');
               $result = $this->db->get();
               $result = $result->result_array();
               return $result;
        }
    }
?>