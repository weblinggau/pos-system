
 <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a id="pengaturan" href="<?= BASEURL.'/panel/akun'; ?>" class="nav-link">
              <i class="nav-icon far fa-user"></i>
                <p>
                  Pengaturan Akun
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a id="kasir" href="<?= BASEURL.'/panel/kasir'; ?>" class="nav-link">
              <i class="nav-icon fa fa-cart-plus"></i>
                <p>
                  Kasir
                </p>
            </a>
          </li>
          <li id="laporan-parent" class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-newspaper"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id="riwayat" href="<?= BASEURL.'/panel/riwayat'; ?>" class="nav-link">
                  <i class="fa fa-money-check nav-icon"></i>
                  <p>
                    Riwayat Tranksaksi
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a id="pendapatan" href="<?= BASEURL.'/panel/pendapatan'; ?>" class="nav-link">
                  <i class="fa fa-money-bill nav-icon"></i>
                  <p>Laporan Pendapatan</p>
                </a>
              </li>
            </ul>
          </li>
          <li id="stock-parent" class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-layer-group"></i>
              <p>
                Stock
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id="input" href="<?= BASEURL.'/panel/input'; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Input Stock Barang
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a id="stock" href="<?= BASEURL.'/panel/stock'; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Stock</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= BASEURL.('/auth/logout'); ?>" class="nav-link">
              <i class="nav-icon far fa-edit"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>