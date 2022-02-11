<html>
<head>
<style>
body{
background-image: linear-gradient(#fad6a5, white);
 font-family: Courier New;
}
* {
  box-sizing: border-box;
}
button {
  font-family: Courier New;
  font-weight: heavy;
  background-color: #000000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity:0.5;
  align: center;
}
button:hover {
  opacity: 0.5;
}

* {
  box-sizing: border-box;
}
img{
  opacity: 0.5;
  width: 30%;
  height: 40%;
}
</style>
<body>
<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"my_dname");


// Grab User submitted information
$email = $_POST["sign_email"];
$pass = $_POST["sign_pass"];
$add = $_POST["sign_add"];
$phno = $_POST["sign_phno"];
$game = $_POST["sign_game"];




//$ins = "INSERT INTO sign (sign_email, sign_pass, sign_add, sign_phno, sign_game) VALUES ('xyz','123')";



$sql="INSERT INTO sign (sign_email, sign_pass, sign_add, sign_phno, sign_game) VALUES ('$_POST[sign_email]','$_POST[sign_pass]','$_POST[sign_add]','$_POST[sign_phno]','$_POST[sign_game]')";
if (mysqli_query($connect,$sql))
  echo "<script type='text'>alert('You have successfully signed in!!!');window.location.href = mid.html;</script>";
  echo "<center><img src='https://i.pinimg.com/originals/77/9b/9d/779b9dc3928c2dbc304bcf6702bef6df.gif' class='img'></center><br><br><center><h2>SUCCESSFULLY SIGNED IN !!!<br>You are a validated user.</h2><br><hr><br><a href=festtour.html><button class=button style=width:232px;>Book for Fest</button></a><br></center>";


mysqli_close($connect);


?>
</body>
</html>
