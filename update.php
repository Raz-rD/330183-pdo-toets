<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE pdo_toets 
          SET bodemformaat = :bodemformaat,
              saus = :saus,
              pizzatoppings = :pizzatoppings,
              kruiden = :kruiden
          WHERE ordernumber = :ordernumber";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':bodemformaat', $bodemformaat);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':pizzatoppings', $pizzatoppings);
  $stmt->bindParam(':kruiden', $kruiden);
  $stmt->bindParam('ordernumber', $ordernumber);

  $bodemformaat = $_POST["bodemformaat"];
  $saus = $_POST["saus"];
  $pizzatoppings = $_POST["pizzatoppings"];
  $kruiden = $_POST["kruiden"];
  $ordernumber = $_POST["ordernumber"];

  // execute the query
  $stmt->execute();

  echo "record met id={$ordernumber} is gewijzigd";
  header ("Refresh:2; ./read.php");}
  catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

$conn = null;
?>