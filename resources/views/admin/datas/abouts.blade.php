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
    <link rel="stylesheet" type="text/css" href="../assets2/css/vendors/datatables.css">
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
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Biz Haqqimizda</h3>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                  <a class="btn btn-primary active" href="{{url('adminabouts/create')}}">Qosiw</a>
                    <h5></h5><span></span>
                  </div>
                  <div class="card-body">
                  
                  
                    <div class="table-responsive">
                      
                      <table class="display" id="basic-1">
                        
                                                <thead>
                                                <tr>
                                                <th>title</th>
                                                <th>text</th>
                                                <th>img</th>
                                               
                                                <th btn btn-danger btn-sm><i class="fa fa-trash"></th>
                                                <th><i class="fa fa-pencil"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                      
                                                    @foreach($abouts as $about)
                                                    <tr>
                                                    <td>{{$about->title}}</td>
                                                    <td>{{$about->text}}</td>
                                                    <td>{{$about->img}}</td>
                                                   <td>
                                                  <form action="{{url('/adminabouts/'.$about->id)}}" method="POST">
                                                  {{ method_field('DELETE') }}
                                                  {{ csrf_field() }}
                                                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                  </form>
                                                    </td>
                                                    <td><a class="btn btn-danger btn-sm" href="{{route('adminabouts.edit', ['adminabout' => $about->id])}}"><i class="fa fa-pencil"></i></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                      
                      
                      
                      </table>
                     
                    </div>
                  </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->
              <!-- Feature Unable /Disable Order Starts-->
             
              <!-- Feature Unable /Disable Ends-->
              <!-- Default ordering (sorting) Starts-->
              
              <!-- Default ordering (sorting) Ends-->
              <!-- Multi-Column Starts-->
              
              <!-- Multi-Column Ends-->
              <!-- Multiple tables Start-->
             
              <!-- Multiple tables Ends-->
              <!-- Hidden Starts-->
              
              <!-- Hidden Ends-->
              <!-- Complex headers (rowspan and colspan) Starts-->
              
              <!-- Complex headers (rowspan and colspan) Ends-->
              <!-- DOM Positioning Starts-->
             
              <!-- DOM positioning Ends-->
              <!-- Flexible table width Starts-->
              
              <!-- Flexible table width  Ends-->
              <!-- State saving Starts-->
              
              <!-- State saving Ends-->
              <!-- Alternative pagination Starts-->
              
              <!-- Alternative pagination Ends-->
              <!-- Scroll - vertical Starts-->
              
              <!-- Scroll - vertical Ends-->
              <!-- Scroll - vertical dynamic Starts-->
              
              <!-- Scroll - vertical dynamic Ends-->
              <!-- Scroll - horizontal Starts-->
              
              <!-- Scroll - horizontal Ends-->
              <!-- Language Starts-->
              
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2021 ?? Cuba theme by pixelstrap  </p>
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
    <script src="../assets2/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets2/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets2/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets2/js/script.js"></script>
    <script src="../assets2/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>