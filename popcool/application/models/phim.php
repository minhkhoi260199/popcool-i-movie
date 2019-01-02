<?php
    class phim extends CI_Model{
        public $idphim;
        public $tenphim;
        public $theloai;
        public $daodien;
        public $dienvien;
        public $thoiluong;
        public $mota;
        public $trailer;
        public $khoichieu;
        public $poster;
        public $status;
        public function layDsPhim(){
            $this->load->database();
            $query = $this->db->query("select * from phim ORDER BY idphim DESC");
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function layDsPhimDangChieu(){
            $this->load->database();
            $query = $this->db->query("select * from phim where trangthai='Đang chiếu' ORDER BY idphim DESC");
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function layDs4PhimShowing(){
            $this->load->database();
            $query = $this->db->query("select * from phim where trangthai='Đang chiếu' ORDER BY idphim DESC LIMIT 4");
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function layDs4PhimComing(){
            $this->load->database();
            $query = $this->db->query("select * from phim where trangthai='Sắp chiếu' ORDER BY idphim DESC LIMIT 4");
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function layDsPhimSapChieu(){
            $this->load->database();
            $query = $this->db->query("select * from phim where trangthai='Sắp chiếu' ORDER BY idphim DESC");
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function taoPhim($newPhim)
        {
            $this->load->database();
            $this->load->helper('url');
            $query=$this->db->insert('phim',$newPhim);
            $this->db->close();
            return $query;
        }   
        public function uploadPoster(){
            $config['upload_path']          = './public/uploads';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 4000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('Poster'))
            {
                    return false;
            }
            else
            {
                    $filename = $this->upload->data('file_name');
                    return $filename;
            }
        }
        public function xoaPhim($idphim)
        {
            $this->load->database();
            $query = $this->db->query("delete from phim where idphim=$idphim");
            return $query;
        }
        public function getPhimById($id){
            $this->load->database();
            $query = $this->db->query("select * from phim where idphim=$id");
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function deletePoster($name){
            if(is_file($_SERVER['DOCUMENT_ROOT']."/popcool/public/uploads/$name")){
                unlink($_SERVER['DOCUMENT_ROOT']."/popcool/public/uploads/$name"); // delete file
                return true;
            }else{
                return false;
            }
        }
        public function capnhatPhim($id,$data){
            $this->load->database();
            $this->db->where('idphim',$id);
            $result = $this->db->update('phim',$data);
            $this->db->close();
            return $result;
        }
        //=================
		public function layIdPhimByTenPhim($tenphim)
        {
            $this->load->database();
            $query=$this->db->query("select idphim from phim where tenphim = '$tenphim'");
            $result = $query->row();
            $this->db->close();
            return $result;
        }
        public function layTenPhim()
        {
            $this->load->database();
            $query=$this->db->query("select tenphim from phim");
            $result = $query->result_array();
            $this->db->close();
            return $result;
        }
        public function layTenPhimReturnRow()
        {
            $this->load->database();
            $query=$this->db->query("select tenphim from phim");
            $result = $query->row();
            $this->db->close();
            return $result;
        }
        //=====added
        public function laySoLuongDongbyTenPhim($tenPhimCheck)
        {
            $this->load->database();
            $query=$this->db->query("select * from phim where tenphim = '$tenPhimCheck' ");
            $query=
            $result = $query->num_rows();
            return $result;
        }
    //===== Test Pagination
        public function get_current_page_records($limit, $start) 
        {
            $this->db->order_by('idphim', 'DESC');
            $this->db->limit($limit, $start);
            $query = $this->db->get("phim");
            $data = $query->result_array();     
            return $data;
        }
         
        public function get_total() 
        {
            return $this->db->count_all("phim");
        }
    //============
    public function laytenPhimHinhbyDate($date)
        {
            $this->load->database();
            $this->db->select('phim.idphim AS idphim, phim.tenphim AS tenphim, phim.poster AS poster')
            ->from('phim')
            ->join('suatchieu','phim.idphim = suatchieu.idphim');
            $this->db->where('date',$date);
            $this->db->distinct();
            $result=$this->db->get();
            $result = $result->result_array();
               return $result;
        }
    }
?>