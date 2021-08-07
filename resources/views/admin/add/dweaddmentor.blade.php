<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/dropzone.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper default-wrapper" id="pageWrapper">
        <!-- Page Header Start-->

        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">
                        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                        <div class="ProfileCard-details">
                            <div class="ProfileCard-realName">{{name}}</div>
                        </div>
                    </div>
                </script>
                <script class="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>
            </div>
        </div>


        <div class="page-body-wrapper default-menu default-menu">
            <!-- <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper">
                        <a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn">
                                    <a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1">General</h6>
                                        <p class="lan-2">Dashboards,widgets & layout.</p>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title" href="#"><i data-feather="home"></i>Formalar</a>
                                    <ul class="sidebar-submenu">
                                        <li><a class="" href="ckeditor.html">Ck Editor</a></li>
                                        <li><a class="" href="projectcreate.html">PrCreate</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div> -->



            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12">
                                <h3></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="#" method="POST">

                                        <div class="form theme-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label>Mentordin` Toliq Ati (Ati Familiyasi)</label>
                                                        <input class="form-control" name="full_name" type="text" placeholder="Sharapat Kalabayev">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label>Telefon Nomeri</label>
                                                        <input class="form-control" name="phone" type="text" placeholder="+998991234678">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label>Email</label>
                                                        <input class="form-control" name="email" type="text" placeholder="...@...mail.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="mb-3 ">
                                                        <label>Taj`ribesi</label><br>
                                                        <input class="form-control" name="experiense" type="text" placeholder="10 jil">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label>Qa`yerdi Bitirgen</label>
                                                        <input class="form-control" name="bitirgen" type="text " placeholder="TATU No`kis Filiali...">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="mb-3 ">
                                                        <label>Qaysi Kursdin` Mentori</label><br>
                                                        <select class="form-control" name="id_course" id="">
                                                            <option class="form-control" value="">Web dasturlew(Frontend)</option>
                                                            <option class="form-control" value="">Web dasturlew(Frontend)</option>
                                                            <option class="form-control" value="">Web dasturlew(Frontend)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="">Telegram<i class="fab fa-telegram fa-2x"></i></label>
                                                        <input class="form-control" name="telegram" type="text " placeholder="@ati...">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="mb-3 ">
                                                        <label>Facebook Accounti<i class="fab fa-facebook fa-2x"></i></label><br>
                                                        <input class="form-control" name="facebook" type="text " placeholder="Facabookdag`i atin jazin`">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="mb-3 ">
                                                        <label class="mb-1 form-label">Instagram Accounti<i class="fab fa-instagram fa-2x"></i></label><br>
                                                        <input class="form-control" name="instagram" type="text " placeholder="Instaname in jazin`">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="mb-3 ">
                                                        <label class="mb-1 form-label">Tuwilg`an Kuni<i class="fas fa-birthday-cake fa-2x"></i></label><br>
                                                        <input class="form-control" name="birthday" type="text " placeholder="12.03.1998">
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="mb-3 ">
                                                        <label>O`miri Turali Qosimsha</label>
                                                        <textarea class="form-control " name="about " placeholder="Qosimsha mag`liwmat... " id=" " cols="30 " rows="10 "></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 ">
                                                        <label>Portfolio Ushin Qosimsha</label>
                                                        <textarea class="form-control " name="portfolio_detail " placeholder="Qosimsha mag`liwmat... " id=" " cols="30 " rows="10 "></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row ">

                                            </div>

                                            <div class="row ">
                                                <div class="col ">
                                                    <div class="text-end "><a class="btn btn-success me-3 " href="# ">OK</a></div>
                                                </div>
                                            </div>
                                    </form>
                                    <div class="row ">
                                        <div class="col ">
                                            <div class="mb-3 ">
                                                <label>Suret Kiritin` (1 dana)</label>
                                                <form class="dropzone " id="singleFileUpload " action="/upload.php ">
                                                    <div class="dz-message needsclick "><i class="icon-cloud-up "></i>
                                                        <h6></h6><span class="note needsclick ">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer ">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-md-12 footer-copyright text-center ">
                            <p class="mb-0 ">Copyright 2021 © Cuba theme by pixelstrap </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js "></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js "></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js "></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js "></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js "></script>
    <script src="../assets/js/scrollbar/custom.js "></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js "></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js "></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.js "></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js "></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js "></script>
    <script src="../assets/js/dropzone/dropzone.js "></script>
    <script src="../assets/js/dropzone/dropzone-script.js "></script>
    <script src="../assets/js/typeahead/handlebars.js "></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js "></script>
    <script src="../assets/js/typeahead/typeahead.custom.js "></script>
    <script src="../assets/js/typeahead-search/handlebars.js "></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js "></script>
    <script src="../assets/js/tooltip-init.js "></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js "></script>
    <script src="../assets/js/theme-customizer/customizer.js "></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>