<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM pdo_toets WHERE ordernumber= :ordernumber";


  $stmt = $conn->prepare($sql);
  $stmt->bindParam('ordernumber', $ordernumber);

  if (!isset($_GET['ordernumber'])) {
      header("Location: ./index.php");
      exit();
  } 

  $ordernumber = $_GET['ordernumber']

  $stmt->execute();
  echo "Record deleted successfully";
  header ("Refresh:2; ./read.php");}
  catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>