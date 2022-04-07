<?php
  $id = $_GET['id'];
  //Cookie to save id
  setcookie('id', $id);
	// Connect to server and select database
  $servername = 'localhost';
  $db_name = 'eric';
  $username = 'root';
  $password = '';

  $conn = mysqli_connect($servername, $username, $password, $db_name);
  if(mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  //Sql query
	$sql = "SELECT * from test where ID = $id ";

	// Execute query
  $result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action= "wk6ex2action.php" method ="post">



Name :

<input type=text name=txtname value="<?php echo $row['name'] ?>" readonly />

</br>



Phone number :

<input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />

</br>



Email :

<input type=text name=txtemail value="<?php echo $row['email'] ?>" />

</br>

<input type=submit name=btnsubmit value="save"/>



</form>

</body>

</html>
