<?php 
// Storing Session
$sql = "SELECT * FROM admin WHERE email = '" . $_SESSION['admin'] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


$firstnamev = 'Administrator';
#$lastnamev = $row['lname'];
#$passwordv = $row['passw'];
#$phonenov = $row['phoneno'];
#$refbonus = $row['refbonus'];
#$ref = $row['referral'];
$emailv = $row['email'];
#$datev = $row['datejoin'];
#$countryv = $row['country'];
#$addressv = $row['address'];
#$walletbalv = $row['walletbal'];
#$refbonus = $row['refbonu'];
#$regbonus = $row['regbonus'];
#$cycheck = $row['cycheck'];
#$btcaddressv = $row['walletadd'];
#$rwchk = $row['rwchk'];



#$ghstats = $row['earn'];




?>


<?php 


// Storing Session
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
        $qrbnb = $web['bnbqr'];

         $exbtc = $web['btcx'];
        $exeth = $web['ethx'];
        $exusdt = $web['usdtx'];
        $extron = $web['bnbx'];
        $kycfee = $web['kycfee'];



?>







