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

.kotak{
  background: #C4C4C4;
  position: static;
  padding: 20px;
  width: 200px;
  float: right;
  margin: 10px;
  height: 400px;

}
.kotak1{
border-radius: 10px 10px 10px 10px;
position: absolute;
width: 729px;
height: 700px;
left: 740px;
top: 0px;

background: #C4C4C4;
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 23px;
}



.container{
    position: absolute;
width: 350px;
height: 390px;
left: 970px;
top: 150px;

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

    width: 1000px;
    height: 350px;
    left: 950px;
    top: 180px;
    padding: 20px 25px;
    width: 300px;
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
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: white;
    border-bottom: 2px solid ;
    border-radius: 10px;
    color: #black;
    font-size: 20px;
    font-weight: bolder;
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



</style>

</head>
<body >
  <div>
  <h1 class="kawal "><?php echo "Kawal  " ?></h1>
  <h1 class="kawal_2" "><?php echo "Motor"  ?></h1>
  </div>
  <img src="image/logo.jpeg.png" class="gambar_logo">
  <div class="kotak kotak1"></div>
  <div class="container"></div>
  <div class="container_2">
          <h1><?php echo "Login " ?></h1>
            <form>
                <label style="fl"><?php echo 'USERNAME :' ?></label><br><br>
                <input type="text" placeholder="USERNAME"><br>
                <label><?php echo 'PASS :' ?></label><br>
                <input type="password" placeholder="PASSWORD"><br><br>
                <button class="buttonl">Register </button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <button class="buttonl">Login  </button>
            </form>
        </div>    



</body>
</html>