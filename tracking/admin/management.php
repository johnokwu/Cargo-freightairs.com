<?php   
   session_start();
   include 'server.php';
   include 'user-data.php';
   include 'validator.php';
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Manage Website | Admin</title>
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
   <body class="pace-done " data-sidebar-size="lg" data-layout-mode="light" data-topbar="light" data-sidebar="light">
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
                           <h4 class="mb-sm-0 font-size-18">Manage Website</h4>
                           <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                 <li class="breadcrumb-item active">Manage Website</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-sm-12 mt-4">
                        <?php
                           if (isset($_POST['sub-add'])) {
                               $btcad = $_POST['btcad'];
                               $ethad = $_POST['ethad'];
                               $usdtad = $_POST['usdtad'];
                               $cashapp = $_POST['cashapp'];
                               $paypal = $_POST['paypal'];
                               $zelle = $_POST['zelle'];

                           
                               mysqli_query($conn, "UPDATE websetting set btcadd='$btcad', ethadd='$ethad', usdtadd='$usdtad', cashapp='$cashapp', zelle='$zelle', paypal='$paypal' WHERE id = 1");
                                echo "<script> 
                           alert('Web Payment Addresses Updated');
                           window.location.replace ('management.php');
                           
                           
                           </script> ";
                           }
                           
                           
                           
                           
                           ?>
                        <div class="card">
                           <div class="card-header">
                              <h5 class="card-title">Payment Wallet Addresses</h5>
                           </div>
                           <div class="card-body">
                              <form method="post" action="management.php">
                                 <div class="form-row">
                                    <div class="row">
                                       <div class="form-group col-md-6">
                                          <label class="text-secondary">BTC Address</label>
                                          <input type="text" name="btcad" class="form-control" value="<?php echo $btca; ?>">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label class="text-secondary">ETH Address</label>
                                          <input type="text" name="ethad" class="form-control" value="<?php echo $etha; ?>">
                                       </div>
                                    </div>
                                    <div class="row mt-4">
                                       <div class="form-group col-md-6 ">
                                          <label class="text-secondary">USDT Address</label>
                                          <input type="text" name="usdtad" class="form-control" value="<?php echo $usdta; ?>">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label class="text-secondary">Paypal</label>
                                          <input type="text" name="paypal" class="form-control" value="<?php echo $paypal; ?>">
                                       </div>
                                    </div>
                                    <div class="row mt-4">
                                       <div class="form-group col-md-6 ">
                                          <label class="text-secondary">Zelle</label>
                                          <input type="text" name="zelle" class="form-control" value="<?php echo $zelle; ?>">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label class="text-secondary">Cashapp</label>
                                          <input type="text" name="cashapp" class="form-control" value="<?php echo $cashapp; ?>">
                                       </div>
                                    </div>
                                 </div>
                                 <div class=" mt-3">
                                    <button type="submit" name="sub-add" class="btn btn-primary">Update</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-sm-12 mt-4">
                        <?php
                           if (isset($_POST['sub-ex'])) {
                               $btcex = $_POST['btcex'];
                               $ethex = $_POST['ethex'];
                               $usdtex = $_POST['usdtex'];
                               $tronex = $_POST['tronex'];
                              
                           
                               mysqli_query($conn, "UPDATE websetting set btcx='$btcex', ethx='$ethex', usdtx='$usdtex', cashapp='$cashapp', zelle='$zelle', paypal='$paypal' WHERE id = 1");
                                echo "<script> 
                           alert('Web Exchange Rates Updated');
                           window.location.replace ('management.php');
                           
                           
                           </script> ";
                           }
                           
                           
                           
                           
                           ?>
                        <!-- <div class="card">
                           <div class="card-header">
                              <h5 class="card-title">Currencies Exchange Rate</h5>
                           </div>
                           <div class="card-body">
                              <form method="post" action="management.php">
                                 <div class="form-row">
                                    <div class="row">
                                       <div class="form-group col-md-6">
                                          <label class="text-secondary">BTC Exchange Rate</label>
                                          <input type="text" name="btcex" required="" class="form-control" value="<?php echo $exbtc; ?>">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label class="text-secondary">ETH Exchange Rate</label>
                                          <input type="text" name="ethex" required="" class="form-control" value="<?php echo $exeth; ?>">
                                       </div>
                                    </div>
                                    <div class="row mt-4">
                                       <div class="form-group col-md-6">
                                          <label class="text-secondary">BNB Exchange Rate</label>
                                          <input type="text" name="usdtex" required="" class="form-control" value="<?php echo $exusdt; ?>">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label class="text-secondary">TRON Exchange Rate</label>
                                          <input type="text" name="tronex" required="" class="form-control" value="<?php echo $extron; ?>">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mt-3">
                                    <button type="submit" name="sub-ex" class="btn btn-primary">Update</button>
                                 </div>
                              </form>
                           </div>
                        </div> -->
                     </div>
                  </div>
                  <!-- <div class="row">
                     <div class="col-lg-12 col-sm-12 mt-4">
                        <?php
                           if (isset($_POST['sub-kyc'])) {
                               $kycfeee = $_POST['kycfeee'];
                           
                           
                               mysqli_query($conn, "UPDATE websetting set kycfee='$kycfeee' WHERE id = 1");
                                echo "<script> 
                           alert('KYC Verification Fee Updated');
                           window.location.replace ('management.php');
                           
                           
                           </script> ";
                           }
                           
                           
                           
                           
                           ?>
                        <div class="card">
                           <div class="card-header">
                              <h5 class="card-title">KYC Verification Fee</h5>
                           </div>
                           <div class="card-body">
                              <form method="post" action="management.php">
                                 <div class="form-row">
                                    <div class="row">
                                       <div class="form-group col-md-6">
                                          <label class="text-secondary">Set Verification Fee</label>
                                          <input type="text" name="kycfeee" required="" class="form-control" value="<?php echo $kycfee; ?>">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mt-3">
                                    <button type="submit" name="sub-kyc" class="btn btn-primary">Update</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  <div class="row">
                     <div class="col-lg-12 col-sm-12 mt-4">
                        <?php
                           if (isset($_POST['sub-add'])) {
                               $btcad = $_POST['btcad'];
                               $ethad = $_POST['ethad'];
                               $usdtad = $_POST['usdtad'];
                            
                           
                               mysqli_query($conn, "UPDATE websetting set btcadd='$btcad', ethadd='$ethad', usdtadd='$usdtad' WHERE id = 1");
                                echo "<script> 
                           alert('Web Payment Addresses Updated');
                           window.location.replace ('management.php');
                           
                           
                           </script> ";
                           }
                           
                           
                           
                           if(isset($_POST['btc-qr'])){
                           
                           
                           //////////////////////////////
                           $ptargetFolder = 'QR/'; // Relative to the root
                           $ptempFile = $_FILES['btcqr']['tmp_name'];
                           
                           $ptargetPath = $ptargetFolder;
                           
                           $pmyhash = md5_file($_FILES['btcqr']['tmp_name']);
                           $ptemp = explode(".", $_FILES['btcqr']['name']);
                           $pextension = end($ptemp);
                           
                           $ptargetFile = rtrim($ptargetPath,'/') . '/' .$pmyhash.'.'.$pextension;
                           $pntempFile = $pmyhash.'.'.$pextension;
                           
                           
                           // Validate the file type
                           $pfileTypes = array("jpg","jpeg","png","gif","pdf","JPG","PNG","JPEG","GIF"); // File extensions
                           $pfileParts = pathinfo($_FILES['btcqr']['name']);
                           if (in_array($pfileParts['extension'],$pfileTypes)) {
                           
                           // Insert record
                           $query = "UPDATE  websetting SET btcqr='$pntempFile' WHERE id=1";
                           mysqli_query($conn,$query);
                           
                           move_uploaded_file($ptempFile,$ptargetFile);
                           
                           
                           echo "<script> 
                           alert('Web Payment QR Code Updated');
                           window.location.replace ('management.php');
                           
                           
                           </script> ";
                           
                           } ;
                           
                           
                                   
                           
                           
                           
                           }
                           
                           
                           
                           
                           if(isset($_POST['eth-qr'])){
                           
                           //////////////////////////////
                           $ptargetFolder = 'QR/'; // Relative to the root
                           $ptempFile = $_FILES['ethqr']['tmp_name'];
                           
                           $ptargetPath = $ptargetFolder;
                           
                           $pmyhash = md5_file($_FILES['ethqr']['tmp_name']);
                           $ptemp = explode(".", $_FILES['ethqr']['name']);
                           $pextension = end($ptemp);
                           
                           $ptargetFile = rtrim($ptargetPath,'/') . '/' .$pmyhash.'.'.$pextension;
                           $pntempFile = $pmyhash.'.'.$pextension;
                           
                           
                           // Validate the file type
                           $pfileTypes = array("jpg","jpeg","png","gif","pdf","JPG","PNG","JPEG","GIF"); // File extensions
                           $pfileParts = pathinfo($_FILES['ethqr']['name']);
                           if (in_array($pfileParts['extension'],$pfileTypes)) {
                           
                           // Insert record
                           $query = "UPDATE  websetting SET ethqr='$pntempFile' WHERE id=1";
                           mysqli_query($conn,$query);
                           
                           move_uploaded_file($ptempFile,$ptargetFile);
                           
                           echo "<script> 
                           alert('Web Payment QR Code Updated');
                           window.location.replace ('management.php');
                           
                           
                           </script> ";
                           
                           } ;
                           
                           
                           }  
                           
                           
                           if(isset($_POST['usdt-qr'])){
                           
                           //////////////////////////////
                           $ptargetFolder = 'QR/'; // Relative to the root
                           $ptempFile = $_FILES['usdtqr']['tmp_name'];
                           
                           $ptargetPath = $ptargetFolder;
                           
                           $pmyhash = md5_file($_FILES['usdtqr']['tmp_name']);
                           $ptemp = explode(".", $_FILES['usdtqr']['name']);
                           $pextension = end($ptemp);
                           
                           $ptargetFile = rtrim($ptargetPath,'/') . '/' .$pmyhash.'.'.$pextension;
                           $pntempFile = $pmyhash.'.'.$pextension;
                           
                           
                           // Validate the file type
                           $pfileTypes = array("jpg","jpeg","png","gif","pdf","JPG","PNG","JPEG","GIF"); // File extensions
                           $pfileParts = pathinfo($_FILES['usdtqr']['name']);
                           if (in_array($pfileParts['extension'],$pfileTypes)) {
                           
                           // Insert record
                           $query = "UPDATE  websetting SET usdtqr='$pntempFile' WHERE id=1";
                           mysqli_query($conn,$query);
                           
                           move_uploaded_file($ptempFile,$ptargetFile);
                           
                           
                           echo "<script> 
                           alert('Web Payment QR Code Updated');
                           window.location.replace ('management.php');
                           
                           
                           </script> ";
                           
                           } ;
                           
                           
                           }  
                           
                           
                           
                           if(isset($_POST['bnb-qr'])){
                           
                           
                           //////////////////////////////
                           $ptargetFolder = 'QR/'; // Relative to the root
                           $ptempFile = $_FILES['bnbqr']['tmp_name'];
                           
                           $ptargetPath = $ptargetFolder;
                           
                           $pmyhash = md5_file($_FILES['bnbqr']['tmp_name']);
                           $ptemp = explode(".", $_FILES['bnbqr']['name']);
                           $pextension = end($ptemp);
                           
                           $ptargetFile = rtrim($ptargetPath,'/') . '/' .$pmyhash.'.'.$pextension;
                           $pntempFile = $pmyhash.'.'.$pextension;
                           
                           
                           // Validate the file type
                           $pfileTypes = array("jpg","jpeg","png","gif","pdf","JPG","PNG","JPEG","GIF"); // File extensions
                           $pfileParts = pathinfo($_FILES['bnbqr']['name']);
                           if (in_array($pfileParts['extension'],$pfileTypes)) {
                           
                           // Insert record
                           $query = "UPDATE  websetting SET bnbqr='$pntempFile' WHERE id=1";
                           mysqli_query($conn,$query);
                           
                           move_uploaded_file($ptempFile,$ptargetFile);
                           
                           
                           echo "<script> 
                           alert('Web Payment QR Code Updated');
                           window.location.replace ('management.php');
                           
                           
                           </script> ";
                           
                           } ;
                           
                           
                           }         
                           
                           ?>
                        <div class="card">
                           <div class="card-header">
                              <h5 class="card-title">Payment Wallet QR Codes</h5>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <form method="post" action="management.php" enctype="multipart/form-data" class="ml-2 col-lg-5">
                                    <div class="form-row">
                                       <div class="mb-2" style="text-align: center; margin-top: 1%;" id="circle">   <img id="blah" src="QR/<?= $qrbtc ?>" style="border-radius: 10%;  height: 150px;" alt="your image" />  </div>
                                       <div class="input-group col-lg-12 row">
                                          <div class="custom-file">
                                             <input type="file" class="form-control" required="" name="btcqr">
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" name="btc-qr" class="btn btn-primary mt-1">Update BTC QR</button>
                                 </form>
                                 <form method="post" action="management.php" enctype="multipart/form-data" class="ml-2 col-lg-5">
                                    <div class="form-row" >
                                       <div class="mb-2" style="text-align: center; margin-top: 1%;" id="circle">   <img id="blah" src="QR/<?= $qreth ?>" style="border-radius: 10%;  height: 150px;" alt="your image" />  </div>
                                       <div class="input-group col-lg-12 row">
                                          <div class="custom-file">
                                             <input type="file" class="form-control" required="" name="ethqr">
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" name="eth-qr" class="btn btn-primary mt-1">Update ETH QR</button>
                                 </form>
                              </div>
                              <br>
                              <div class="row">
                                 <form method="post" action="management.php" enctype="multipart/form-data" class="ml-2 col-lg-5">
                                    <div class="form-row">
                                       <div class="mb-2" style="text-align: center; margin-top: 1%;" id="circle">   <img id="blah" src="QR/<?= $qrusdt ?>" style="border-radius: 10%;  height: 150px;" alt="your image" />  </div>
                                       <div class="input-group col-lg-12 row">
                                          <div class="custom-file">
                                             <input type="file" class="form-control" required=""  name="usdtqr">
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" name="usdt-qr" class="btn btn-primary mt-1">Update USDT QR</button>
                                 </form>
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