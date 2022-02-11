<html>
<head>
<style>
body{
background-image: linear-gradient(#fad6a5, white);
 font-family: Courier New;
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
</head>
<body>
<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"my_dbname");

// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];





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
	
        $verf="Verified";
        echo "<center><img src='https://i.pinimg.com/originals/77/9b/9d/779b9dc3928c2dbc304bcf6702bef6df.gif' class='img'></center><br><center><h2>SUCCESSFULLY LOGGED IN !!!<br><br>You are a validated user.</h2><br><hr><br><a href='festtour.html'><button class=button style=width:232px;>Book for Fest</button></a><br></center>";
 }
else
{
	 echo "<center><h2>You are not an validated user. Please try again later....</h2></center>";
        $verf="Not verified";
}


mysqli_close($connect);


// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"my_dbname");

if(mysqli_connect_errno($connect))
{
 echo '';
}
else
{
	echo '';
}

//$ins = "INSERT INTO users (users_email, users_pass, users_verf) VALUES ('xyz','123')";

/*
if(mysqli_query($connect, $sql)
    echo 'Record inserted successfully.';
else
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
*/

$sql="INSERT INTO users (users_email, users_pass, users_verf) VALUES ('$_POST[users_email]','$_POST[users_pass]','$verf')";


if (mysqli_query($connect,$sql))
  echo "";
else
  die('Error: ' . mysqli_error());
  


mysqli_close($connect);



?>

</body>
</html>
