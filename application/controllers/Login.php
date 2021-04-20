<?php

class Login extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('model_rs');
		$this->load->helper('url');
        $this->load->library('session');
        
		$this->load->helper('form');
	}

	public function index()
	{
		if (isset($_POST['username'])) {
            if($this->model_rs->login() == 1) {
                    $_SESSION['nama'] = $this->model_rs->namaPetugas();
                    $_SESSION['username'] = $this->model_rs->usernamePetugas();
                    $_SESSION['id'] = $this->model_rs->idPetugas();
                    $this->model_rs->insertLog($_SESSION['username']);
                    redirect('rs/editor');
            }else{
                $this->load->view("failed");
            }
        } else {
            $this->load->view("login");
            
        }
    }
    
    public function logout(){
        unset($_SESSION['nama']);
        unset($_SESSION['username']);
        unset($_SESSION['id']);
        redirect('login');
    }

}