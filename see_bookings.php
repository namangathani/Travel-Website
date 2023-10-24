<?php
echo "<table style='width: 150px; border: solid 1px black;'>";
echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Destination</th><th>Guests</th><th>Arrival</th><th>Departure</th></tr>";
class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }
  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }
  function beginChildren() {
    echo "<tr>";
  }
  function endChildren() {
    echo "</tr>" . "\n";
  }
}

try {
  $conn = new PDO("mysql:host=localhost;dbname=Book_db", "root", "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("SELECT name,email,phone,location,guests,arrivals,leaving From book_form");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
 

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
  echo "</table>";
?>