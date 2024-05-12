<?php
   include('include/header.php');
   include('admin/server.php');
?>
<section class="tracking_search_area">
   <div class="container">
      <div class="tracking_search_inner">
         <h2 class="single_title">Make Payment</h2>
         <h5>Enter a tracking number, and get tracking results.</h5>
         <form class="form-horizontal" action="deposit-payment.php" method="post">
            <div class="form-group">
               <label for="trackingId" class="col-sm-2 control-label">Tracking ID:</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="trackingId" name="trackingnumber" placeholder="Enter Tracking ID" required> 
               </div>
            </div>
            <div class="form-group">
               <label for="amount" class="col-sm-2 control-label">Amount:</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" required>
               </div>
            </div>
            <div class="form-group">
               <label for="paymentMethod" class="col-sm-2 control-label">Payment Method:</label>
               <div class="col-sm-10">
                  <select class="form-control" id="paymentMethod" name="option" required>
                     <option value="USDT">USDT</option>
                     <option value="Bitcoin">BTC</option>
                     <option value="Ethereum">ETH</option>
                     <option value="paypal">PayPal</option>
                     <option value="cashapp">Cash App</option>
                     <option value="zelle">Zelle</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary" name="sub-find">Submit</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>
<?php
   include('include/footer.php');
?>