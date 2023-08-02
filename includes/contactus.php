<?php
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name=htmlspecialchars(trim($_POST['name']));
            $email=htmlspecialchars(trim($_POST['email']));
            $phnum=htmlspecialchars(trim($_POST['number']));
            $message=htmlspecialchars(trim($_POST['message']));

                //create connection
                $conn = new mysqli('localhost', 'root', '', 'ice_cream');
                //check connection
                if($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "insert into contact values('$name', '$email', '$phnum', '$message')";
                if($conn->query($sql) === TRUE) {
                    echo "<script>alert('Your Message Has Been Sent!');</script>";
                    echo "<script>window.location.href = '../contact.php';</script>";
                 } else {
                    echo "<script>alert('Multiple request entered, only one request per day');</script>";
                    echo "<script>window.location.href = '../contact.php';</script>";
                }
                $conn->close();
            }
?>
