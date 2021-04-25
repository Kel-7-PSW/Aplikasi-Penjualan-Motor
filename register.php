<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Halaman Login</title>
<style type="text/css">
  
.kawal{
position: absolute;
width: 578px;
height: 158px;
left: 120px;
top: 40px;

font-family: Arial, Helvetica, sans-serif;
font-style: normal;
font-weight: bolder;
font-size: 96px;
line-height: 112px;
color: #000000;


}

.kawal_2{
  position: absolute;
width: 578px;
height: 158px;
left: 405px;
top: 40px;

font-family: Arial, Helvetica, sans-serif;
font-style: normal;
font-weight: normal;
font-size: 100px;
line-height: 112px;
color: #000000;
}

.gambar_logo{
    position: absolute;
width: 650px;
height: 381px;
left: 60px;
top: 280px;

background: url(293-2937985_phoenix-clipart-phoenix-wing-vector-logo-club-motor.png);
border-radius: 112px;
}

}
.container1{
position: absolute;
width: 729px;
height: 500px;
left: 703px;
top: 0px;

background: #C4C4C4;
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 22px;
}





.container{
    position: absolute;
width: 420px;
height: 550px;
left: 220px;
top: 60px;

background: #9E9E9E;
border-radius: 35px;
}





.teks1{
    text-align: center;
    position: absolute;
    left: 40%;
}
.l1{
    text-align: left;
width: 161px;
height: 30px;
left: 860px;
top: 487px;

font-family: Russo One;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 29px;

color: #000000;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}





.container_2{
    position: absolute;

    
    height: 500px;
    left: 170px;
    top: 90px;
    padding: 20px 25px;
    width: 385px;
    background-color: #D6D6D6;
    border-radius: 35px;

    box-shadow: 0 0 10px rgba(255,255,255,.3);
}





.container_2 h1{
    text-align: center;
    color: #black;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 3px solid black;
    padding: 10px;
    font-family: Arial, Helvetica, sans-serif;
}
.container_2 label{
    text-align: left;
    color: #black;
    font-weight: bolder;
    font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
}
.container_2 form input{
	float: right ;
	    width: calc(100% - 30px);
    padding: 10px 50px;
    margin-bottom: 15px;
    border: none;
    background-color: #E5E5E5;
    font-color:blue;
    border-radius: 10px;
    color: white;
    font-size: 20px;
    font-weight: bolder;
    padding: 15px;

}
form {
	background-color: white;
	border-radius: 23px;
	padding: 20px;
	border-color: black;
}
.container_2 form button{
    width: 30%;
    padding: 2px 0;
    border: none;
    background-color:#white;
    font-size: 18px;
    font-weight: bolder;
    color: #black;
    border-radius: 5px;
  border: 2px solid black;
}
  .buttonl:hover {
  background-color: #9E9E9E;
  color: white;
}
 body{
	background-color: #5E5E5E;
}


.triangle {
	position: static;
	left: 10px;
	top: 0%;
   width: 100; 
   height: 100px; 
   border-bottom: 599px solid #F8F8F8; 
   border-left: 1000px solid transparent; 
   border-right: 1000px solid transparent; 

}
.gambar_logo{
position: absolute;
width: 400px;
height: 200px;
left: 800px;
top: 300px;

background: url(293-2937985_phoenix-clipart-phoenix-wing-vector-logo-club-motor.png);
border-radius: 10px;
}
.trapezoid {
	position: absolute;
	top: 105%;
	left: -36.5%;
	border-bottom: 50px solid #D6D6D6;
	border-left: 80px solid transparent;
	border-right: 0px solid transparent;
	height: 0;
	width: 1400px;
}
.trapezoid_2 {
	position: absolute;
	top: 108.5%;
	left: -36.5%;
	border-bottom: 30px solid #F8F8F8;
	border-left: 50px solid transparent;
	border-right: 0px solid transparent;
	height: 0;
	width: 1500px;
}
form {
	 border: 4px solid black;
}

</style>

</head>
<body>

  <div class="kotak kotak1"></div>

   <div class="triangle"></div>
   <img src="image/logo.jpeg.png" class="gambar_logo">
  <div class="container"></div>
  <div class="container_2">
          <h1><?php echo "Register " ?></h1>
            <form>
                <input type="text" placeholder="USERNAME"><br>
                <input type="text" placeholder="EMAIL"><br>
                <input type="password" placeholder="PASSWORD"><br>
                <input type="password" placeholder="RE-ENTER PASSWORD"><br>
                <button class="buttonl">Login  </button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <button class="buttonl">Login  </button>
            </form>
            <div class="trapezoid "></div>
            <div class="trapezoid_2 "></div>
        </div>  

      </div>  



</body>
</html>