<?php   
   session_start();
   include 'server.php';
   include 'validator.php';
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>User-Profile | Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
   <body class="pace-done " data-sidebar-size="lg" data-layout-mode="light" data-topbar="light" data-sidebar="light`">
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
                           <h4 class="mb-sm-0 font-size-18">Create New Tracking</h4>
                           <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                 <li class="breadcrumb-item active">Profile</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-sm order-2 order-sm-1">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-content">
                           <div class="tab-pane active" id="overview" role="tabpanel">
                              <div class="card">
                                 <div class="card-header">
                                    <h5 class="card-title mb-0">Profile</h5>
                                 </div>
                                 <div class="card-body">
                                    <div>
                                       <div class="pb-3">
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div>
                                                   <?php 
                                                      if (isset($_POST['sub-ins'])) {
                                                        function generateRandomString($length = 10) {
                                                            return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
                                                        }
                                                        $sendersname = $_POST['sendersname'];
                                                        $sendersemail = $_POST['sendersemail'];
                                                        $recieversname = $_POST['recieversname'];
                                                        $recieversemail = $_POST['recieversemail'];
                                                        $recievers_phone = $_POST['recievers_phone'];
                                                        $weight = $_POST['weight'];
                                                        $pickup_location = $_POST['pickup_location'];
                                                        $deliverylocation = $_POST['deliverylocation'];
                                                        $date = $_POST['date'];
                                                        $percentage = $_POST['percentage'];

                                                        $product_name = $_POST['product_name'];
                                                        $total_freight = $_POST['total_freight'];
                                                        $p_date = $_POST['p_date'];
                                                        $package_type = $_POST['package_type'];
                                                        $carrier = $_POST['carrier'];
                                                        $Shipment_mode = $_POST['Shipment_mode'];
                                                        $qty = $_POST['qty'];
                                                        $status = $_POST['status'];
                                                        $type_shipment = $_POST['type_shipment'];



                                                        
                                                        $trackingid = generateRandomString(10);
                                                        
                                                        
                                                        
                                                       $insert = "INSERT INTO packages (sendersname, sendersemail, recieversname, recieversemail, recievers_phone, weight, pickup_location, deliverylocation, date, percentage, trackingid, product_name, total_freight, pickup_date, carrier, shipment_mode, qty, status, type_shipment, package_type) VALUES 
                                                                                       ('$sendersname', '$sendersemail', '$recieversname', '$recieversemail', '$recievers_phone', '$weight', '$pickup_location', '$deliverylocation', '$date', '$percentage', '$trackingid','$product_name' ,'$total_freight', '$p_date', '$carrier', '$Shipment_mode', '$qty', '$status', '$type_shipment', '$package_type')";
                                                        mysqli_query($conn, $insert);
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        echo '
                                                      
                                                         <script type="text/javascript">
                                                            Swal.fire({ 
                                                            title: "Welcome",
                                                            icon: "success",
                                                            text: "Package Created"
                                                            }).then(function() {
                                                            // Redirect the user
                                                            window.location.href = "index.php";
                                                            })
                                                         </script>';
                                                      }?>
                                                   <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Sender's Name</label>
                                                               <input type="text" class="form-control" id="formrow-firstname-input" value="" name='sendersname'>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Sender's Email</label>
                                                               <input type="text" class="form-control" id="formrow-lastname-input" value="" name='sendersemail'>
                                                            </div>
                                                         </div>
                                                      </div>

                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Reciver's Name</label>
                                                               <input type="text" class="form-control" id="formrow-firstname-input" value="" name='recieversname'>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Reciver's Email</label>
                                                               <input type="text" class="form-control" id="formrow-lastname-input" value="" name='recieversemail'>
                                                            </div>
                                                         </div>
                                                      </div>

                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Reciver's phone Number</label>
                                                               <input type="text" class="form-control" id="formrow-firstname-input" value="" name='recievers_phone'>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Weight of Goods</label>
                                                               <input type="text" class="form-control" id="formrow-lastname-input" value="" name='weight'>
                                                            </div>
                                                         </div>
                                                      </div>


                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Pickup Location</label>
                                                               <input type="text" class="form-control" id="formrow-firstname-input" value="" name='pickup_location'>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Delivery Location</label>
                                                               <input type="text" class="form-control" id="formrow-lastname-input" value="" name='deliverylocation'>
                                                            </div>
                                                         </div>
                                                      </div>


                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Expected Delivery Date</label>
                                                               <input type="date" class="form-control" id="formrow-lastname-input" value="" name='date'>
                                                            </div>
                                                         </div>
                                                         
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">percentage</label>
                                                               <input type="number" class="form-control" id="formrow-lastname-input" value="" name='percentage'>
                                                            </div>
                                                         </div>

                                                      </div>

                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Type of shipment</label>
                                                               <input type="text" class="form-control" id="formrow-lastname-input" value="" name='type_shipment'>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Product Name</label>
                                                               <input type="text" class="form-control" id="formrow-lastname-input" value="" name='product_name'>
                                                            </div>
                                                         </div>
                                                      </div>

                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Total Freight</label>
                                                               <input type="text" class="form-control" id="formrow-firstname-input" value="" name='total_freight'>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Pickup Date</label>
                                                               <input type="date" class="form-control" id="formrow-lastname-input" value="" name='p_date'>
                                                            </div>
                                                         </div>
                                                      </div>

                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Package</label>
                                                               <input type="text" class="form-control" id="formrow-firstname-input" value="" name='package_type'>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">carrier</label>
                                                               <input type="text" class="form-control" id="formrow-lastname-input" value="" name='carrier'>
                                                            </div>
                                                         </div>
                                                      </div>

                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Shipment mode</label>
                                                               <input type="text" class="form-control" id="formrow-firstname-input" value="" name='Shipment_mode'>
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Qty</label>
                                                               <input type="text" class="form-control" id="formrow-lastname-input" value="" name='qty'>
                                                            </div>
                                                         </div>
                                                      </div>

                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="mb-3">
                                                               <label class="form-label" for="formrow-email-input">Status</label>
                                                               <input type="text" class="form-control" id="formrow-firstname-input" value="" name='status'>
                                                            </div>
                                                         </div>
                                                        
                                                      </div>



                                                      <div class="mt-4">
                                                         <button type="submit" name="sub-ins" class="btn btn-primary waves-effect waves-light">Create Package</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                             <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                   <div class="modal-content">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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

            </div> <!-- end slimscroll-menu-->
        </div>
      <?php include 'include/footer.php'; ?>
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