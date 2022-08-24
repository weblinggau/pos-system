<?php 
class Panel extends Controller {
    public function __construct()
    {
        $this->sandi = new Encrypt();
        $this->func = new Inc();
	    $this->model = $this->model('Model');
	    if (isset($_SESSION['id_user']) == false) {
    		$this->func->riderect('/auth');
    	}
    }

    public function index(){
    	$data= array(
            'title' => 'Panel Dashboard',
            'menu' => 'themes/menu',
            'content' => 'home/index'
        );
        $this->view('themes/template',$data);
    }

    public function input(){
        $data= array(
            'title' => 'Input Stock',
            'menu' => 'themes/menu',
            'content' => 'stock/input',
            'menu-open' => '1',
            'menu-active' => '#input',
            'parent' => '#stock-parent'
        );
        $this->view('themes/template',$data);
    }

    public function stock(){
        $data= array(
            'title' => 'Laporan Stock Barang',
            'menu' => 'themes/menu',
            'content' => 'stock/stock',
            'menu-open' => '1',
            'menu-active' => '#stock',
            'parent' => '#stock-parent'
        );
        $this->view('themes/template',$data);
    }

    public function kasir(){
        $data= array(
            'title' => 'Aplikasi Kasir',
            'menu' => 'themes/menu',
            'content' => 'kasir/kasir',
            'menu-open' => '2',
            'menu-active' => '#kasir',
        );
        $this->view('themes/template',$data);
    }

    public function akun(){
        $data= array(
            'title' => 'Pengaturan Akun',
            'menu' => 'themes/menu',
            'content' => 'pengaturan/pengaturan',
            'menu-open' => '2',
            'menu-active' => '#pengaturan',
        );
        $this->view('themes/template',$data);
    }

    public function riwayat(){
        $data= array(
            'title' => 'Riwayat Tranksaksi',
            'menu' => 'themes/menu',
            'content' => 'laporan/riwayat',
            'menu-open' => '1',
            'menu-active' => '#riwayat',
            'parent' => '#laporan-parent'
        );
        $this->view('themes/template',$data);
    }

    public function pendapatan(){
        $data= array(
            'title' => 'Laporan Pendapatan',
            'menu' => 'themes/menu',
            'content' => 'laporan/pendapatan',
            'menu-open' => '1',
            'menu-active' => '#pendapatan',
            'parent' => '#laporan-parent'
        );
        $this->view('themes/template',$data);
    }
}


 ?>