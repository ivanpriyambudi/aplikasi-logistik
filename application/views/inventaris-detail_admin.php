<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Detail Inventaris</title>

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
                            <p>EAD</p>
                            <span>ead@gmail.com<i class="material-icons right">arrow_drop_down</i></span>
                        </a>
                    </div>
                </div>
                <div class="sidebar-account-settings">
                    <ul>
                        <li class="no-padding">
                            <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Data Pinjam</a>
                        </li>
                        <li class="no-padding">
                            <a class="waves-effect waves-grey"><i class="material-icons">done</i>Data Request</a>
                        </li>
                        <li class="divider"></li>
                        <li class="no-padding">
                            <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                        </li>
                    </ul>
                </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding"><a class="waves-effect waves-grey active" href="<?php echo base_url(); ?>dasboard_admin"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>

                    <li class="no-padding active">
                        <a class="collapsible-header waves-effect waves-grey active"><i class="material-icons">apps</i>Data Barang<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?php echo base_url('admin/inventaris_admin'); ?>" class="active-page">Inventaris</a></li>
                                <li><a href="<?php echo base_url('admin/barang_eksternal_admin'); ?>">Barang Eksternal</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">cloud_download</i>Pengadaan<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?php echo base_url('admin/pengadaan_admin'); ?>">Pengadaan Barang Baru</a></li>
                                <li><a href="<?php echo base_url('admin/pengadaan_barang_data_admin'); ?>">Data Pengadaan Barang</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a href="<?php echo base_url('admin/request_admin'); ?>" class="waves-effect waves-grey"><i class="material-icons">cloud_upload</i>Request</a>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="mn-inner no-p">
            <div id="modal1" class="modal" style="width: 70%; max-height: 100%; z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7);">

                <div class="modal-content" style="padding-bottom: 0px;">
                    <section>
                        <div class="wizard-content" style="padding-bottom: 0px;">

                            <form class="col s12" method="post" action="<?php echo base_url('admin/ '); ?>">
                                <?php foreach ($detailbarangadmin as $d) { 
                                    ?>
                                    <div class="row">
                                        <div class="col m6">
                                            <div class="row">
                                                <div class="input-field col m12 s12">
                                                    <label class="active" for="nama_barang">Nama Barang</label>
                                                    <input id="nama_barang" name="nama_barang" type="text" class="required validate" value="<?php echo $d->nama_barang; ?>">
                                                </div>
                                                <div class="input-field col m12 s12">
                                                    <label class="active" for="kategori">Kategori</label>
                                                    <input id="kategori" name="kategori" type="text" class="required validate" value="<?php echo $d->kategori; ?>">
                                                </div>
                                                <div class="input-field col m12 s12">
                                                    <label class="active" for="jumlah">Jumlah</label>
                                                    <input id="jumlah" name="jumlah" type="number" class="required validate" value="<?php echo $d->jumlah; ?>">
                                                </div>
                                                <div class="input-field col m12 s12">
                                                    <select name="status">
                                                        <option value="<?php echo $d->status; ?>"><?php echo $d->status; ?></option>
                                                        <option value="Available">Available</option>
                                                        <option value="Not Available">Not Available</option>
                                                    </select>
                                                    <label>Status Barang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col m6">
                                            <div class="row">

                                                <div class="input-field col m12 s12">
                                                    <textarea id="deskripsi" name="deskripsi" class="materialize-textarea" length="120"><?php echo $d->deskripsi; ?></textarea>
                                                    <label class="active" for="textarea1">Deskripsi</label>
                                                </div>

                                                <div class="input-field col s12">
                                                 <form action="#" class="p-v-xs">
                                                    <div class="file-field input-field">
                                                        <div class="btn teal lighten-1">
                                                            <span>Upload</span>
                                                            <input type="file" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload Gambar Barang">
                                                        </div>
                                                    </div>
                                                </form>
                                                <input id="id_barang" name="id_barang" type="text" class="required validate" value="<?php echo $d->id_barang; ?>" hidden>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col m12 s12 center">
                                            <button class="waves-effect waves-teal btn-flat" type="submit">Simpan Perubahan</button>
                                        </div>
                                    </div>

                                </div>
                            <?php } ?>
                        </form>
                        
                    </div>
                </section>
            </div>
            


            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat ">Keluar</a>
            </div>
        </div>
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#modal1"><i class="material-icons">edit</i></a>
        </div>
        <div class="cyan darken-1">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card card-transparent no-m">
                            <div class="card-content  white-text">
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <?php foreach ($detailbarangadmin as $c) {
                                            ?>
                                            <h4><?php echo $c->nama_barang; ?></h4>

                                            <address>
                                                Kode Barang : <br>
                                                <?php echo $c->id_barang; ?>
                                            </address>
                                        </div>
                                        <div class="col s12 m6 l6 right-align">
                                            <h4><?php echo $c->kategori; ?></h4>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l6">
                     <div class="card card-transparent">
                        <div class="card-content">
                            <h5>Deskripsi Barang</h5>
                            <blockquote>
                                <?php echo $c->deskripsi; ?>
                            </blockquote>

                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">

                    <div class="card card-transparent">
                        <div class="card-content">
                            <h5>Data Barang</h5>
                            <br>
                            <ul class="collection">
                                <li class="collection-item">Jumlah : <?php echo $c->jumlah; ?></li>
                                <li class="collection-item">Status : <?php echo $c->status; ?></li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        <?php }?>


        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card card-transparent no-m">
                    <div class="card-content invoice-relative-content">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col s12 m8 l8">
                                <img class="materialboxed responsive-img" src="assets/images/card-image.jpg" alt="">

                                <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                                    <li class="">
                                        <div class="collapsible-header"><i class="material-icons">delete</i>DELETE</div>
                                        <div class="collapsible-body" style="display: none;">

                                            <p style="padding-bottom: 1rem;">Jika anda yakin untuk menghapus data barang ini, maka silahkan klik link di bawah ini!</p>

                                            <form class="col s12" method="post" action="<?php echo base_url('admin/delete_barang'); ?>">

                                                <?php foreach ($detailbarangadmin as $d) { ?>
                                                    
                                                    <div class="center">
                                                        <input id="id_barang" name="id_barang" type="text" class="required validate" value="<?php echo $d->id_barang; ?>" hidden>
                                                        <button type="submit" class="waves-effect waves-teal btn-flat">DELETE</button>
                                                    </div>

                                                <?php } ?>

                                            </form>

                                            <br>
                                            <br>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col s12 m4 l4">
                                <ul class="collection">
                                    <li class="collection-item avatar">
                                        <img src="assets/images/profile-image.png" alt="" class="circle">
                                        <span class="title">Title</span>
                                        <p>First Line <br>
                                            Second Line
                                        </p>

                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="material-icaons circle">folder</i>
                                        <span class="title">Title</span>
                                        <p>First Line <br>
                                            Second Line
                                        </p>

                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="material-icons circle green">insert_chart</i>
                                        <span class="title">Title</span>
                                        <p>First Line <br>
                                            Second Line
                                        </p>

                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="material-icons circle red">play_arrow</i>
                                        <span class="title">Title</span>
                                        <p>First Line <br>
                                            Second Line
                                        </p>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>



    </div>
</main>
<div class="page-footer">
    <div class="footer-grid container">
        <div class="footer-l white">&nbsp;</div>
        <div class="footer-grid-l white">
            <a class="footer-text" href="<?php echo base_url('admin/inventaris_admin');?>">
                <i class="material-icons arrow-l">arrow_back</i>
                <span class="direction">Kembali</span>
                <div>
                    Inventaris
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