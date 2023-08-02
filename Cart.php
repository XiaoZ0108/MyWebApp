<?php
    session_start();
   if(!isset($_SESSION['username'])&&!isset($_SESSION['uid'])){
    header('Location:login.php');
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="./Css/Cart.css" />
    <link rel="stylesheet" href="./Css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <?php include('./includes/nav.php');?>
    <div class="card">
        <div class="top_card">
            <h2>Order Summary</h2>
        </div>
        <div class="middle_card">
            <?php 
                $conn = new mysqli('localhost', 'root', '', 'ice_cream');
                if($conn->connect_error) {
                   die("Connection failed: " . $conn->connect_error);
               }
               $uid=$_SESSION['uid'];
                $sql = "SELECT * FROM cart where user_id='$uid'";
                $result = $conn->query($sql);
                $photo;$title;
                while($row=$result->fetch_assoc()){
                    $itemid=$row['item_id'];
                    $itemsql="select * from item where id='$itemid'";
                    $result2=$conn->query($itemsql);
                    if($result2&&mysqli_num_rows($result2)===1){
                        $itemrow=$result2->fetch_assoc();
                        $photo= $itemrow['image_path'];
                        $title=$itemrow['title'];
                    }
                    echo " <div class='item_box'>";
                    echo "<ul>";
                    echo "<li class='item_pic'><img src='".$photo."'/></li>";
                    echo "<li class='item_desc'>";
                    echo $title;
                    echo  "<br />";
                    echo "RM".$row['total']/$row['quantity']." Per Piece";
                    echo  "</li>";
                    echo  " <li class='item_quan_price'>";
                    echo  " <div class='quantity'>";
                    echo "  <span class='minus' id='".$row['item_id']."'>-</span>";
                    echo "  <span class='num'>".$row['quantity']."</span>";
                    echo "  <span class='plus' id='".$row['item_id']."'>+</span>";
                    echo "</div>";
                    echo  "<span class='price'>RM".$row['total']."</span>";
                    echo " </li>";
                    echo  "</ul>";
                    echo "<div class='line'></div>";
                    echo "</div>";
                }
                $conn->close();
            ?>
        </div>
        <div class="bottom_card">
            <div class="total">
                <span style="float: left">
                    <div class="small">Delivery</div>
                    TOTAL
                </span>
                <span style="float: right; text-align: right">
                    <div class="small">RM4.95</div>
                    <div class="total_price">RM435.55</div>
                </span>
                <button onclick="location.href='./Checkout.php'" class="login_bttn">
                    Proceed
                </button>
            </div>
        </div>
    </div>

    <script src="./Js/Cart.js"></script>
</body>

</html>