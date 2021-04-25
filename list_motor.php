<?php
	$page = "Daftar Motor";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	.button{
    	padding: 2px 6px;
    	border: none;
    	text-decoration: none;
    	background-color:white;
    	font-size: 12px;
    	color: black;
   	 	border-radius: 5px;
    	border: 2px solid black;
    	cursor: pointer;
    	box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);

    }
	</style>
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
			<table>
				<tr>
					<td>
						<div class="tdProduct">
    						<img src='images/Gear 125 S Version.png' class="product">
    						<p>Gear 125 S Version <br>
    						Mesin Bluecore 125 CC dengan SMG <br>
    						Stop & Start System <br>
    						Answer Back System <br>
    						Desain Tangguh <br>
    						Aksesoris rak depan berkapasitas besar <br>
    						Rp 17.350.000 ,-</p>
    						<a href="description.php" class="button">Description Product</a> 
						</div>
					</td>
					<td>
						<div class="tdProduct">
        					<img src='images/Freego S Ver ABS.png' class="product">
        					<p>Freego S Version ABS <br>
        					Bagasi besar <br>
        					Smart Front Refuel <br>
        					Wide Tubeless Tire 12 inch wheel <br>
        					Blue Core Engine 125 CC <br>
        					Digital Speedometer with Eco Indicator <br>
        					Rp 23.190.000 ,-</p>
        					<a href="description.php" class="button">Description Product</a> 
    					</div>
					</td>
					<td>		
						<div class="tdProduct">
            				<img src='images/XRide 125.png' class="product">
            				<p>X-Ride 125 <br>
            				Answer Back System <br>
            				Blue Core Engine 125 CC <br>
            				Hazard Light <br>
            				Speedometer with Eco Indicator <br>
            				Adventure Style Seat <br>
            				Rp 18.690.000 ,-</p>
            				<a href="description.php" class="button">Description Product</a> 
        				</div>
					</td>
				</tr> <br>
				<tr>
					<td>
						<div class="tdProduct">
                			<img src='images/Soul GT.png' class="product">
                			<p>All New Soul GT AKS SSS
                			Blue Core
                			Stop & Start System (SSS)
                			Advance Key System (AKS)
                			Ban Lebar
                			New Speedometer
                			Rp 17.800.000 ,-</p>
                			<a href="description.php" class="button">Description Product</a> 
            			</div>
					</td>
					<td>
						<div class="tdProduct">
                    		<img src='images/Mio Z.png' class="product">
                    		<p>Mio Z
                    		Smart Side Stand Switch
                    		Blue Core
                    		Warna Doff
                    		Bagasi Luas & Leg
                    		Wide Tire
                    		Rp 15.800.000 ,-</p>
                    		<a href="description.php" class="button">Description Product</a> 
                		</div>
					</td>
					<td>
						<div class="tdProduct">
                    		<img src='images/Fino Grande.png' class="product">
                    		<p>Fino Grande
                    		Blue Core
                    		LED Headlight
                    		Advance Key System
                    		Helm Retro Stylish
                    		Eco Indicator
                    		Rp 19.895.000 ,-</p>
                    		<a href="description.php" class="button">Description Product</a> 
                		</div> 
					</td>
				</tr>
			</table>            
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