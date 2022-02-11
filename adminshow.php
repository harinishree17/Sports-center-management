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
</style>
</head>
<body>
<?php


$email = $_POST["a_email"];
$pass = $_POST["a_pass"];


$flag = 0;
$verf = "Not verified";
if($email=="admin@gmail.com" && $pass=="Admin123")
	{
		$flag = 1;
		$verf = "Verified";
	}

print("<br>");


	
if ($flag==1)
{

	echo "<center><h2>Welcome to the admin page!!! <h2><q>You are a validated admin.</q><br><br>
<a href=log.php><button class=button style=width:232px;>Login Details</button></a><br>
<a href=sign.php><button class=button style=width:232px;>Signup Details</button></a><br>
<a href=fest.php><button class=button style=width:232px;>Fest Details</button></a><br></center>";
 }   
else{
	echo "<center><h2>Sorry, you are not an valid admin, Please try again.<h2></center>";
}


?>
</body>
</html>