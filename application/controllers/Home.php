<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        
    }

    public function transaksi(){
        $this->load->view('partials/header');
        $this->load->view('dataTransaksi');
        $this->load->view('partials/footer');
        
    }

    public function sales(){
        $this->load->view('partials/header');
        $this->load->view('dataSales');
        $this->load->view('partials/footer');
        
    }

}