<head>
<link rel="stylesheet" href="phpStyles.css">
</head>

<?php
include 'php/DataBase.php';


$sql = "SELECT id, name, email,subject,message FROM buyer";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " Name: " . $row["name"]. " email: " . $row["email"]." subject: " . $row["subject"]." message: " . $row["message"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }






if ($result->num_rows > 0) {
    echo "<table class='buyTable'><tr class='talerowheader'><th>ID</th><th>Name</th><th>email</th><th>subject</th><th>message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr class='talerowheaderdata'><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["subject"]."</td><td>".$row["message"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
?>