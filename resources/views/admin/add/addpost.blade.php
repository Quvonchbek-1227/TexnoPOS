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
                                    <form class="form" action="{{url('/adminposts')}}" method="POST">
                                    @csrf
                                        <div class="row mb-5">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" name="title" class="form-control" placeholder="title...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="date">Sa`neni Kiritin`</label>
                                                    <input type="date" name="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="img" class="form-label">Suret Kiritin`</label>
                                                <input id="img" type="file" name="img" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Content</label>
                                                    <textarea id="editor1" name="text" cols="30" rows="10">
                                            
                                                    <a id="tech-details" name="tech-details"></a>
                                               
                                                <table align="right"
                                                    border="1"
                                                    cellpadding="5"
                                                    cellspacing="0"
                                                >
                                                    <caption>
                                                        <strong>Mission crew</strong>
                                                    </caption>
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Position</th>
                                                            <th scope="col">Astronaut</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Commander</td>
                                                            <td>Neil A. Armstrong</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Command Module Pilot</td>
                                                            <td>Michael Collins</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lunar Module Pilot</td>
                                                            <td>Edwin "Buzz" E. Aldrin, Jr.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>Launched by a
                                                    <strong>Saturn V</strong> rocket from
                                                    <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of
                                                    <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:
                                                </p>
                                                <ol>
                                                    <li>
                                                        <strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth
                                                    </li>
                                                    <li>
                                                        <strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water
                                                    </li>
                                                    <li>
                                                        <strong>Lunar Module</strong> for landing on the Moon.
                                                    </li>
                                                </ol>
                                                <p>After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the
                                                    <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the
                                                    <a href="#">Pacific Ocean</a> on July 24.
                                                </p>
                                        </textarea>
                                                </div>
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