<?php
	$page = "About Us";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="wrapper">
		<div id="header">	
			<p class="header">
				<p style="font-size: 30px">
				<img src="images/Logo.png" class="images">
			Kawal Motor</p> 
			<p>
		</div> 
		<?php
			include "navigasi.php";	
		?>
		
		<div id="content">
		<section class="contact">
    		<div class="content">
      			<h1>About Us</h1>
				<center><h2 style="margin-top: 150px">SELAMAT DATANG DI KAWAL MOTOR</h2>
      			<p style="margin-left: 40px margin-top: 50px; font-size: 20px">1. Kawal Motor hadir untuk membantu anda mendapatkan tipe motor sesuai pilihan anda.</p>
				<p style="margin-left: 30px; font-size: 20px">2. Kami menyambut kedatangan anda bersama Kawal Motor.Moment ini merupakan kepercayaan yang kami hargai bersama Kawal Motor.</p>
      			<p style="margin-left: 40px; font-size: 20px">3. Kawal Motor memberikan kenyamanan dan kemudahan dalam melakukan pembelian.</p>
      			<p style="margin-left: 40px; font-size: 20px">4. Visi Kawal Motor  adalah menjadikan salah satu e-commerce penjualan motor terbaik yang dapat berinovasi di Indonesia. </p>
      			<br>
        		<h2>Keunggulan Kawal Motor</h2>
      			<p style="margin-left: 40px; font-size: 20px">- Mendapatkan motor yang sesuai dengan budget anda.</p>
      			<p style="margin-left: 40px; font-size: 20px">- Memberikan keamanan dan kenyamanan yang terbaik.</p>
      			<p style="margin-left: 40px; font-size: 20px">- Menyediakan jenis motor terbaru.</p></center>
				  
				  </div>
    	</section>
		</div>
		<div id="footer">
			<table>
				<tr>
					<td>
						<img src="images/kawal.jpeg" class="images2">
					</td>
					<td >
						<p class="tdFooter1"><?php echo "Kawal Motor" ?></p> 
					</td>
					<td >
						<p ><?php echo "|" ?></p> 
					</td>
					<td>
						<p class="tdFooter"><b><?php echo "Berbelanja adalah seni dan saya seorang seniman " ?></b></p>
					</td>
					<td >
						<p><?php echo "|" ?></p> 
					</td>
					<td>
						<p class="tdFooter"><?php echo "Opening Hours" ?></p>
					</td>
					<td >
						<p><?php echo "|" ?></p> 
					</td>
					<td>
						<p class="tdFooter"><?php echo "24 hours depend on seller" ?></p>
					</td>
				</tr>
			</table>
		</div>
		</div>  
	</div>
 
</body>
</html>