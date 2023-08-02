<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=trim($_POST['username']);
    $password=trim($_POST['password']);
    $email=trim($_POST['email']);
    if(empty($username)){
        echo "Enter Username";
    }else if(empty($password)){
        echo "Enter Password";
    }else{
        $mysql=new mysqli('localhost','root','','ice_cream');

        if($mysql->connect_error){
            die("ERROR CONNECT TO DARABASE".$mysql->connect_error);
        }
        $query="insert into ICuser (email,username,password) values('$email','$username',MD5('$password'))";
        $result=$mysql->query($query);

        if($result){
            $mysql->close();
            header('Location:index.php');
        }else{
            echo 'SOMETHING ERROR';
            $mysql->close();
        }
    }
 }   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Ice-Cream Register Page</title>
    <link rel="stylesheet" href="./Css/register.css" />
</head>

<body>
    <div class="card">
        <div class="top_card">
            <img src="./Element/catcat.jpg" class="icelogo" alt="Logo" />
        </div>
        <div class="bottom_card">
            <h1>Register</h1>
            <form action="register.php" method='post'>
                <p>Email</p>
                <input type="text" class="inputbox" name="email" required />
                <p>Username</p>
                <input type="text" class="inputbox" name="username" required />
                <p>Password</p>
                <input type="password" class="inputbox" name="password" id="password" required />
                <button type="submit" class="login_bttn">Submit</button>
            </form>
        </div>
    </div>
    <script src="./Css/register.css"></script>
</body>

</html>