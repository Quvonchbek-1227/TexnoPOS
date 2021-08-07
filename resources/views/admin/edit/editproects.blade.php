<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="{{asset('../assets2/images/favicon.png')}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{asset('../assets2/images/favicon.png')}}" type="image/x-icon">
        <title>Cuba - Premium Admin Template</title>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/font-awesome.css')}}">
        <!-- ico-font-->
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/vendors/icofont.css')}}">
        <!-- Themify icon-->
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/vendors/themify.css')}}">
        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/vendors/flag-icon.css')}}">
        <!-- Feather icon-->
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/vendors/feather-icon.css')}}">
        <!-- Plugins css start-->
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/vendors/scrollbar.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/vendors/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/vendors/date-picker.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/vendors/dropzone.css')}}">
        <!-- Plugins css Ends-->
        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/vendors/bootstrap.css')}}">
        <!-- App css-->
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/style.css')}}">
        <link id="color" rel="stylesheet" href="{{asset('../assets2/css/color-1.css" media="screen')}}">
        <!-- Responsive css-->
        <link rel="stylesheet" type="text/css" href="{{asset('../assets2/css/responsive.css')}}">
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
                            <div class="ProfileCard-realName"></div>
                        </div>
                    </div>
                </script>
                <script class="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>
            </div>
        </div>


        <div class="page-body-wrapper default-menu default-menu">
            @include('admin.includes.sidebar')

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center" style="text-transform: unset">Praectdi O`zgertiw!</h3>
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
                                    <form enctype="multipart/form-data" action="{{ route('adminproects.update',['adminproect'=>$proect->id]) }}" method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form theme-form">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label>Mentor</label><br>
                                                        <input required class="form-check-input radio-mentor" id="test" name="full_name" type="radio">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label>Programmist</label><br>
                                                        <input required class="form-check-input radio-programmer" id="test" name="full_name" type="radio">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label>Student</label><br>
                                                        <input required class="form-check-input radio-student" id="test" name="full_name" type="radio">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label>Mentor</label>
                                                        <select required class="form-select select-mentor" name="id_mentor" id="">
                                                            @foreach ($mentors as $mentor)
                                                                <option class="form-control" value="{{$mentor->id}}">{{$mentor->full_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label>Programmist</label>
                                                        <select required class="form-select select-programmer" name="id_programmer" id="">
                                                            @foreach ($programmers as $programmer)
                                                                <option class="form-control" value="{{$programmer->id}}">{{$programmer->full_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label>Student</label>
                                                        <select required class="form-select select-student" name="id_student" id="">
                                                            @foreach ($students as $student)
                                                                <option class="form-control" value="{{$student->id}}">{{$student->full_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="">Proect Tipi</label>
                                                        <input required class="form-control" value="{{$proect->type}}" name="type" type="text " placeholder="proect tipi...">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="mb-3 ">
                                                        <label>Proectge Title</label><br>
                                                        <input required maxlength="19" class="form-control" value="{{$proect->title}}" name="title" type="text " placeholder="tile kiritin`">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3 ">
                                                        <label>Portfolio Ushin Qosimsha</label>
                                                        <textarea required class="form-control" name="portfolio_detail" placeholder="Qosimsha mag`liwmat..." id=" " cols="30 " rows="10 ">{{$proect->text}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="text-end ">
                                                        <input type="file" multiple name="suretler[]">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="text-end "><button class="btn btn-success me-3 " type="submit" href="# ">OK</button></div>
                                                </div>
                                            </div>
                                    </form>
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
    <script src="{{asset('../assets2/js/jquery-3.5.1.min.js ')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('../assets2/js/bootstrap/bootstrap.bundle.min.js ')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('../assets2/js/icons/feather-icon/feather.min.js ')}}"></script>
    <script src="{{asset('../assets2/js/icons/feather-icon/feather-icon.js ')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('../assets2/js/scrollbar/simplebar.js ')}}"></script>
    <script src="{{asset('../assets2/js/scrollbar/custom.js ')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('../assets2/js/config.js ')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('../assets2/js/sidebar-menu.js ')}}"></script>
    <script src="{{asset('../assets2/js/datepicker/date-picker/datepicker.js ')}}"></script>
    <script src="{{asset('../assets2/js/datepicker/date-picker/datepicker.en.js ')}}"></script>
    <script src="{{asset('../assets2/js/datepicker/date-picker/datepicker.custom.js ')}}"></script>
    <script src="{{asset('../assets2/js/dropzone/dropzone.js ')}}"></script>
    <script src="{{asset('../assets2/js/dropzone/dropzone-script.js ')}}"></script>
    <script src="{{asset('../assets2/js/typeahead/handlebars.js ')}}"></script>
    <script src="{{asset('../assets2/js/typeahead/typeahead.bundle.js ')}}"></script>
    <script src="{{asset('../assets2/js/typeahead/typeahead.custom.js ')}}"></script>
    <script src="{{asset('../assets2/js/typeahead-search/handlebars.js ')}}"></script>
    <script src="{{asset('../assets2/js/typeahead-search/typeahead-custom.js ')}}"></script>
    <script src="{{asset('../assets2/js/tooltip-init.js ')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('../assets2/js/script.js ')}}"></script>
    <script src="{{asset('../assets2/js/theme-customizer/customizer.js ')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
        $(document).ready(function() {

            $('.radio-mentor').click(function() {
                $('.select-mentor').prop('disabled', false);
                $('.select-programmer').prop('disabled', true).val(0).removeAttr('required');
                $('.select-student').prop('disabled', true).val(0).removeAttr('required');
            });
            $('.radio-programmer').click(function() {
                $('.select-mentor').prop('disabled', true).removeAttr('required');
                $('.select-student').prop('disabled', true).removeAttr('required');
                $('.select-programmer').prop('disabled', false);
            });
            $('.radio-student').click(function() {
                $('.select-mentor').prop('disabled', true).removeAttr('required');
                $('.select-student').prop('disabled', false);
                $('.select-programmer').prop('disabled', true).removeAttr('required');
            });
        });
    </script>

</body>

</html>