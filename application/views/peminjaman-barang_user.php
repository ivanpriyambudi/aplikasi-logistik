<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Peminjaman Barang</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/materialize/css/materialize.min.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/plugins/select2/css/select2.css" rel="stylesheet"> 


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
                        <img src="<?php echo base_url('assets'); ?>/images/profile-image.png" class="circle" alt="">
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
                            <a href="<?php echo base_url('Dasboard/pemberitahuan_user'); ?>" class="waves-effect waves-grey"><i class="material-icons">notifications</i>Data Request</a>
                        </li>
                        <li class="divider"></li>
                        <li class="no-padding">
                            <a class="waves-effect waves-grey" href ="<?php echo base_url('Dasboard/logout'); ?>"><i class="material-icons">exit_to_app</i>Sign Out</a>
                        </li>
                    </ul>
                </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo base_url('Dasboard/index'); ?>"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
                    <li class="no-padding active"><a class="waves-effect waves-grey active" href="<?php echo base_url('Dasboard/peminjaman_barang_user'); ?>"><i class="material-icons" class="active-page">note_add</i>Peminjaman Baru</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo base_url('Dasboard/peminjaman_data_user'); ?>"><i class="material-icons">dvr</i>Data Peminjaman</a></li>
                </ul>
            </div>
        </aside>
        <main class="mn-inner">

            <div id="modal1" class="modal" style="width: 50%; max-height: 60%; z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7);">

                <div class="modal-content" style="padding-bottom: 0px;">
                    <section>
                        <div class="wizard-content">

                            <div class="row">
                                <div class="col m12">
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <label for="firstName">Nama Peminjam</label>
                                            <input id="firstName" name="firstName" type="text" class="required validate">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col m12 s12 center">
                                        <a class="waves-effect waves-teal btn-flat">Submit</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat ">Keluar</a>
                </div>
            </div>

            <div id="modal2" class="modal" style="width: 50%; max-height: 80%; z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7);">

                <div class="modal-content" style="padding-bottom: 0px;">
                    <section>
                        <div class="wizard-content">

                            <div class="row">
                                <div class="col m12">
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <h5>Pilih Keranjang Peminjaman</h5>
                                            <br>
                                            <table class="bordered">
                                                <thead>
                                                    <tr>
                                                        <th data-field="id">id</th>
                                                        <th data-field="name">Nama Peminjam</th>
                                                        <th data-field="name">Waktu Pembuatan</th>
                                                        <th data-field="name"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Eclair</td>
                                                        <td>Eclair</td>
                                                        <td><a class="waves-effect waves-blue btn-flat m-b-xs">Pilih</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Jellybean</td>
                                                        <td>Eclair</td>
                                                        <td><a class="waves-effect waves-blue btn-flat m-b-xs">Pilih</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Lollipop</td>
                                                        <td>Eclair</td>
                                                        <td><a class="waves-effect waves-blue btn-flat m-b-xs">Pilih</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>KitKat</td>
                                                        <td>Eclair</td>
                                                        <td><a class="waves-effect waves-blue btn-flat m-b-xs">Pilih</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

            <div class="row">
                <div class="col s12">
                    <div class="page-title">Peminjaman Barang</div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="card-panel" style="padding: 0px;">
                        <div class="row">
                            <div class="col s12 center">
                               <p>Sebelum melakukan peminjaman, buatlah keranjang peminjaman terlebih dahulu.</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col s12">
                <div class="card">
                    <div class="card-content" style="padding-bottom: 0px;">
                        <span class="card-title" style="margin-bottom: 0px;">Filter Pencarian Barang</span>
                        <div class="row">
                            <div class="col m12">
                                <div class="row">
                                    <div class="input-field col m3 s12">
                                        <select class="js-states browser-default" tabindex="-1" style="width: 100%" id="basic">
                                            <option value="" disabled selected>Pilih Kategori</option>
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </select>
                                    </div>
                                    <div class="input-field col m3 s12">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Nama Barang</label>
                                    </div>
                                    <form class="input-field col m2 s12 center">
                                        <p class="p-v-xs">
                                            <input type="checkbox" id="test2" />
                                            <label for="test2">Available</label>
                                        </p>
                                        <p class="p-v-xs">
                                            <input type="checkbox" id="test5" />
                                            <label for="test5">All</label>
                                        </p>
                                    </form>
                                    <div class="input-field col m2 s12 center">
                                        <a class="waves-effect waves-light btn blue m-b-xs">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col s12 m3">

                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?php echo base_url('assets'); ?>/images/card-image2.jpg" alt="">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                        <ul class="collection">
                            <li class="collection-item">Inventaris : DASPRO</li>
                            <li class="collection-item">Status : Available</li>
                            <li class="collection-item">Kategori : Elektronik</li>
                        </ul>
                        <div class="row" style="margin-bottom: 0px;">
                          <div class="col m6 s12 center">
                              <a class="waves-effect waves-blue btn-flat m-b-xs modal-trigger" href="#modal2" style="margin-bottom: 0px;">Pinjam</a>
                          </div>
                          <div class="col m6 s12 center">
                              <a href="<?php echo base_url('Dasboard/detail_barang_user'); ?>" class="waves-effect waves-blue btn-flat m-b-xs" style="margin-bottom: 0px;">Detail</a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?php echo base_url('assets'); ?>/images/card-image2.jpg" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

        </div>

        <div class="col s12 m3">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?php echo base_url('assets'); ?>/images/card-image2.jpg" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?php echo base_url('assets'); ?>/images/card-image2.jpg" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

        </div>

        <div class="col s12 m3">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?php echo base_url('assets'); ?>/images/card-image2.jpg" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?php echo base_url('assets'); ?>/images/card-image2.jpg" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

        </div>

        <div class="col s12 m3">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?php echo base_url('assets'); ?>/images/card-image2.jpg" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?php echo base_url('assets'); ?>/images/card-image2.jpg" alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Card Reveal<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Card Title<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
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
<script src="<?php echo base_url('assets'); ?>/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/alpha.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/pages/form-select2.js"></script>

</body>
</html>