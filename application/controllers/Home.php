<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="https://api.thegadeareamalang.com/bpo/index.php/";
        $this->load->library('curl');
    }

    public function index()
	{	
		$this->load->view('partials/header');
		$this->load->view('home');
        $this->load->view('partials/footer');
        
    }
    
    public function login()
	{	
		$this->load->view('login');
    }

    public function login_aksi(){
        
        $data = array(
        "username" => $this->input->post('username'),
        "password" => $this->input->post('password')
        );

        $login = json_decode($this->curl->simple_post($this->API.'/login', $data, array(CURLOPT_BUFFERSIZE => 10))); 
        if($login){
            if($login->status=="success"){
                $sess_arr = array(
					'id' => $login->data->id,
                    'username' => $login->data->username,
                    'nama' => $login->data->nama
				);
                $this->session->set_userdata('login',$sess_arr);
                echo "sukses";
            }else{
                echo "error";
            }
        }else{
            echo "koneksi Error";
        }
    }

    public function logout(){
        
        $this->session->unset_userdata('login');
        
        redirect('Home/login','refresh');
        
        
    }
    
    public function form(){
        $this->load->view('partials/header');
        $this->load->view('form');
        $this->load->view('partials/footer');
        $this->load->view('js-postinput');
        
    }

    public function transaksi(){

        $jsonString=$this->curl->simple_get('https://api.thegadeareamalang.com/bpo/index.php/insert', array(CURLOPT_BUFFERSIZE => 10));
        $dat=json_decode($jsonString);
        $data['transaksi']=$dat->data;
        $this->load->view('partials/header');
        $this->load->view('dataTransaksi',$data);
        $this->load->view('partials/footer');
        
    }

    public function sales(){
        $this->load->view('partials/header');
        $this->load->view('dataSales');
        $this->load->view('partials/footer');
        
    }

    public function profile(){
        $this->load->view('partials/header');
        $this->load->view('profile');
        $this->load->view('partials/footer');
        
    }

}