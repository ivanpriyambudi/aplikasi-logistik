<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Detail Peminjaman</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        


    <!-- Theme Styles -->
    <link href="<?php echo base_url('assets'); ?>/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets'); ?>/css/custom.css" rel="stylesheet" type="text/css"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="white">
    <div class="loader-bg"></div>
    <div class="loader">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-spinner-teal lighten-1">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mn-content">
        <header class="mn-header navbar-fixed">
            <nav class="cyan darken-1 bs-n">
                <div class="nav-wrapper row">
                    <section class="material-design-hamburger navigation-toggle">
                        <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                            <span class="material-design-hamburger__layer"></span>
                        </a>
                    </section>
                    <div class="header-title col s3">      
                        <span class="chapter-title">L - EAD</span>
                    </div>
                    <ul class="right col s9 m3 nav-right-menu">
                        <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                        <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                        <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                    </ul>

                    <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                        <li class="notificatoins-dropdown-container">
                            <ul>
                                <li class="notification-drop-title">Today</li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                            <div class="notification-text"><p><b>Alan Grey</b> uploaded new theme</p><span>7 min ago</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle deep-purple"><i class="material-icons">cached</i></div>
                                            <div class="notification-text"><p><b>Tom</b> updated status</p><span>14 min ago</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle red"><i class="material-icons">delete</i></div>
                                            <div class="notification-text"><p><b>Amily Lee</b> deleted account</p><span>28 min ago</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">person_add</i></div>
                                            <div class="notification-text"><p><b>Tom Simpson</b> registered</p><span>2 hrs ago</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">file_upload</i></div>
                                            <div class="notification-text"><p>Finished uploading files</p><span>4 hrs ago</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-drop-title">Yestarday</li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                            <div class="notification-text"><p>Security issues fixed</p><span>16 hrs ago</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle indigo"><i class="material-icons">file_download</i></div>
                                            <div class="notification-text"><p>Finished downloading files</p><span>22 hrs ago</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">code</i></div>
                                            <div class="notification-text"><p>Code changes were saved</p><span>1 day ago</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside id="slide-out" class="side-nav white">
            <div class="side-nav-wrapper">
                <div class="sidebar-profile">
                    <div class="sidebar-profile-image">
                        <img src="assets/images/profile-image.png" class="circle" alt="">
                    </div>
                    <div class="sidebar-profile-info">
                        <a href="javascript:void(0);" class="account-settings-link">
                            <p>DASPRO</p>
                            <span>username<i class="material-icons right">arrow_drop_down</i></span>
                        </a>
                    </div>
                </div>
                <div class="sidebar-account-settings">
                    <ul>
                        <li class="no-padding">
                            <a href="pemberitahuan.html" class="waves-effect waves-grey"><i class="material-icons">notifications</i>Data Request</a>
                        </li>
                        <li class="divider"></li>
                        <li class="no-padding">
                            <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                        </li>
                    </ul>
                </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo base_url(); ?>dasboard"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo base_url('login/peminjaman_barang_user'); ?>"><i class="material-icons">note_add</i>Peminjaman Baru</a></li>
                    <li class="no-padding active"><a class="waves-effect waves-grey active" href="<?php echo base_url('login/peminjaman_data_user'); ?>"><i class="material-icons" class="active-page">dvr</i>Data Peminjaman</a></li>
                </ul>
            </div>
        </aside>
        <main class="mn-inner no-p">

            <div class="cyan darken-1">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card card-transparent no-m">
                                <div class="card-content  white-text">
                                    <div class="row">
                                        <div class="col s12 m6 l6">
                                            <h4>Detail Peminjaman</h4>
                                            <address>
                                                ID Peminjaman : Lab
                                            </address>
                                        </div>
                                        <div class="col s12 m6 l6 right-align">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <?php foreach ($detailuser as $c) {

                    if ($c->status=="pending") {
                        echo '<div class="card-panel orange darken-1">
                        <div><h5 class="white-text">Status Peminjaman : Pending</h5></div>
                        <p class="white-text">Tunggu konfirmasi dari Admin.</p>
                        </div>';
                    }else if ($c->status=="terima") {
                        echo '<div class="card-panel green darken-13">
                        <div><h5 class="white-text">Status Peminjaman : Diterima</h5></div>
                        <p class="white-text">Tunjukkan ID Peminjaman kepada Admin Logistik EAD saat pengambilan barang.</p>
                        </div> <br>';
                    }else{
                        echo '<div class="card-panel red darken-13">
                        <div><h5 class="white-text">Status Peminjaman : Ditolak</h5></div>
                        <p class="white-text">Alasan : </p>
                        </div>
                        <br>';
                        echo $c->status;
                    }

                } ?>

                <div class="divider"></div>
                <div class="row">
                    <div class="col s12 m12 l8">
                       <div class="card card-transparent">
                        <div class="card-content">
                            <h5>Data Barang</h5>
                            <br>
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th data-field="id">Nama Barang</th>
                                        <th data-field="name">Jumlah Request</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($barang as $c) { ?>
                                        <tr>
                                            <td><?php echo $c->nama_barang?></td>
                                            <td><?php echo $c->jumlah_barang?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">

                    <div class="card card-transparent">
                        <div class="card-content">
                            <h5>Data Peminjaman</h5>
                            <br>
                            <?php foreach ($detailuser as $c) { ?>
                                <ul class="collection">
                                    <li class="collection-item">Nama Pemohon : <br> <?php echo $c->nama_peminjam ?></li>
                                    <li class="collection-item">Tanggal Input Request : <br> <?php echo $c->tgl_pembuatan ?></li>
                                    <li class="collection-item">Tanggal Digunakan : <br> <?php echo $c->tgl_dibutuhkan ?></li>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                    <ul class="collapsible collapsible-accordion" data-collapsible="accordion">

                        <?php foreach ($detailuser as $c) { ?>

                            <li class="">
                                <div class="collapsible-header"><i class="material-icons">delete</i>Hapus Permintaan</div>
                                <div class="collapsible-body" style="display: none;">
                                    <p style="padding-bottom: 1rem;">Jika anda yakin untuk menghapus permintaan peminjaman ini, maka silahkan klik link di bawah ini!</p>

                                    <form class="col s12" method="post" action="<?php echo base_url('login/hapus_peminjaman'); ?>">

                                        <div class="center">
                                            <input id="id_keranjang" name="id_keranjang" type="text" class="required validate" value="<?php echo $c->id_keranjang; ?>" hidden>
                                            <button type="sumbit" class="waves-effect waves-teal btn-flat">Hapus</button>
                                        </div>

                                    </form>

                                    <br>
                                    <br>
                                </div>
                            </li>

                        <?php }?>

                    </ul>

                </div>
            </div>
            

            

        </div>
    </main>
    <div class="page-footer">
        <div class="footer-grid container">
            <div class="footer-l white">&nbsp;</div>
            <div class="footer-grid-l white">
                <a class="footer-text" href="<?php echo base_url('login/peminjaman_barang_user'); ?>">
                    <i class="material-icons arrow-l">arrow_back</i>
                    <span class="direction">Kembali</span>
                    <div>
                        Data Peminjaman
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="left-sidebar-hover"></div>

<!-- Javascripts -->
<script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/materialize/js/materialize.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/alpha.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/pages/ui-modals.js"></script>

</body>
</html>