<?php
class thanhvien extends CI_Model
{
    public $email;
    public $password;
    public $uname;
    public $phone;
    public $type;
    public function themThanhVien($list)
    {
        $this->load->database();
        $this->load->helper('url');
        $query=$this->db->insert('thanhvien',$list);
        $this->db->close();
        return $query;
    }
    public function xoaThanhVien($email)
    {
        $this->load->database();
        $this->db->where('email',$email);
        $this->db->delete('thanhvien');
    }
    public function updateThanhVien($email,$list)
    {
        $this->load->database();
        $this->db->where('email',$email);
        $query=$this->db->update('thanhvien',$list);
        $this->db->close();
        return $query;
    }
    public function layDsThanhVienByEmail($email)
    {
        $this->load->database();
        $this->db->where('email',$email);
        $query=$this->db->get('thanhvien');
        $result = $query->result_array();
        $this->db->close();
        return $result;
    }
    public function layDsThanhVien()
    {
        $this->load->database();
        $query=$this->db->get('thanhvien');
        $result = $query->result_array();
        $this->db->close();
        return $result;
    }
    public function getUserLogin($emailuser,$pwuser){
        $this->load->database();
        $query=$this->db->query("select uname from thanhvien where email='$emailuser' and password='$pwuser'");
        $result = $query->result_array();
        return $result;
    }
    public function getIDbyType(){
        $this->load->database();
        $query = $this->db->query("select email from thanhvien where type='admin'");
        $result = $query->row();
        return $result;
    }
}
?>