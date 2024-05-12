<?php
   include('include/header.php');
   include('admin/server.php');
?>

<?php

// if (isset($_POST['track'])) {
//    $trackingid = $_POST['trackingnumber'];
//    $ddate = "SELECT * FROM packages WHERE trackingid='$trackingid'";
//    $resul = mysqli_query($conn, $ddate);

//    if (mysqli_num_rows($resul) < 1) {
//       echo '
//          <script type="text/javascript">
//             Swal.fire({ 
//             title: "No Package Found",
//             icon: "error",
//             }).then(function() {
//             // Redirect the user
//             })
//          </script>
//       ';
//       die();
//    }else{
//       $row = mysqli_fetch_array($resul);
//       $deliverydat = $row['date'];
//       $finaladdress = $row['deliverylocation'];
//       $shippingfrom = $row['shippingfrom'];
//    };

//    $investd = "SELECT * FROM packageupdate WHERE trackingid='$trackingid' ORDER BY date ASC";
//    $results = mysqli_query($conn, $investd);
//    while ($idetail = mysqli_fetch_array($results)) {
//       $id = $idetail['id'];
//       $date = $idetail['date'];
//       $note = $idetail['note'];
//       $trackingid = $idetail['trackingid'];
//       $status = $idetail['typenow'];
//       $typenow = $idetail['typenow'];
//       if ($typenow == 'InTransist') {
//          $logo = 'delivered';
//       }elseif ($typenow == 'Delivered') {
//          $logo = 'delivered';
//       }elseif ($typenow == 'Held') {
//          $logo = 'outfordelivery';
//       }
//    }


// }

?>
<!-- <section class="banner_area">
   <div class="container">
      <div class="pull-left">
         <h3>Cargo Tracking</h3>
      </div>
      <div class="pull-right">
         <a href="https://swiftcargotransit.com">Home</a>
         <a href="cargo-tracking.php">Cargo Tracking</a>
      </div>
   </div>
</section> -->
<section class="tracking_search_area">
   <div class="container">
      <div class="tracking_search_inner">
         <h2 class="single_title">Track your Shipment</h2>
         <h5>Enter a tracking number, and get tracking results.</h5>
         <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Tracking Number" name='trackingnumber'>
               <span class="input-group-btn">
               <button class="btn btn-default" type="submit" name='track'><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Track</button>
               </span>
            </div>
         </form>
      </div>
   </div>
