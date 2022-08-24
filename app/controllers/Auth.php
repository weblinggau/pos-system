<?php 
class Auth extends Controller {
    public function __construct()
    {
        $this->sandi = new Encrypt();
        $this->func = new Inc();
	    $this->model = $this->model('Model');
    }

    public function index(){
        if (isset($_SESSION['id_user'])) {
             $this->func->riderect('/panel');
        }
    	$this->view('auth/login');
    }

    public function logout(){
        session_destroy();
        $this->func->riderect('/auth');
    }
}


 ?>