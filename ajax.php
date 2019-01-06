<?php
$lat = $_REQUEST["q"];
$long= $_REQUEST["p"];
$type= $_REQUEST["r"];
$servername = "52.14.119.202";
$username = "root";
$password = "myproject";
$dbname = "register";
$station_loc = array
  (
  array("police4",22,18),
  array("police1",15,13),
  array("police2",5,2)
  );
$min_stat="";
$min=10000000;
// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "INSERT INTO location (latitude,longitude)
VALUES ($lat,$long)";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error creating table: " . $conn->error;
    }
    for ($i = 0; $i <= 2; $i++) {
  // Fetch one and one row
        $x=$station_loc[$i][1];
        $y=$station_loc[$i][2];
    $current=($x-$lat)*($x-$lat)+($y-$long)*($y-$long);
    if($current<=$min){
        $min=$current;
        $min_stat=$station_loc[$i][0];
    }
        
       // echo "<br> lat: ". $row["latitude"]. " long: ". $row["longitude"]."array".$min+1. "<br>";
    }
$sqlk="INSERT INTO $min_stat (type,latitude,longitude,date)
VALUES ('$type',$lat,$long,NOW())";
 if ($conn->query($sqlk) === TRUE) {}

echo '<script type="text/javascript">alert("' . $min_stat . '")</script>';
$conn->close();
    //echo $lat + $long;
    ?>