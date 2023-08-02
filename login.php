<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=trim($_POST['username']);
    $password=MD5(trim($_POST['password']));
  

    if(empty($username)){
        echo "Enter Username";
    }else if(empty($password)){
        echo "Enter Password";
    }else{
        $mysql=new mysqli('localhost','root','','ice_cream');
        if($mysql->connect_error){
            die("ERROR CONNECT TO DARABASE".$mysql->connect_error);
        }
        $query="select * from ICuser where username='$username' and password='$password'";
        $result=$mysql->query($query);

        if($result&&mysqli_num_rows($result)===1){
            echo "LOGGING>>>>>";
            $row=$result->fetch_assoc();
            $_SESSION['username']=$row['username'];
            $_SESSION['uid'] = $row['id'];
            $mysql->close();
           header('Location:index.php');
        }else{
            echo "SOMETHINGS ERROR";
            $mysql->close();
        }

    }
}   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice-Cream Login Page</title>
    <link rel="stylesheet" href="./Css/login.css" />
</head>

<body>
    <div class="card">
        <div class="top_card">
            <img src="./Element/IcecramLogo.jpg" class="icelogo" alt="Logo" />
        </div>
        <div class="bottom_card">
            <h1>Login</h1>
            <form action="login.php" method='post'>
                <p>Username</p>
                <input type="text" class="inputbox" name="username" required />
                <p>Password</p>
                <input type="password" class="inputbox" name="password" id="password" required />

                <button type="submit" class="login_bttn">Login</button>
                <a href="register.php" target="_blank" class="register_bttn">Register</a>
            </form>
        </div>
    </div>
</body>

</html>