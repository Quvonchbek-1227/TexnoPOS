<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets2/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets2/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets2/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets2/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets2/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets2/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets2/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets2/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets2/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets2/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="../assets2/css/vendors/dropzone.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets2/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets2/css/style.css">
    <link id="color" rel="stylesheet" href="../assets2/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets2/css/responsive.css">
</head>

@include('admin.includes.sidebar')
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
                                    <form action="{{url('adminstudents')}}" method="POST">
                                    @csrf
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
                                                        <label>Qaysi Kursdi Bitirgen</label><br>
                                                        <select class="form-control" name="id_course" id="">
                                                            @foreach($courses as $course)
                                                            <option class="form-control" value="{{$course->id}}">{{$course->name}}</option>
                                                            @endforeach
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
                                                        <textarea class="form-control " name="about" placeholder="Qosimsha mag`liwmat... " id=" " cols="30 " rows="10 "></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 ">
                                                        <label>Portfolio Ushin Qosimsha</label>
                                                        <textarea class="form-control " name="portfolio_detail" placeholder="Qosimsha mag`liwmat... " id=" " cols="30 " rows="10 "></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row ">

                                            </div>

                                            <div class="row ">
                                                <div class="col ">
                                                    <div class="text-end "><input type="submit" class="btn btn-success me-3 "></div>
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
    <script src="../assets2/js/jquery-3.5.1.min.js "></script>
    <!-- Bootstrap js-->
    <script src="../assets2/js/bootstrap/bootstrap.bundle.min.js "></script>
    <!-- feather icon js-->
    <script src="../assets2/js/icons/feather-icon/feather.min.js "></script>
    <script src="../assets2/js/icons/feather-icon/feather-icon.js "></script>
    <!-- scrollbar js-->
    <script src="../assets2/js/scrollbar/simplebar.js "></script>
    <script src="../assets2/js/scrollbar/custom.js "></script>
    <!-- Sidebar jquery-->
    <script src="../assets2/js/config.js "></script>
    <!-- Plugins JS start-->
    <script src="../assets2/js/sidebar-menu.js "></script>
    <script src="../assets2/js/datepicker/date-picker/datepicker.js "></script>
    <script src="../assets2/js/datepicker/date-picker/datepicker.en.js "></script>
    <script src="../assets2/js/datepicker/date-picker/datepicker.custom.js "></script>
    <script src="../assets2/js/dropzone/dropzone.js "></script>
    <script src="../assets2/js/dropzone/dropzone-script.js "></script>
    <script src="../assets2/js/typeahead/handlebars.js "></script>
    <script src="../assets2/js/typeahead/typeahead.bundle.js "></script>
    <script src="../assets2/js/typeahead/typeahead.custom.js "></script>
    <script src="../assets2/js/typeahead-search/handlebars.js "></script>
    <script src="../assets2/js/typeahead-search/typeahead-custom.js "></script>
    <script src="../assets2/js/tooltip-init.js "></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets2/js/script.js "></script>
    <script src="../assets2/js/theme-customizer/customizer.js "></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>