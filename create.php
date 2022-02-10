<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO pizza (id, Bodemformaat, Saus, Vegan, vegetarisch, vlees, Peterselie, Oregano, Chili ,Peper)
  VALUES (:id, :Bodemformaat, :Saus, :Vegan,:vegetarisch, :Vlees, :Peterselie, :Oregano, :Chili, :Peper)");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':Bodemformaat', $Bodemformaat);
  $stmt->bindParam(':Saus', $saus);

  $stmt->bindParam(':Vegan',  $Vegan);
  $stmt->bindParam(':vegetarisch', $vegatarisch);
  $stmt->bindParam(':Vlees', $vlees);
  $stmt->bindParam(':Peterselie', $Peterselie);
  $stmt->bindParam(':Oregano',  $oregano);
  $stmt->bindParam(':Chili', $Chili);
  $stmt->bindParam(':Peper',   $peper);


  // insert a row
  $id = NULL;
  $Bodemformaat = $_POST["Bodemformaat"];
  $saus = $_POST["Saus"];
  $Vegan= $_POST["Vegan"];
  $vegatarisch = $_POST["vegetarisch"];
  $vlees = $_POST["Vlees"];
  $Peterselie = $_POST["Peterselie"];
  $oregano = $_POST["Oregano"];
  $Chili = $_POST["Chili"];
  $peper = $_POST["Peper"];


  
  
  $stmt->execute();


  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>