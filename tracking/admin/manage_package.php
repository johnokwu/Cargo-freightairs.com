<?php   
   session_start();
   include 'server.php';
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Manage-Users | Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- App favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <!-- plugin css -->
      <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
      <!-- DataTables -->
      <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <!-- Responsive datatable examples -->
      <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <!-- preloader css -->
      <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />
      <!-- Bootstrap Css -->
      <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   </head>
   <body>
      <!-- <body data-layout="horizontal"> -->
      <!-- Begin page -->
      <div id="layout-wrapper">
         <?php include 'include/header.php'; ?>
         <!-- ========== Left Sidebar Start ========== -->
         <?php include 'include/sidebar.php'; ?>
         <!-- Left Sidebar End -->
         <!-- ============================================================== -->
         <!-- Start right Content here -->
         <!-- ============================================================== -->
         <div class="main-content">
            <div class="page-content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                           <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                 <li class="breadcrumb-item active">Manage-Packages</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="card">
                           <div class="card-header align-items-center d-flex">
                              <h4 class="card-title mb-0 flex-grow-1">Manage Packages</h4>
                              <div class="flex-shrink-0">
                                 <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                    <li class="nav-item">
                                       <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                       Users 
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- end nav tabs -->
                              </div>
                           </div>
                           <!-- end card header -->
                           <div class="card-body px-0">
                              <div class="tab-content">
                                 <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                    <div class="table-responsive px-3" data-simplebar >
                                       <table id="datatable" class="table nowrap w-100">
                                          <thead>
                                             <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Delivery Address</th>
                                                <th>Delivery Date</th>
                                                <th>Tracking ID</th>
                                                <th>Control</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <?php
                                                error_reporting(0);
                                                $all_packages=mysqli_query($conn,"SELECT * FROM packages");
                                                
                                                while ($data = mysqli_fetch_array($all_packages)) {
                                                    $id = $data['id'];
                                                    $recieversname = $data['recieversname'];
                                                    $recieversemail = $data['recieversemail'];
                                                    $deliverylocation = $data['deliverylocation'];
                                                    $date = $data['date'];
                                                    $trackingID = $data['trackingid'];
                                                    echo 
                                                    
                                                    ' <tr>
                                                    <td style="font-size: 14px;" class="font-w400 ">'.$recieversname.'</td>
                                                    <td style="font-size: 14px;" class="font-w400 ">'.$recieversemail.'</td>
                                                    <td style="font-size: 14px;" class="font-w400 ">'.$deliverylocation.'</td>
                                                    <td style="font-size: 14px;" class="font-w400 ">'.$date.'</td>
                                                    
                                                    <td style="font-size: 14px;" class="font-w400 ">'.$trackingID.'</td>
                                                    <td> <a href="package_edit.php?id='.$id.'&option=confirm" class="btn btn-rounded btn-primary">Manage</a> </td>
                                                    </tr>
                                                    ';
                                                    
                                                }
                                                ?>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php include 'include/footer.php'; ?>
         </div>
      </div>
      <div class="right-bar">
         <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center bg-dark p-3">
               <h5 class="m-0 me-2 text-white">Theme Customizer</h5>
               <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
               <i class="mdi mdi-close noti-icon"></i>
               </a>
            </div>
            <!-- Settings -->
            <hr class="m-0" />
            <div class="p-4">
               <h6 class="mb-3">Layout</h6>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="layout"
                     id="layout-vertical" value="vertical">
                  <label class="form-check-label" for="layout-vertical">Vertical</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="layout"
                     id="layout-horizontal" value="horizontal">
                  <label class="form-check-label" for="layout-horizontal">Horizontal</label>
               </div>
               <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="layout-mode"
                     id="layout-mode-light" value="light">
                  <label class="form-check-label" for="layout-mode-light">Light</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="layout-mode"
                     id="layout-mode-dark" value="dark">
                  <label class="form-check-label" for="layout-mode-dark">Dark</label>
               </div>
               <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="layout-width"
                     id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                  <label class="form-check-label" for="layout-width-fuild">Fluid</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="layout-width"
                     id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                  <label class="form-check-label" for="layout-width-boxed">Boxed</label>
               </div>
               <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="layout-position"
                     id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                  <label class="form-check-label" for="layout-position-fixed">Fixed</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="layout-position"
                     id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                  <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
               </div>
               <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="topbar-color"
                     id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                  <label class="form-check-label" for="topbar-color-light">Light</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="topbar-color"
                     id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                  <label class="form-check-label" for="topbar-color-dark">Dark</label>
               </div>
               <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>
               <div class="form-check sidebar-setting">
                  <input class="form-check-input" type="radio" name="sidebar-size"
                     id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                  <label class="form-check-label" for="sidebar-size-default">Default</label>
               </div>
               <div class="form-check sidebar-setting">
                  <input class="form-check-input" type="radio" name="sidebar-size"
                     id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                  <label class="form-check-label" for="sidebar-size-compact">Compact</label>
               </div>
               <div class="form-check sidebar-setting">
                  <input class="form-check-input" type="radio" name="sidebar-size"
                     id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                  <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
               </div>
               <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
               <div class="form-check sidebar-setting">
                  <input class="form-check-input" type="radio" name="sidebar-color"
                     id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                  <label class="form-check-label" for="sidebar-color-light">Light</label>
               </div>
               <div class="form-check sidebar-setting">
                  <input class="form-check-input" type="radio" name="sidebar-color"
                     id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                  <label class="form-check-label" for="sidebar-color-dark">Dark</label>
               </div>
               <div class="form-check sidebar-setting">
                  <input class="form-check-input" type="radio" name="sidebar-color"
                     id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                  <label class="form-check-label" for="sidebar-color-brand">Brand</label>
               </div>
               <h6 class="mt-4 mb-3 pt-2">Direction</h6>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="layout-direction"
                     id="layout-direction-ltr" value="ltr">
                  <label class="form-check-label" for="layout-direction-ltr">LTR</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="layout-direction"
                     id="layout-direction-rtl" value="rtl">
                  <label class="form-check-label" for="layout-direction-rtl">RTL</label>
               </div>
            </div>
         </div>
         <!-- end slimscroll-menu-->
      </div>
      <!-- /Right-bar -->
      <!-- Right bar overlay-->
      <div class="rightbar-overlay"></div>
      <!-- JAVASCRIPT -->
      <script src="assets/libs/jquery/jquery.min.js"></script>
      <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/libs/metismenu/metisMenu.min.js"></script>
      <script src="assets/libs/simplebar/simplebar.min.js"></script>
      <script src="assets/libs/node-waves/waves.min.js"></script>
      <script src="assets/libs/feather-icons/feather.min.js"></script>
      <!-- pace js -->
      <script src="assets/libs/pace-js/pace.min.js"></script>
      <!-- apexcharts -->
      <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
      <!-- Required datatable js -->
      <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
      <!-- Buttons examples -->
      <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
      <script src="assets/libs/jszip/jszip.min.js"></script>
      <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
      <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
      <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
      <!-- Responsive examples -->
      <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
      <!-- Datatable init js -->
      <script src="assets/js/pages/datatables.init.js"></script>    
      <!-- Plugins js-->
      <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
      <!-- dashboard init -->
      <script src="assets/js/pages/dashboard.init.js"></script>
      <script src="assets/js/app.js"></script>
   </body>
</html>