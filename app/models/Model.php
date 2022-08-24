<?php 
class Model {
    private $db;

    public function __construct()
    {
    	$this->sandi = new Encrypt();
        $this->db = new Medoo([
		'database_type' => 'mysql',
		'database_name' => DB_NAME,
		'server' => DB_HOST,
		'username' => DB_USER,
		'password' => DB_PASS
		]);
    }

    public function login($data,$rules){
    	if ($rules == 'user') {
    		$a = $this->db->select('user',[
    			'id_user'
    		],[
    			'username' => $data['username']
    		]);
    		$b = count($a);
    	}elseif ($rules == 'password') {
    		$a = $this->db->select('user',[
    			'id_user'
    		],[
    			'username' => $data['username'],
    			'password' => $data['password']
    		]);
    		$b = count($a);
    	}elseif ($rules == 'data') {
    		$b = $this->db->get('user',[
    			'id_user',
    			'username',
    			'nama',
    			'role',

    		],[
    			'username' => $data['username'],
    			'password' => $data['password']
    		]);
    	}

    	return $b;
    }
}

 ?>