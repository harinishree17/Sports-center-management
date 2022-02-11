<html>
<head>
<style>
body{
background-image: linear-gradient(#fad6a5, white);
 font-family: Courier New;
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
$connect=mysqli_connect($host,$user,$password,"my_dbbname");


// Grab User submitted information
$email = $_POST["tour_email"];
$pass = $_POST["tour_pass"];
$game = $_POST["tour_game"];


// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"my_dname");


$result = mysqli_query($connect,"SELECT sign_email, sign_pass FROM sign");

print("<br>");
$flag = 0;
while($row = mysqli_fetch_row($result))
{
	if($email==$row[0] && $pass==$row[1])
	{
		$flag = 1;
		break;
	}
}

print("<br>");
if ($flag==1)
{
	echo "<script type='text'>alert('You have successfully registered for the fest !!!');window.location.href = mid.html;</script>";
	
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"my_dbbname");
if(mysqli_connect_errno($connect))
{
 echo 'Failed to connect***';
}
else
{
	
	//$ins = "INSERT INTO tour (tour_email, tour_pass, tour_game) VALUES ('xyz','123')";

	$sql="INSERT INTO tour (tour_email, tour_pass, tour_game) VALUES ('$_POST[tour_email]','$_POST[tour_pass]','$_POST[tour_game]')";
	if (mysqli_query($connect,$sql))
  	{
         echo"<center><img src='https://i.pinimg.com/originals/77/9b/9d/779b9dc3928c2dbc304bcf6702bef6df.gif' class='img'></center><br><center><h2><br><br> SUCCESSFULLY REGISTERED !!!!</h2><q> Confirmation email has been sent to "; echo $email; echo "</center>";	



}
	else
  	die('Error: ' . mysqli_error());
  


	mysqli_close($connect);
	
}

}

?>
</body>
</html>

