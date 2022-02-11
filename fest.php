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
table {
  font-family: Courier New;
  border-collapse: collapse;
   cellpadding: 5px;
  width: 85%;
}

td, th {
  border: 1px solid #000000;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #fad6a5;
 
}
.close {
  position: absolute;
  right: 25px;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: #fad6a5;
  cursor: pointer;
}
</style>
</head>
<body>
<input action="action" type="button" class="close" value="&times;" onclick="history.go(-1);" />
<?php
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
	$result = mysqli_query($connect,"SELECT tour_email, tour_pass, tour_game FROM tour");
	if ($result->num_rows > 0) 
{
	echo "<br><hr><br><table>
  <caption>People who have registered for tournament:</caption>
	<tr>
	<th>Email</th>
	<th>Password</th>
	<th>Game</th>
	</tr>";
  while($row = $result->fetch_assoc()) 
{
    echo "<tr><td> " . $row["tour_email"]. " </td><td> " . $row["tour_pass"]. " </td><td> " . $row["tour_game"]. "</td></tr><br>";
  }
} 
else 
{
  echo "0 results";
}	
}     

?>
<center><button class ='button' onclick="window.print()">Print this page</button></center>
</body>
</html>