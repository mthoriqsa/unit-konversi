<!-- Sidebar -->
<ul class="sidebar navbar-nav">

    <!-- Kubik -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kelompok2' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Kubik</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('kelompok2/Cl') ?>">Centiliter</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok2/Dl') ?>">Desiliter</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok2/Kl') ?>">Kiloliter</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok2/Ml') ?>">Mililiter</a>
        </div>
    </li>

    <!-- Kecepatan -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kelompok3' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Kecepatan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('kelompok3/Mbkb') ?>">Kecepatan</a>
        </div>
    </li>

    <!-- Suhu -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Suhu</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('kelompok4/Hitung1') ?>">Suhu</a>
        </div>
    </li>

    <!-- Waktu -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Waktu</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('kelompok5/jamdetik') ?>">Jam - Detik</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok5/jamhari') ?>">Jam - Hari</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok5/jammenit') ?>">Jam - Menit</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok5/menitdetik') ?>">Menit - Detik</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok5/Menittoday') ?>">Menit - Hari</a>
        </div>
    </li>

    <!-- Tanggal -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kelompok3' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Tanggal</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('kelompok7/Abadtahun') ?>">Abad - Tahun</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok7/Bulanhari') ?>">Bulan - Hari</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok7/Tahunbulan') ?>">Tahun - Bulan</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok7/Tahunhari') ?>">Tahun - Hari</a>
        </div>
    </li>

    <!-- Data -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kelompok2' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Data</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('kelompok8/Mbkb') ?>">Megabyte - Kilobyte</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok8/Mbgb') ?>">Megabyte - Gigabyte</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok8/Gbkb') ?>">Gigabyte - Kilobyte</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok8/Gbtb') ?>">Gigabyte - Terabyte</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok8/Tbpb') ?>">Terabyte - Petabyte</a>
        </div>
    </li>

    <!-- Trigonometri -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kelompok3' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Trigonometri</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('kelompok9/acos') ?>">Arc Cos</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok9/cos') ?>">Cos</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok9/konversitrigonometri') ?>">Sin</a>
            <a class="dropdown-item" href="<?php echo site_url('kelompok9/tan') ?>">Tan</a>
        </div>
    </li>

    <!-- Jarak -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kelompok3' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Jarak</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('kelompok10/Konversi_k10') ?>">Jarak</a>
        </div>
    </li>
</ul>