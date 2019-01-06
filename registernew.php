 <?php
session_start();
$servername = "172.31.37.207";
$username = "root";
$password = "myproject";
$dbname = "register";
if(isset($_POST["submit"])){
$email=$_POST['email'];  
$password=$_POST['password'];
$number=$_POST['number'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql_check="SELECT * FROM login WHERE email='$_POST[email]'";
$res=mysqli_query($conn,$sql_check);

if(mysqli_num_rows($res) === 0){

// sql to create table
$sql = "INSERT INTO login (email,password,number)
VALUES ('$email','$password','$number')";

    if ($conn->query($sql) === TRUE) {
        header('location: main.php');
    } else {
        echo "Error creating table: " . $conn->error;
    }
}else{
        echo "Email already exists";
}
$conn->close();
}
?> 
