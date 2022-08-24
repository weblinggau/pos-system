<?php 
class Api extends Controller {
    public function __construct()
    {
        $this->sandi = new Encrypt();
        $this->func = new Inc();
	    $this->model = $this->model('Model');
	     //    if (isset($_SESSION['id_user']) == false) {
    	// 	$this->func->riderect('/auth');
    	// }
    }

    public function index(){
        $joke = array(
            'status' => 'error',
            'pesan' => 'anda berada di path yang salah.!'
            );
        // $res = $this->func->cryptoJsAesEncrypt(KEY, $joke);
        echo json_encode($joke);
    }

    public function auth(){
        $json = file_get_contents('php://input');
        $input = $this->func->cryptoJsAesDecrypt(KEY,$json);
        if($input['action'] == 'auth'){
            if (isset($_SESSION['id_user'])) {
                $res = array(
                    'status' => 'error',
                    'pesan' => 'Terjadi kesalahan saat mengirim parameter'
                );
            }
            $username = $this->func->filter(2,$input['username']);
            $password = sha1($input['password']);
            $array = array(
                'username' => $username,
                'password' => $password
                 );
            $valuser = $this->model->login($array,'user');
            if ($valuser > 0) {
                $valpass = $this->model->login($array,'password');
                if ($valpass > 0) {
                    $data = $this->model->login($array,'data');
                    $_SESSION['id_user'] = $this->sandi->kunci($data['id_user']);
                    $_SESSION['role'] = $data['role'];
                    $joke = array(
                        'status' => 'sukses',
                        'href' => BASEURL.('/panel'),
                        'pesan' => 'Login berhasil, anda akan diarahkan ke halaman dashboard'
                     );
                }else{
                    $joke = array(
                        'status' => 'error',
                        'pesan' => 'Password yang anda masukan salah, masukan password yang benar !'
                     );
                }
            }else{
                $joke = array(
                    'status' => 'error',
                    'pesan' => 'Username tidak ditemukan, coba login lagi'
                );
            }
            
            $res = $this->func->cryptoJsAesEncrypt(KEY, $joke);

        // akhir fungsi auth login
        }else{
            $res = array(
                'status' => 'error',
                'pesan' => 'Permintaan server salah, coba lagi !'
            );
        }
        echo json_encode($res);
    }

}


 ?>