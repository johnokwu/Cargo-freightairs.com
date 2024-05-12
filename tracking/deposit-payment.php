<?php   
   session_start();
   include('admin/server.php');
?>
<?php
   if (isset($_POST['sub-find'])) {
      $trackingid = $_POST['trackingnumber'];
      $amount = $_POST['amount'];
      $option = $_POST['option'];
      $ddate = "SELECT * FROM packages WHERE trackingid='$trackingid'";
      $resul = mysqli_query($conn, $ddate);

      if (mysqli_num_rows($resul) < 1) {
         echo '
            <script type="text/javascript">
               Swal.fire({ 
               title: "No Package Found",
               icon: "error",
               }).then(function() {
               window.location.href = "payment.php";
               })
            </script>
         ';
         die();
      }else{
         echo '
            <script type="text/javascript">
               Swal.fire({ 
               title: "Package Found",
               icon: "success",
               }).then(function() {
               
               })
            </script>
         ';
         
         
      };
      $weba = mysqli_query($conn, "SELECT * from websetting where id = 1");

        $web = mysqli_fetch_array($weba);

        $btca = $web['btcadd'];
        $etha = $web['ethadd'];
        $usdta = $web['usdtadd'];
        $paypal = $web['paypal'];
        $cashapp = $web['cashapp'];
        $zelle = $web['zelle'];

        $qrbtc = $web['btcqr'];
        $qreth = $web['ethqr'];
        $qrusdt = $web['usdtqr'];
        
        

      if($option == 'Ethereum'){
           
           
         $waladdressd = $etha;
         $qr = $qreth;
     }
     
     if($option == 'Bitcoin'){
         
         
         $waladdressd = $btca;
         $qr = $qrbtc;
     }
     
      
      if($option == 'USDT'){
         
         $waladdressd = $usdta;
         $qr = $qrusdt;
     }

     if($option == 'paypal'){
         
         $waladdressd = $paypal;
         $qr = $qrusdt;
     }

     if($option == 'cashapp'){
         
      $waladdressd = $cashapp;
      $qr = $qrusdt;
      }
      if($option == 'zelle'){
         
         $waladdressd = $zelle;
         $qr = $qrusdt;
     }

      
   }

?>
<!doctype html>
<html lang="en">  
   <head>
      <meta charset="utf-8" />
      <title>Deposit-Payment | User</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- App favicon -->
      <link rel="shortcut icon" href="favicon.png">
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
   <body class="pace-done " data-sidebar-size="lg" data-layout-mode="light" data-topbar="light" data-sidebar="light">
      <!-- <body data-layout="horizontal"> -->
      <!-- Begin page -->
      <div id="layout-wrapper">
         <?php include 'include/header.php'; ?>
         <!-- ========== Left Sidebar Start ========== -->
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
                           <h4 class="mb-sm-0 font-size-18">Deposit-Payment</h4>
                           <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                 <li class="breadcrumb-item active">Deposit-Payment</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xl-5 col-lg-5">
                        <div class="card">
                           <div class="card-header border-0 pb-0">
                              <h2 class="card-title">Payment</h2>
                           </div>
                           <div class="card-body pb-0 text-center">
                              <ul class="list-group list-group-flush">
                                 
                                
                                 <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Amount to deposit</strong>
                                    <span class="mb-0">$ <?php echo number_format($amount); ?></span>
                                 </li>
                              </ul>
                           </div>
                           <div class="card-footer pt-3 pb-3 text-center">
                              <span class="text-primary"><i class="fa fa-exclamation-circle"> </i> Please Review the Information and Confirm</span>
                              <div class="row text-center">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-7">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title">Deposit-Payment</h4>
                           </div>
                           <div class="card-body">
                              <div>
                                 <div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="text-center">
                                             <p class="card-text"><?php echo strtoupper($option); ?> ADDRESS</p>
                                             <div class="mb-2" style="text-align: center; margin-top: 1%;" id="circle">   <img src="admin/QR/<?= $qr ?>" style="border-radius: 10%;  height: 150px;" alt="qrcode" />  </div>
                                                <div class="input-group mb-3 input-warning-o">
                           
                                                   <input type="text" class="form-control" id="copy" value="<?= $waladdressd ?>" disabled> 
                                                   <br>
                                                   <br>
                  
                                                   <button onclick="myFunction()" class="btn btn-lg btn-success">Copy </button>
                                                   <script>
                                                      function myFunction() {
                                                        /* Get the text field */
                                                        var copyText = document.getElementById("copy");
                                                      
                                                        /* Select the text field */
                                                        copyText.select();
                                                        copyText.setSelectionRange(0, 99999); /* For mobile devices */
                                                      
                                                        /* Copy the text inside the text field */
                                                        navigator.clipboard.writeText(copyText.value);
                                                        
                                                        /* Alert the copied text */
                                                        alert("Copied wallet Address: " + copyText.value);
                                                      }
                                                   </script>
                                                </div>
                                          </div>
                                          <div class="card-footer">
                                             <ul>
                                                <li>
                                                   <p class="card-text text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"> </i> Please copy the payment tag from the section above and proceed to make your payment. After completing the payment, kindly send the transaction details to our customer support for verification.</p>
                                                </li>
                                             </ul>
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
               <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include 'include/footer.php'; ?>
         </div>
         <!-- end main content-->
      </div>
      <!-- END layout-wrapper -->
      <!-- Right Sidebar -->
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
      <!-- Plugins js-->
      <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
      <!-- dashboard init -->
      <script src="assets/js/pages/dashboard.init.js"></script>
      <script src="assets/js/app.js"></script>
   </body>
</html>