<html>
    <body>
           
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `customer`(`product`, `quantity`, `cname`, `mob`, `email`, `city`, `address`) 
VALUES ($_POST[product],$_POST[quantity],'$_POST[cname]',$_POST[mob],'$_POST[email]','$_POST[city]','$_POST[address]')";

if (mysqli_query($conn, $sql)) {
  echo "<br><br><center><h3> <u> Order Successfully Placed </u> </h3></center>";
  echo"<center> <h1> Thank You.....! <br> For Shopping. </h1> </center>";
  echo"<center> <h2>&#10084 &nbsp; Visit Again &nbsp; &#10084 </h2> </center>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
    </body>
</html>