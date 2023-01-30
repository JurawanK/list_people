<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "cpe0639";
$password = "0612929505";
$db_name = "cpe101";  

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, fname, lname, age, sex, marry_status FROM survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["sex"]=="M"){
        if($row["age"]>=15){
            echo "id: " . $row["id"]. " - Name: " ."นาย". $row["fname"]. " " . $row["lname"]. "<br>";
        }
        else{
            echo "id: " . $row["id"]. " - Name: " ."ด.ช.". $row["fname"]. " " . $row["lname"]. "<br>";
        }
    }
    if($row["sex"]=="W"){
        if($row["age"]>=15){
            echo "id: " . $row["id"]. " - Name: " ."นางสาว". $row["fname"]. " " . $row["lname"]. "<br>";
    }
        else if ($row["marry_status"]=="M"){
            echo "id: " . $row["id"]. " - Name: " ."นาง". $row["fname"]. " " . $row["lname"]. "<br>";
        }
        else{
            echo "id: " . $row["id"]. " - Name: " ."ด.ญ.". $row["fname"]. " " . $row["lname"]. "<br>";
        }
    }
}
}
else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>