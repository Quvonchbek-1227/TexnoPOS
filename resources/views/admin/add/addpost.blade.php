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
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Ck Editor</h5>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" class="form" action="{{route('adminposts.store')}}" method="POST">
                                    @csrf
                                        <div class="row mb-5">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" name="title" class="form-control" placeholder="title...">
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="date">Sa`neni Kiritin`</label>
                                                    <input type="date" name="date" class="form-control">
                                                </div>
                                            </div> --}}
                                            <div class="col-md-4">
                                                <label for="img" class="form-label">Suret Kiritin`</label>
                                                <input id="img" type="file" name="img" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="" class="form-label">Text Kiritin`!</label>
                                                <textarea name="text" class="form-control" cols="30" rows="10" placeholder="Text..."></textarea>
                                            </div>
                                            <div class="col-md-3 mt-5">
                                                <div class="form-group">
                                                    <input class="form-control btn btn-primary" type="submit" value="OK"></input>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2021 © Cuba theme by pixelstrap</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets2/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets2/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets2/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets2/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets2/js/scrollbar/simplebar.js"></script>
    <script src="../assets2/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets2/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets2/js/sidebar-menu.js"></script>
    <script src="../assets2/js/editor/ckeditor/ckeditor.js"></script>
    <script src="../assets2/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="../assets2/js/editor/ckeditor/styles.js"></script>
    <script src="../assets2/js/editor/ckeditor/ckeditor.custom.js"></script>
    <script src="../assets2/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets2/js/script.js"></script>
    <script src="../assets2/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>