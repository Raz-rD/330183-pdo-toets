<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  $tableRows = "";
  foreach($stmt->fetchAll()) as $key=>$value) {
    $tableRows .= "<tr>
                    <td>$value->bodemformaat</td>
                    <td>$value->saus</td>
                    <td>$value->pizzatoppings</td>
                    <td>$value->kruiden</td>
                    <td>$value->ordernumber</td>
                  </tr>"
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>