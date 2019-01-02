<?php
session_start();
class admin extends CI_Controller {

	public function index()
	{
      if(isset($_SESSION['admin'])){
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/footer');
      }
    }
    //--===========--- PHIM ---==================
	public function indexPhim()
	{
        if(isset($_SESSION['admin'])){
        $data['title'] = 'Danh mục phim';
        $this->load->library('pagination'); // Load Pagination
        $this->load->helper('form');
		$this->load->model('phim');
		//$data['list']= $this->phim->layDsPhim();
        //====
        $this->load->database();     
        // init params
        $num = $this->input->post('numRow');

        if(isset($num)){
            $_SESSION['numRow'] = $num;
            $page = 0;
        } else {
            $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        }         
        
        if(isset($_SESSION['numRow'])){
            $limit_per_page = $_SESSION['numRow'];
        } else {
            $limit_per_page = 2;
        }

        $data['page'] = $page;
        $data['rowPerPage'] = $limit_per_page;
        $data['list'] = array();
        $total_records = $this->phim->get_total();
        if($total_records!=null){

        if ($total_records > 0)
        {
            // get current page records
            $data["list"] = $this->phim->get_current_page_records($limit_per_page, $page*$limit_per_page);
                 
            $config['base_url'] = base_url() . 'admin/indexPhim';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
             
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
            $config['full_tag_close'] = '</ul></nav>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
            $config['first_tag_close'] = '</a></li>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
            $config['last_tag_close'] = '</a></li>';
             
            $config['next_link'] = 'Next Page';
            $config['next_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
            $config['next_tag_close'] = '</a></li>';
 
            $config['prev_link'] = 'Prev Page';
            $config['prev_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
            $config['prev_tag_close'] = '</a></li>';
 
            $config['cur_tag_open'] = '<li class="page-item"><a class="page-link" href="#"></a><a class="page-link" style="color:red;font-weight:bold;" href="#">';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
            $config['num_tag_close'] = '</a></li>';
             
            $this->pagination->initialize($config);
                 
            // build paging links
            $data["links"] = $this->pagination->create_links();
        }
        }

        //====
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/indexPhim', $data);
        $this->load->view('admin/templates/footer');

        }
    }
    function addPhim()
    {
        if(isset($_SESSION['admin'])){
        $this->load->helper('form'); //Load form
        $this->load->library('form_validation'); //Load form valodation

        $data['title'] = 'Thêm phim mới';
        $data['methodname'] = 'addPhim';
        
        $this->form_validation->set_rules('tenphim', '' ,'required');
        $this->form_validation->set_rules('theloai', '' ,'required');
        $this->form_validation->set_rules('thoiluong', '' ,'required');
        $this->form_validation->set_rules('trailer', '' ,'required');
        $this->form_validation->set_rules('status', '' ,'required');
        $this->form_validation->set_rules('khoichieu', '' ,'required');
        
        if ($this->form_validation->run() === false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/createPhim', $data);
            $this->load->view('admin/templates/footer');
            unset($_SESSION['error']);
        } else {

            $this->load->model('phim');     //load model 
            $upl = $this->phim->uploadPoster(); //Upload hinh

            if ($upl==false){
                header('location:addPhim'); //Upload hinh fail
            } else {
                $check['tenphim'] = $this->input->post("tenphim");
                $check['theloai'] = $this->input->post("theloai");
                $check['daodien'] = $this->input->post("daodien");
                $check['dienvien'] = $this->input->post("dienvien");
                $check['thoiluong'] = $this->input->post("thoiluong");
                $check['mota'] = $this->input->post("mota");
                $check['trailer'] = $this->input->post("trailer");
                $check['trangthai'] = $this->input->post("status");
                $check['khoichieu'] = $this->input->post("khoichieu");
        
                $check['poster'] = $upl; // Lay ten file
                $tenPhimCheck = $check['tenphim'];
                $numRows = $this->phim->laySoLuongDongbyTenPhim($tenPhimCheck);
                if($numRows == 0)
                {
                    $result = $this->phim->taoPhim($check);
                    if($result == true){
                        header('location:indexPhim');
                    } else {
                        header('location:addPhim'); //Add fail
                    }
                }
                else
                {
                    $_SESSION['error'] = 'The name of the movie is already existed.';

                    header('location: addPhim');
                }
    
            }
        }
        }
    }
    function deletePhim()
    {
        if(isset($_SESSION['admin'])){
        $id = $_REQUEST['idPhim'];
        $this->load->model('phim');
        //lay ten poster cu
        $item = $this->phim->getPhimById($id);
        $posterName = $item[0]['poster'];     
        //Xoa poster cu    
        $delPic = $this->phim->deletePoster($posterName);
        //Xoa phim
        if($delPic == true){
            $result = $this->phim->xoaPhim($id);
            if($result == true){
                //xoa file poster
                header('location:indexPhim');
            } else {
                //Xuat thong bao loi
            }    
        } else {
            // Thong bao xoa that bai
        }
        }
    }
    function updatePhim()
    {
        if(isset($_SESSION['admin'])){
        $this->load->helper('form'); //Load form
        $this->load->library('form_validation'); //Load form valodation

        $data['title'] = 'Cập nhật thông tin phim';
        $data['methodname'] = 'updatePhim';

        if(isset($_REQUEST['idPhim'])){
            $idupd = $_REQUEST['idPhim'];
            $_SESSION['idUpdPhim'] = $_REQUEST['idPhim'];
            $this->load->model('phim');
            $data['edit'] = $this->phim->getPhimById($idupd); // Lấy giữ liệu cũ
        }

        
        $this->form_validation->set_rules('tenphim', '' ,'required');
        $this->form_validation->set_rules('theloai', '' ,'required');
        $this->form_validation->set_rules('thoiluong', '' ,'required');
        $this->form_validation->set_rules('trailer', '' ,'required');
        $this->form_validation->set_rules('status', '' ,'required');
        $this->form_validation->set_rules('khoichieu', '' ,'required');
        
        if ($this->form_validation->run() === false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/createPhim', $data);
            $this->load->view('admin/templates/footer');
    
        } else {
            $check['tenphim'] = $this->input->post("tenphim");
            $check['theloai'] = $this->input->post("theloai");
            $check['daodien'] = $this->input->post("daodien");
            $check['dienvien'] = $this->input->post("dienvien");
            $check['thoiluong'] = $this->input->post("thoiluong");
            $check['mota'] = $this->input->post("mota");
            $check['trailer'] = $this->input->post("trailer");
            $check['trangthai'] = $this->input->post("status");
            $check['khoichieu'] = $this->input->post("khoichieu");
            $this->load->model('phim');     //load model 
                if(isset($_FILES['Poster']['name'])){   //Kiểm tra xem có chọn file mới không
                    $upl = $this->phim->uploadPoster(); //Upload file mới
        
                    if ($upl==false){
                        header('location:addPhim'); //Upload hinh fail
                    } else {
                        $check['poster'] = $upl; // Lay ten file mới
                        $oldName = $this->input->post("OldPoster"); //Lay ten file cũ
                        $this->phim->deletePoster($oldName); //Xóa file cũ
                    }
                } else {
                    $check['poster'] = $this->input->post("OldPoster"); //Nếu không có chọn file mới thì lấy tên file cũ update lại
                }

                $idupd = $_SESSION['idUpdPhim'];

                $result = $this->phim->capnhatPhim($idupd,$check);//goi ham trong model //hanh dong luu du lieu
                
                if($result == true){
                    header('location:indexPhim');
                } else {
                    header("location:updatePhim?idPhim=$idupd"); //Add fail
                }
            session_unset($_SESSION['idUpdPhim']);
            }
        }
    }
    //--===========--- PHONG CHIEU ---==================
    public function indexPC()
    {
        if(isset($_SESSION['admin']))
        {
        $data['title'] = 'Danh mục phong chieu';
		$this->load->model('phongchieu');
		$data['list']= $this->phongchieu->layDsPhong();
	
		$this->load->view('admin/templates/header');
		$this->load->view('admin/indexPC', $data);
        $this->load->view('admin/templates/footer');
        }
    }
    public function addPC()
    {
        if(isset($_SESSION['admin']))
        {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Thêm Phòng Chiếu';
        $data['methodname'] = 'addPC';
        $this->form_validation->set_rules('idphong','','required');
        $this->form_validation->set_rules('soghe','','required');
        if($this->form_validation->run() === false)
        {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/createPC', $data);
            $this->load->view('admin/templates/footer');
        }
        else
        {
            $check['idphong']=$this->input->post("idphong");
            $check['soghe']=$this->input->post("soghe");
            $this->load->model('phongchieu');
            $resultPC = $this->phongchieu->taoPhong($check);
            if($resultPC == false)
            {
                header('location:addPC'); //Add fail
            }
            else
            {
                header('location:indexPC');
            }
        }
        }
    }
    public function deletePC()
    {
        if(isset($_SESSION['admin']))
        {
        $idphong = $_REQUEST['idphong'];
        $this->load->model('phongchieu');
        $result = $this->phongchieu->xoaPhong($idphong);
        if($result == true)
        {
            header('location:indexPC');
        }
        else
        {
            $data['errorDel'] = 'Khong the xoa muc da chon';
            $data['title'] = 'Danh mục phong chieu';
            $this->load->model('phongchieu');
            $data['list']= $this->phongchieu->layDsPhong();
        
            $this->load->view('admin/templates/header');
            $this->load->view('admin/indexPC', $data);
            $this->load->view('admin/templates/footer');
        }
        }
    }
    public function updatePC()
    {
        if(isset($_SESSION['admin']))
        {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Cập nhật thông tin phong chieu';
        $data['methodname'] = 'updatePC';
        if(isset($_REQUEST['idphong'])){
            $idphongOld = $_REQUEST['idphong'];
            $_SESSION['idphongUp'] = $_REQUEST['idphong'];
            $this->load->model('phongchieu');
            $data['edit'] = $this->phongchieu->layDsPhongById($idphongOld); // Lấy giữ liệu cũ
        }
        $this->form_validation->set_rules('idphong', '' ,'required');
        $this->form_validation->set_rules('soghe', '' ,'required');
        
        if ($this->form_validation->run() === false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/createPC', $data);
            $this->load->view('admin/templates/footer');
    
        } else {
            $check['idphong'] = $this->input->post("idphong");
            $check['soghe'] = $this->input->post("soghe");

                $idphongUpD = $_SESSION['idphongUp'];

                $result = $this->phongchieu->updatePhong($idphongUpD,$check);//goi ham trong model //hanh dong luu du lieu
                
                if($result == true){
                    header('location:indexPC');
                } else {
                    header("location:updatePC?idphong=$idphongUpD"); //Add fail
                }
                unset($_SESSION['idphongUp']);
            }
        }
    }
    //--===========--- SUAT CHIEU ---==================
    public function indexSC()
	{
        if(isset($_SESSION['admin']))
        {
        $data['title'] = 'Danh mục suất chiếu';
		$this->load->model('suatchieu');
		$data['listsuatchieu']= $this->suatchieu->layDsSuatChieu();
	
		$this->load->view('admin/templates/header');
		$this->load->view('admin/indexSC', $data);
        $this->load->view('admin/templates/footer');
        }
    }
    public function addSC()
    {
        if(isset($_SESSION['admin']))
        {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Thêm suất chiếu';
        $data['methodname'] = 'addSC';
        $this->form_validation->set_rules('date','','required');
        $this->form_validation->set_rules('time','','required');
        $this->form_validation->set_rules('idphong','','required');
        $this->form_validation->set_rules('tenphim','','required');
        if($this->form_validation->run() === false)
        {
            $this->load->model('phim');
            $data['listtenphim']=$this->phim->layTenPhim();
            $this->load->model('phongchieu');
            $data['listidphong']=$this->phongchieu->layIdPhong();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/createSC', $data);
            $this->load->view('admin/templates/footer');
        }
        else
        {
            $check['date']=$this->input->post("date");
            $check['time']=$this->input->post("time");
            $check['idphong']=$this->input->post("idphong");
            $tenphimSC = $this->input->post("tenphim");
            $this->load->model('phim');
            $row=$this->phim->layIdPhimByTenPhim($tenphimSC);
            $check['idphim']=$row->idphim;
            $this->load->model('suatchieu');
            $resultSC = $this->suatchieu->taoSuatChieu($check);
            if($resultSC == false)
            {
                header('location:addSC'); //Add fail
            }
            else
            {
                header('location:indexSC');
            }
        }
        }
    }
    public function xoaSC()
    {
        if(isset($_SESSION['admin']))
        {
        $id_sc = $_REQUEST['id_sc'];
        $this->load->model('suatchieu');
        $result = $this->suatchieu->xoaSuatChieu($id_sc);
        if($result == true)
        {
            header('location:indexSC');
        }
        else
        {
            $data['errorDel'] = 'Khong the xoa muc da chon';
            $data['title'] = 'Danh mục suat chieu';
            $this->load->model('suatchieu');
            $data['listsuatchieu']= $this->suatchieu->layDsSuatChieu();
        
            $this->load->view('admin/templates/header');
            $this->load->view('admin/indexSC', $data);
            $this->load->view('admin/templates/footer');
        }
        }
    }
    public function updateSC()
    {
        if(isset($_SESSION['admin']))
        {
            $email = $_SESSION['email'];
            $this->load->model('thanhvien');
            $data['listthanhvien']= $this->thanhvien->layDsThanhVienByEmail($email);
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Cập nhật thông tin suất chiếu';
        $data['methodname'] = 'updateSC';
        if(isset($_REQUEST['id_sc'])){
            $id_scOld = $_REQUEST['id_sc'];
            $_SESSION['id_scUp'] = $_REQUEST['id_sc'];
            $this->load->model('suatchieu');
            $data['edit'] = $this->suatchieu->layDsSuatChieuById($id_scOld); // Lấy giữ liệu cũ
            $this->load->model('phim');
            $row = $this->suatchieu->layDsSuatChieuReturnRow($id_scOld);
            $idphimOld = $row->idphim;
            $data['listphim'] = $this->phim->getPhimById($idphimOld); //Lay ten phim dua vao idphim cu
        }
        $this->form_validation->set_rules('idphong', '' ,'required');
        $this->form_validation->set_rules('date', '' ,'required');
        $this->form_validation->set_rules('time', '' ,'required');
        $this->form_validation->set_rules('tenphim', '' ,'required');
        
        if ($this->form_validation->run() === false) {
            $this->load->model('phim');
            $data['listtenphim']=$this->phim->layTenPhim();
            $this->load->model('phongchieu');
            $data['listidphong']=$this->phongchieu->layIdPhong();
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/createSC', $data);
            $this->load->view('admin/templates/footer');
    
        } else {
            $id_scUp = $_SESSION['id_scUp'];
            $check['date']=$this->input->post("date");
            $check['time']=$this->input->post("time");
            $check['idphong']=$this->input->post("idphong");
            $tenphimSC = $this->input->post("tenphim");
            $this->load->model('phim');
            $row=$this->phim->layIdPhimByTenPhim($tenphimSC);
            $check['idphim']=$row->idphim;
            $this->load->model('suatchieu');
            $resultSC = $this->suatchieu->capNhatSuatChieu($id_scUp,$check);
                
                if($resultSC == true){
                    header('location:indexSC');
                } else {
                    header("location:updateSC?id_sc=$id_scUp"); //Add fail
                }
                unset($_SESSION['id_scUp']);
            }
        }
    }   
     //--===========--- VE ---==================
     public function indexVe()
     {
         if(isset($_SESSION['admin']))
         {
             $data['title'] = 'Danh mục vé';
             $this->load->model('ve');
             $data['listve'] = $this->ve->layDsVe();
             $this->load->view('admin/templates/header', $data);
             $this->load->view('admin/indexVe', $data);
             $this->load->view('admin/templates/footer');
         }
     } 
     public function deleteVe()
     {
         if(isset($_SESSION['admin']))
         {
            $idve = $_REQUEST['idve'];
            $this->load->model('ve');
            $result = $this->ve->xoaVe($idve);
            if($result == true)
            {
                header('location:indexVe');
            }
         }
    }
    //--===========--- THANH VIEN ---==================
    public function indexTV()
    {
        if(isset($_SESSION['admin']))
        {
        $data['title'] = 'Danh mục thành viên';
		$this->load->model('thanhvien');
		$data['list']= $this->thanhvien->layDsThanhVIen();
	
		$this->load->view('admin/templates/header');
		$this->load->view('admin/indexTV', $data);
        $this->load->view('admin/templates/footer');
        }
    }
    public function addTV()
    {
        if(isset($_SESSION['admin']))
        {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Thêm Thành Viên';
        $data['methodname'] = 'addTV';
        $this->form_validation->set_rules('email','','required');
        $this->form_validation->set_rules('password','','required');
        $this->form_validation->set_rules('uname','','required');
        $this->form_validation->set_rules('phone','','required');
        $this->form_validation->set_rules('type','','required');
        if($this->form_validation->run() === false)
        {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/createTV', $data);
            $this->load->view('admin/templates/footer');
        }
        else
        {
            $check['email']=$this->input->post("email");
            $check['password']=$this->input->post("password");
            $check['uname']=$this->input->post("uname");
            $check['phone']=$this->input->post("phone");
            $check['type']=$this->input->post("type");
            $checkEmail = $check['email'];
            $this->load->model('thanhvien');
            $result=$this->thanhvien->layDsThanhVienByEmail($checkEmail);
            if($result == false)
            {
                $resultTV = $this->thanhvien->themThanhVien($check);
                if($resultTV == false)
                {
                    header('location:addTV'); //Add fail
                }
                else
                {
                    header('location:indexTV');
                }
            }
            else
            {
                $data['error'] = 'Email da duoc su dung';
                $this->load->view('admin/templates/header');
                $this->load->view('admin/createTV', $data);
                $this->load->view('admin/templates/footer');
            }
        }
        }
    }
    public function deleteTV()
    {
        if(isset($_SESSION['admin']))
        {
        $email = $_REQUEST['email'];
        $this->load->model('thanhvien');
        $result = $this->thanhvien->xoaThanhVien($email);
        if($result == true)
        {
            header('location:indexTV');
        }
        else
        {
            $data['errorDel'] = 'Khong the xoa muc da chon';
            $data['title'] = 'Danh mục thanh vien';
            $this->load->model('thanhvien');
            $data['list']= $this->thanhvien->layDsThanhVIen();
        
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/indexTV', $data);
            $this->load->view('admin/templates/footer');
        }
        }
    }
    public function updateTV()
    {
        if(isset($_SESSION['admin']))
        {
        $this->load->help('form');
        $this->load->library('form_validation');
        $data['title'] = 'Cập nhật thông tin thành viên';
        $data['methodname'] = 'updateTV';
        session_start();
        if(isset($_REQUEST['email'])){
            $emailUp = $_REQUEST['email'];
            $_SESSION['emailUp'] = $_REQUEST['email'];
            $this->load->model('thanhvien');
            $data['edit'] = $this->thanhvien->layDsThanhVienByEmail($emailUp); // Lấy giữ liệu cũ
        }
        $this->form_validation->set_rules('email', '' ,'required');
        $this->form_validation->set_rules('password', '' ,'required');
        $this->form_validation->set_rules('uname', '' ,'required');
        $this->form_validation->set_rules('phone', '' ,'required');
        $this->form_validation->set_rules('type', '' ,'required');
        
        if ($this->form_validation->run() === false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/createTV', $data);
            $this->load->view('admin/templates/footer');
    
        } else {
            $check['email'] = $this->input->post("email");
            $check['password'] = $this->input->post("password");
            $check['uname'] = $this->input->post("uname");
            $check['phone'] = $this->input->post("phone");
            $check['type'] = $this->input->post("type");

                $emailUpD = $_SESSION['emailUp'];

                $result = $this->thanhvien->updateThanhVien($emailUpD,$check);//goi ham trong model //hanh dong luu du lieu
                
                if($result == true){
                    header('location:indexTV');
                } else {
                    header("location:updateTV?email=$emailUpD"); //Add fail
                }
                unset($_SESSION['emailUp']);
            }
        }
    }
}
?>