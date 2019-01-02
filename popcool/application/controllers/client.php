<?php
session_start();
class client extends CI_Controller {

        function __construct()
        {
                parent::__construct();
        }
    //--===========--- SHOWING ---==================
        function index()
	{
                $data['header1'] = "Now Showing";
                $data['header2'] = "Coming Soon";
                $data['menuIndex'] = 'active';
                $this->load->model('phim');
                $data['listShowing']= $this->phim->layDs4PhimShowing();
                $data['listComing']= $this->phim->layDs4PhimComing();

                if(isset($_SESSION['email']))
                {
                        $data['listthanhvien']= $_SESSION['userName'];
                }

                $this->load->view('client/templates/header', $data);
                $this->load->view('client/templates/slide');
                $this->load->view('client/body', $data);
                $this->load->view('client/templates/footer');

        }
        function nowShowing()
        {
                $data['header'] = "Phim đang chiếu";
                $data['menuMovie'] = 'active';
                $this->load->model('phim');
                $data['list']= $this->phim->layDsPhimDangChieu();

                if(isset($_SESSION['email']))
                {
                        $data['listthanhvien']= $_SESSION['userName'];
                }

                $this->load->view('client/templates/header', $data);
                $this->load->view('client/danhsachphim', $data);
                $this->load->view('client/templates/footer');
        }
        function comingSoon()
        {
                $data['header'] = "Phim sắp chiếu";
                $data['menuMovie'] = 'active';
                $this->load->model('phim');
		$data['list']= $this->phim->layDsPhimSapChieu();

                if(isset($_SESSION['email']))
                {
                        $data['listthanhvien']= $_SESSION['userName'];
                }

                $this->load->view('client/templates/header', $data);
                $this->load->view('client/danhsachphim', $data);
                $this->load->view('client/templates/footer');
        }
        function showDetail()
        {
                $idphim = $_REQUEST['idCTiet'];
                $this->load->model('phim');
                $data['detail'] = $this->phim->getPhimById($idphim);
                if(isset($_SESSION['email']))
                {
                        $data['listthanhvien']= $_SESSION['userName'];
                }

                $this->load->view('client/templates/header', $data);
                $this->load->view('client/chitiet', $data);
                $this->load->view('client/templates/footer');
                if(isset( $data['detail'][0]['tenphim'])){
                $_SESSION['moviename'] = $data['detail'][0]['tenphim'];
                }
        }
        function showTime()
        {
                $data['header'] = "Lich Chieu";
                $data['menuTime'] = 'active';
                if(isset($_SESSION['email']))
                {
                        $data['listthanhvien']= $_SESSION['userName'];
                }
                $this->load->model('suatchieu');
                $this->load->model('phim');

                $date = 'Mon';
                //$result_row=$this->suatchieu->layDsSuatChieuByDateRow($date);
                $result = $this->phim->laytenPhimHinhbyDate($date);
                //$result = $result->result_array();
                $output="";
                //echo json_encode($result);  
                $data['firstSee']='';
                if(count($result) > 0)
                {
                        foreach($result as $row){
                                $tenphim = $row['tenphim'];
                                $suatchieu = $this->suatchieu->layDsSuatChieuByDatePhim($date,$tenphim);
                                $output.=' <hr>
                                          <ul class="container-fluid">
                                              <li>
                                                <div><h1 class="TenFilm">'.$row["tenphim"].'</h1></div>
                                                <div class="ThongTin">
                                                     <a href="'.base_url().'client/showDetail?idCTiet='.$row['idphim'].'">
                                                     <img class="imgFilm" src="'.base_url().'public/uploads/'.$row['poster'].'"/>
                                                     </a>
                                                     <ul class="lc">
                                                        <li class="ds">
                                                        <h4>Các suất chiếu:</h4>';
                                                foreach($suatchieu as $row1){
                                                $output.= 
                                                '<a class="btn3 btn-outline-dark" href="'.base_url().'client/bookTicket?idBook='.$row1["id_sc"].'">'.$row1["time"].'</a>';
                                                }
                                $output.= '
                                                        </li>
                                                      </ul>
                                                </div>
                                               </li>
                                          </ul>  
                                                    ';
                        
                        }
                        $data['firstSee'] =  $output;
                }

                $this->load->view('client/templates/header',$data);
                $this->load->view('client/lichchieu',$data);
                $this->load->view('client/templates/footer');
        }
        function showLichChieu()
        {
                $date = $this->input->post('date');
                $this->load->model('suatchieu');
                $this->load->model('phim');
               
                //$result_row=$this->suatchieu->layDsSuatChieuByDateRow($date);
                $result = $this->phim->laytenPhimHinhbyDate($date);
                //$result = $result->result_array();
                $output="";
                //echo json_encode($result);   
                if(count($result) > 0)
                {
                        foreach($result as $row){
                                $tenphim = $row['tenphim'];
                                $suatchieu = $this->suatchieu->layDsSuatChieuByDatePhim($date,$tenphim);
                                $output.=' <hr>
                                          <ul class="container-fluid">
                                              <li>
                                                <div><h1 class="TenFilm">'.$row["tenphim"].'</h1></div>
                                                <div class="ThongTin">
                                                     <a href="'.base_url().'client/showDetail?idCTiet='.$row['idphim'].'">
                                                     <img class="imgFilm" src="'.base_url().'public/uploads/'.$row['poster'].'"/>
                                                     </a>
                                                     <ul class="lc">
                                                        <li class="ds">
                                                        <h4>Các suất chiếu:</h4>';
                                                foreach($suatchieu as $row1){
                                                $output.= 
                                                '<a class="btn3 btn-outline-dark" href="'.base_url().'client/bookTicket?idBook='.$row1["id_sc"].'">'.$row1["time"].'</a>';
                                                }
                                $output.= '
                                                        </li>
                                                      </ul>
                                                </div>
                                               </li>
                                          </ul>  
                                                    ';
                        
                        }
                } else {
                        $output.= '<hr/><h4>Không có xuất chiếu nào !</h4>';
                }
                echo  $output;
        }  
        function showLichChieuMini()
        {
                $date = $this->input->post('date');
                $this->load->model('suatchieu');
                $this->load->model('phim');
                $output="";
                                $tenphim = $_SESSION['moviename'];
                                $suatchieu = $this->suatchieu->layDsSuatChieuByDatePhim($date,$tenphim);
                                if(count($suatchieu)>0){
                                $output.=' <hr>
                                          <ul class="container-fluid">
                                                        <li>
                                                        <h4>Các suất chiếu:</h4>';
                                                foreach($suatchieu as $row1){
                                                $output.= 
                                                '<a class="dvbtn1 btn-outline-dark" href="'.base_url().'client/bookTicket?idBook='.$row1["id_sc"].'">'.$row1["time"].'</a>';
                                                }
                                $output.= '
                                                        </li>
                                          </ul> 
                                                    ';
                                } else {
                                $output.=' 
                                        <h4>Không có xuất chiếu nào</h4>'; 
                                }
                        
                        echo  $output;
        }

//--===========--- BOOKING ---==================
        function bookTicket(){
                if(isset($_REQUEST['idBook'])){
                  $_SESSION['idBook'] = $_REQUEST['idBook'];
                }
                if(isset($_SESSION['idBook'])){
                    if(isset($_SESSION['email'])){
                        
                                $idsc = $_SESSION['idBook'];
                                $this->load->model('suatchieu');
                                $data['suatchieu'] = $this->suatchieu->getSuatchieuDataByID($idsc);
                                $data['user'] = $_SESSION['email'];
                                $data['listthanhvien']= $_SESSION['userName'];

                                $this->load->view('client/templates/header',$data);
                                $this->load->view('client/datve',$data);
                                $this->load->view('client/templates/footer');
                                        
                     } else {
                                redirect(base_url().'registration/loadLogin');
                     }
                }
        }
        function booking(){
                $add['email'] = $_SESSION['email'];
                $add['id_sc'] = $_SESSION['idBook'];
                $this->load->model('ve');
                $num = $this->input->post('numBook');
                for($i=0;$i<$num;$i++){
                $result = $this->ve->themve($add);
                }
                if($result==true){
                        //thanh cong
                        unset($_SESSION['idBook']);
                        $output="";
                        $output.='
                        <div class="alert alert-success" role="alert">
                        <b>Bạn đã đặt vé thành công !</b>
                        </div>     
                        <a class="btn btn-primary mb-3" style="background-color:black;" href="'.base_url().'client/index">Về Trang chủ</a>                   
                        ';
                        echo $output;
                }else{
                        echo $result;
                }

        }
}
?>