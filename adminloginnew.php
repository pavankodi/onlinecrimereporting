<?php
    session_start();
   define('DB_SERVER', '172.31.37.207');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'mykeypair');
   define('DB_DATABASE', 'register');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if(isset($_POST["submit"])) {
      // username and password sent from form 
      
      $myname = mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM adminlogin WHERE name = '$myname' AND password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          $_SESSION["name"] = $myname;
         header("location: adminmain.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>