<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="images/user/admin.jpg" width="60" height="60" alt="" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= strtoupper($ses_nama) ?></div>
            <div class="email"> Admin </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="<?php echo base_url(); ?>users"><i class="material-icons">person</i>Users</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>login"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">


            <li class="header">MENU UTAMA</li>

            <li <?php if ($pageM == 'dashboard') {
                    echo 'class="active"';
                } ?>>
                <a href="<?php echo base_url(); ?>dashboard">
                    <i class="material-icons">home</i>
                    <span>DASHBOARD</span>
                </a>
            </li>

            <li <?php if ($pageM == 'master') {
                    echo 'class="active"';
                } ?>>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">view_list</i>
                    <span>MASTER</span>
                </a>
                <ul class="ml-menu">
                    <li <?php if ($page == 'barang') {
                            echo 'class="active"';
                        } ?>>
                        <a href="<?php echo base_url(); ?>barang">Barang</a>
                    </li>
                </ul>
            </li>

            <li <?php if ($pageM == 'penjualan') {
                    echo 'class="active"';
                } ?>>
                <a href="<?php echo base_url(); ?>penjualan">
                    <i class="material-icons">assessment</i>
                    <span>PENJUALAN</span>
                </a>
            </li>

            <li <?php if ($pageM == 'prediksi') {
                    echo 'class="active"';
                } ?>>
                <a href="<?php echo base_url(); ?>prediksi">
                    <i class="material-icons">visibility</i>
                    <span>PREDIKSI</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2023 <a href="javascript:void(0);">Prediksi Penjualan APP</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
    <!-- #Footer -->
</aside>