<?php
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO pdo_toets (bodemformaat, saus, pizzatoppings, kruiden, ordernumber)
    VALUES (:bodemformaat, :saus, :pizzatoppings, :kruiden, :ordernumber)");
    $stmt->bindParam(':bodemformaat', $bodemformaat);
    $stmt->bindParam(':saus', $saus);
    $stmt->bindParam(':pizzatoppings', $pizzatoppings); 
    $stmt->bindParam(':kruiden', $kruiden); 
    $stmt->bindParam(':ordernumber', $ordernumber); 

    $bodemformaat = $_POST["bodemformaat"];
    $saus = $_POST["saus"];
    $pizzatoppings = $_POST["pizzatoppings"];
    $kruiden = $_POST["kruiden"];
    $ordernumber = NULL;

    $stmt->execute();

    echo "New records created succesfully";
    header ("Refresh:3; ./read.php");}
    catch (PDOException $e) {
        echo $e->getMessage();
        header("Location: ./index.php");
    }
$conn = null;
?>