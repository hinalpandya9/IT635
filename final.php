
<!DOCTYPE html>
<html>
<head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>




<?php
//always start the session before anything else!!!!!!
session_start();
if(isset($_POST['username']) and isset($_POST['password']))  { //check null
        $username = $_POST['username']; // text field for username
        $password = $_POST['password']; // text field for password

// store session data
$_SESSION['username']=$username;
//connect to the db
$link = mysqli_connect('localhost','root','hinal123') or die( "Unable to connect");
mysqli_select_db($link, 'newD') or die( "Unable to select database");
         //Our SQL Query
           $sql_query = "Select email,password,user From car_rent Where email = '$username' AND password = '$password' AND user='A' ";
         //Run our sql query
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));
                        if($result == false)
                                {
                                echo 'The query failed.';
                                exit();
                        }
                        if(mysqli_num_rows($result) == 1){
                        //the username and password matches the database
                        //move them to the page to which they need to go
                                header('Location: admin.php');
                        //Our SQL Query
                        }

           $sql_query = "Select email,password,user From car_rent Where email = '$username' AND password = '$password' AND user='R'";
            //Run our sql query
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));
                        if($result == false)
 {
                                echo 'The query failed.';
                                exit();
                        }
                        if(mysqli_num_rows($result) == 1){
                        //the username and password matches the database
                        //move them to the page to which they need to go
                                header('Location: renter.php');
                        //Our SQL Query
                        }

           $sql_query = "Select email,password,user From car_rent Where email = '$username' AND password = '$password' AND user='R'";
            //Run our sql query
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));
                        if($result == false)
                                {
                                echo 'The query failed.';
                                exit();
                        }
                        //this is where the actual verification happens
                        if(mysqli_num_rows($result) == 1){
                        //the username and password matches the database
                        //move them to the page to which they need to go
                                header('Location: info.php');

                        }
                    else{
                        $err = 'INORRECT PASSWORD OR EMAIL' ;
}
                        //then just above your login form or where ever you want the error to be displayed you just put in
                        echo "$err";
    }

?>

<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="final.php">HOME</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

 <div class="wrapper">
  <form  class="login" action="" method="post">
    <p class="title">Log in</p>

    <input type="email" name="username" placeholder="Email ID"autofocus required/>
    <i class="fa fa-user"></i>
    <input type="password" name="password" placeholder="Password" required />
    <i class="fa fa-key"></i>
    <button >
      <i class="spinner"></i>
      <span class="state">Log in</span>
    </button>
  </form>
  </p>
</div>

</body>
</html>
