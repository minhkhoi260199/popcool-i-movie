<?php
session_start();
class registration extends CI_Controller {

        function login()
        {
                $this->load->view('login/login');
        }
        function loadLogin()
        {
          if(!isset($_SESSION['email'])){
            $this->load->helper('form'); //Load form
            $this->load->library('form_validation'); //Load form valodation
            $data['methodname']='loadLogin';
            $this->form_validation->set_rules('email','','required');
            $this->form_validation->set_rules('password','','required');
            if($this->form_validation->run()===false){
            /*$this->load->view('templates/admin/header');*/
            $this->load->view('login/login',$data);
            /*$this->load->view('templates/admin/footer');*/
            }
            else{
                $emailuser = $this->input->post("email");
                $pwuser = md5($this->input->post("password"));
                //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
                //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
                $emailuser = strip_tags ($emailuser);
                $emailuser = addslashes ($emailuser);
                $pwuser = strip_tags($pwuser);
                $pwuser = addslashes($pwuser);
                $this->load->model('thanhvien');
                $num_of_row = $this->thanhvien-> getUserLogin($emailuser,$pwuser);
                
                if($num_of_row == false)
                {   
                    $data['error']='Your email or password is invalid';
                    $this->load->view('login/login',$data);
                }
                else
                {   $this->load->model('thanhvien');
                    $row = $this->thanhvien-> getIDbyType();
                    $emailadmin = $row->email;
                    $_SESSION['userName']= $num_of_row[0]['uname'];
                    $_SESSION['email']=$emailuser;
                    if($emailuser != $emailadmin)
                    {
                        if(isset($_SESSION['idBook'])){
                            redirect(base_url().'client/bookTicket');
                        }else{
                            redirect(base_url().'client/index');
                        }
                    }
                    else
                    {
                        $_SESSION['admin']= 'allow';
                        redirect(base_url().'admin/index');
                    }    
                }
            }
          }
        }
        function logOut()
        {
            unset($_SESSION['email']);
            unset($_SESSION['admin']);
            unset($_SESSION['userName']);
            unset($_SESSION['idBook']);
            redirect(base_url().'client/index');
        }
        function SignUp(){
            $this->load->helper('form'); //Load form
            $this->load->library('form_validation'); //Load form valodation
    
            $data['methodname'] = 'SignUp';
    
            $this->form_validation->set_rules('email' , '' , 'required');
            $this->form_validation->set_rules('password' , '' , 'required');
            $this->form_validation->set_rules('name' , '' , 'required');
            $this->form_validation->set_rules('tel' , '' , 'required');
    
            if ($this->form_validation->run() === false) {
                $this->load->view('login/sign_up', $data);    
            } else {
                $check['email']=$this->input->post("email");
                $check['password']=md5($this->input->post("password"));
                $check['uname']=$this->input->post("name");
                $check['phone']=$this->input->post("tel");
                $this->load->model('thanhvien');
                $exist = $this->thanhvien->layDsThanhVienByEmail($check['email']);
                if(count($exist)>0){
                    $_SESSION['error'] = ' đã được sử dụng !';
                    header('location:SignUp');
                } else {
                    $result = $this->thanhvien->themThanhVien($check);
                    if($result == true)
                    {
                        $_SESSION['userName']= $check['uname'];
                        $_SESSION['email']=$check['email'];
                            if(isset($_SESSION['idBook'])){
                                redirect(base_url().'client/bookTicket');
                            }else{
                                redirect(base_url().'client/index');
                            }
                    } 
                }

            }
            }
}
