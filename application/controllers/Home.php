<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
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

}