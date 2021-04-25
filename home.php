<?php
	$page = "Home";
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
			<div>
				<table>
					<tr>
						<br><h1>Kawal Motor</h1><br>
					</tr>
					<tr>
						<td>
							<img src="images/Logo.png" class="images1"><br> 
							<p style="text-align:center;"><b>Logo Kawal Motor</b></p>
						</td>
						<td><p style="font-size: 18px">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Quaerat nostrum optio sunt voluptate porro sint laboriosam. 
							Alias ratione facilis earum minus quia, unde laborum nulla, 
							atque molestias cum vel velit!
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, error corporis. 
							Quibusdam minima voluptas nemo asperiores nobis consequuntur velit deserunt sint magnam dolorum, 
							aliquam possimus blanditiis deleniti, 
							laudantium nesciunt repellat?
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit fuga, commodi quis tempora doloribus, 
							sed consequatur iste dolores consequuntur labore in qui suscipit repudiandae 
							ipsa odio, mollitia deleniti possimus ducimus.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, nesciunt doloremque. Iste at provident veniam ab itaque natus! 
							Blanditiis et aliquid aut, fugiat recusandae debitis doloribus! 
							Mollitia natus illum reprehenderit?
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate molestias placeat error velit quo rem alias porro, 
							reprehenderit doloribus perspiciatis! Totam et eos hic nobis, repudiandae soluta at enim unde.</p></td>
					</tr>
				</table>
			
			</div>
		</div>
		<div id="footer">
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