</section>
<section class="timeline_tracking_area">
   <div class="container">
      <br>
      <?php
         if (isset($_POST['track'])) {
            $trackingid = $_POST['trackingnumber'];
            $ddate = "SELECT * FROM packages WHERE trackingid='$trackingid'";
            $resul = mysqli_query($conn, $ddate);
         
            if (mysqli_num_rows($resul) < 1) {
               echo '
                  <script type="text/javascript">
                     Swal.fire({ 
                     title: "No Package Found",
                     icon: "error",
                     }).then(function() {
                     // Redirect the user
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
                     // Redirect the user
                     })
                  </script>
               ';
               $row = mysqli_fetch_array($resul);
               // $deliverydat = $row['date'];
               // $finaladdress = $row['deliverylocation'];
               // $shippingfrom = $row['shippingfrom'];
               // $percentage = $row['percentage'];
               // $sendersname = $row['sendersname'];
               // $sendersemail = $row['sendersemail'];
               // $recieversname = $row['recieversname'];
               // $recieversemail = $row['recieversemail'];
               // $recievers_phone = $row['recievers_phone'];
               $sendersname = $row['sendersname'];
               $sendersemail = $row['sendersemail'];
               $recieversname = $row['recieversname'];
               $recieversemail = $row['recieversemail'];
               $recievers_phone = $row['recievers_phone'];
               $weight = $row['weight'];
               $pickup_location = $row['pickup_location'];
               $deliverylocation = $row['deliverylocation'];
               $date = $row['date'];
               $percentage = $row['percentage'];
               $transid = $row['trackingid'];

               $product_name = $row['product_name'];
               $total_freight = $row['total_freight'];
               $pickup_date = $row['pickup_date'];
               $package_type = $row['package_type'];
               $carrier = $row['carrier'];
               $qty = $row['qty'];
               $status = $row['status'];
               $type_shipment = $row['type_shipment'];
               $shipment_mode = $row['shipment_mode'];
            };

            echo'
            


            <div class="timeline_tracking_inner">
            <div class="timeline_tracking_box">
            <div class="tracking_in tag-delivered">
               <h4>Expected Delivery on: '.$date.'</h4>
               <br>
            </div>
            <div class="tracking_head">
               <h4>Tracking ID: '.$trackingid.'</h4>
            </div>
            <div class="tracking_head">
               <h4>Status: '.$status.'</h4>
            </div>

            
            


            


            <div class="tracking_list">
               <ul>
                  <li>
                     <div class="checkpoint__time">
                     </div>
                     <div class="checkpoint__icon"></div>
                     <div class="checkpoint__content">
                        <strong>Delivery Address: <br>
                        </strong>'.$deliverylocation.'</br>
                        <strong><i>Expected Delivery Date: <br>
                        </i></strong>'.$date.'
                     </div>
                  </li>
               </ul>
            </div>
            
            ';





            $investd = "SELECT * FROM packageupdate WHERE trackingid='$trackingid' ORDER BY date DESC";
            $results = mysqli_query($conn, $investd);
            while ($idetail = mysqli_fetch_array($results)) {
               $id = $idetail['id'];
               $date = $idetail['date'];
               $note = $idetail['note'];
               $trackingid = $idetail['trackingid'];
               $status = $idetail['typenow'];
               $typenow = $idetail['typenow'];
               if ($typenow == 'InTransist') {
                  $logo = 'delivered';
               }elseif ($typenow == 'Delivered') {
                  $logo = 'delivered';
               }elseif ($typenow == 'Held') {
                  $logo = 'outfordelivery';
               }


               echo '
               <div class="tracking_list">
                  <ul>
                     <li>
                        <div class="checkpoint__time">
                           '.$date.'
                        </div>
                        <div class="checkpoint__icon '.$logo.'"></div>
                        <div class="checkpoint__content">
                           <p><strong>package Update:</strong> <br>
                              '.$note.'
                           </p>
                           <p><strong><i>Status<i></strong>: '.$status.'</p>
                        </div>
                     </li>
                  </ul>
               </div>
               ';
            }





            echo'
            <div class="tracking_list">
               <ul>
                  <li>
                     <div class="checkpoint__time">
                        <strong></strong>
                     </div>
                     <div class="checkpoint__icon delivered"></div>
                     <div class="checkpoint__content">
                        <p><strong>Pickup Location:</strong> <br>
                           '.$pickup_location.'
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
            ';





            echo '
            <h3>Shipping Information</h3>
            <hr>
            <div class="row">
               <div class="col-md-6">
                  <div class="mb-3">
                     <p id="receiver-header" class="header-title"><strong>Sender Information</strong></p>
                     <p class="receiver details"><b>Name:</b> '.$sendersname.'<br />
                     <b>Email: </b>'.$sendersemail.'<br /></p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mb-3">
                     <p id="receiver-header" class="header-title"><strong>Receiver Information</strong></p>
                     <p class="receiver details"><b>Name:</b> '.$recieversname.'<br />
                     <b>Phone Number:</b> '.$recievers_phone.'<br />
                     <b>Email: </b>'.$recieversemail.'<br /></p>
                  </div>
               </div>
            </div>



            <div class="row">
            <div class="col-md-6">
               <div class="mb-3">
                  <b>package type:</b> '.$package_type.'<br />
                  <b>Shipment type:</b> '.$type_shipment.'<br />
                  <b>Status:</b> '.$status.'<br />
                  <b>Qty:</b> '.$qty.'<br />
                  <b>Shipping mode:</b> '.$shipment_mode.'<br />
               </div>
            </div>
            <div class="col-md-6">
               <div class="mb-3">
               <b>Carrier:</b> '.$carrier.'<br />
               <b>Pick up Date:</b> '.$pickup_date.'<br />
               <b>Total freight:</b> '.$total_freight.'<br />
               <b>product name:</b> '.$product_name.'<br />
                  
               </div>
            </div>
         </div>


            ';

            echo '
            <br>
            <br>
            <br>

            <div class="container">
               <div class="progress">
                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: '.$percentage.'%;">
                        '.$percentage.'%
                     </div>
               </div>
               <strong><i>Delivery Bar Progress</i></strong>
            </div>'
            ;


            







         
            
         
         
         }
         
      ?>
      




   </div>
</section>
<?php
   include('include/footer.php');
?>