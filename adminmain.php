<html>
<head>
    <title></title>
    <link rel="stylesheet" href="MainStyling.css">
    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
    <?php
session_start();
 
$servername = "172.31.37.207";
 
$username = "root";
 
$password = "myproject";
 
$dbname = "register";
 if($_SESSION["name"]==NULL){
     header('location: index.php');
 }
else{
    $admin=$_SESSION["name"];
    echo $admin;
 ?>
    <div class="site">
        <header>
            <div class="log">
            <div class="logo-container">
                <div class="logo"><img src="1.png">
                </div>
                <h1>DIGITAL POLICE</h1>
            </div>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="About.html">About</a>
                    </li>
                    <li>
                        <a href="contactus.html">contact us</a>
                    </li>
                    <li>
                        <a href="Logout.php">logout</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="about-content" >
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
 
                <th>Type</th>
 
                <th>Latitude</th>
 
                <th>Longitude</th>
                <th>Date-Time</th>
 
                </tr>
<?php
                
// Create connection
 
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * from $admin";
 
if (mysqli_query($conn, $sql)) {
 
echo "";
 
} else {
 
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 
}
 
$count=1;
 
$result = mysqli_query($conn, $sql);
 
// output data of each row
 
while($row = mysqli_fetch_assoc($result)) { ?>
 
<tbody>
 
<tr>
 
<th>
 
<?php echo $row['type']; ?>
 
</th>
 
<td>
 
<?php echo $row['latitude']; ?>
 
</td>
 
<td>
 
<?php echo $row['longitude']; ?>
 
</td>
 <td>
 
<?php echo $row['date']; ?>
 
</td>
</tr>
 
</tbody>
 
<?php
 
$count++;
 
}
}
 
?>
            </table>
        </div>
        <footer>
        <p>karma is a bomerang what you give you get</p>
        </footer>
    </div>
</body>
</html>