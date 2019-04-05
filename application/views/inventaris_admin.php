<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Inventaris</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">


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
<body>
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
    <div class="mn-content fixed-sidebar">
        <header class="mn-header navbar-fixed">
            <nav class="cyan darken-1">
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
        <aside id="slide-out" class="side-nav white fixed">
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
                            <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Data User</a>
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
        <main class="mn-inner">
            <div class="row">
                <div class="col s12">
                    <div class="page-title">Inventaris</div>
                </div>

                <div id="modal1" class="modal" style="width: 70%; max-height: 100%; z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7);">

                    <div class="modal-content" style="padding-bottom: 0px;">
                        <section>
                            <div class="wizard-content">
                                <form class="col s12" method="post" action="<?php echo base_url('admin/tambah_barang'); ?>">
                                    <div class="row">
                                        <div class="col m6">
                                            <div class="row">
                                                <div class="input-field col m12 s12">
                                                    <label for="nama_barang">Nama Barang</label>
                                                    <input id="nama_barang" name="nama_barang" type="text" class="required validate">
                                                </div>
                                                <div class="input-field col m12 s12">
                                                    <label for="kategori">Kategori</label>
                                                    <input id="kategori" name="kategori" type="text" class="required validate">
                                                </div>
                                                <div class="input-field col m12 s12">
                                                    <label for="jumlah">Jumlah</label>
                                                    <input id="jumlah" name="jumlah" type="number" class="required validate">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col m6">
                                            <div class="row">
                                                <div class="input-field col m12 s12">
                                                    <textarea id="deskripsi" class="materialize-textarea" length="120" name="deskripsi"></textarea>
                                                    <label for="deskripsi">Deskripsi</label>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col m12 s12 center">
                                            <button class="waves-effect waves-teal btn-flat" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>


                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat ">Keluar</a>
                </div>
            </div>

            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
            </div>

            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <table id="example" class="display responsive-table datatable-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($tampilbarang as $t) {
                                    ?>
                                    <?php $link=$t->id_barang; ?>
                                    <tr> 
                                        <td><?php echo $t->id_barang; ?></td>
                                        <td><?php echo $t->nama_barang; ?></td>
                                        <td><?php echo $t->kategori; ?></td>
                                        <td><?php echo $t->jumlah; ?></td>
                                        <td><?php echo $t->status; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>/admin/inventaris_detail_admin/<?php echo str_replace(' ', '-', strtolower($link)); ?>" class="waves-effect waves-blue btn-flat">Detail</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="page-footer">
        <div class="footer-grid container">
            <div class="footer-l white">&nbsp;</div>
            <div class="footer-grid-l white">

            </div>
            <div class="footer-r white">&nbsp;</div>
            <div class="footer-grid-r white">
                <a class="footer-text" href="inventaris-semua.html">
                    <i class="material-icons arrow-r">arrow_forward</i>
                    <br>
                    <div>
                        Semua Inventaris
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
<script src="<?php echo base_url('assets'); ?>/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/alpha.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/pages/table-data.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/pages/ui-modals.js"></script>

</body>
</html>