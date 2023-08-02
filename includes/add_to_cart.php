<?php
 session_start();
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'ice_cream');
//check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the itemId and quantity values from the $_POST supergloba
$uid=$_SESSION['uid'];
$itemId = $_POST['itemId'];
$quantity = $_POST['quantity'];
$price=$_POST['itemprice']*$_POST['quantity'];

// Begin a transaction
mysqli_begin_transaction($conn);

try {
  if ($quantity < 1) {
    throw new Exception("Quantity must be at least 1.");
  }
  /* if ($quantity > 100) {
    throw new Exception("Quantity could not more than 100.");
  } */

  // Insert the itemId and quantity into the database
  $sqlcheck="select * from cart where item_Id='$itemId' and user_id='$uid'";
  $result=$conn->query( $sqlcheck);

  if($result && mysqli_num_rows($result)==1){
    $row=$result->fetch_assoc();
    $newquan = $row['quantity'] +$quantity;
    $newprice=$row['total']+$price;
    $cartid=$row['id'];
    $sql="update cart set quantity='$newquan',total='$newprice' where id='$cartid'";
    if($conn->query($sql)){
      echo $quantity." item(s) added to cart successfully";
    }else {
      throw new Exception(mysqli_error($conn));
    }
  }else if($result && mysqli_num_rows($result)==0){
    $sql = "INSERT INTO cart (user_id,item_Id, quantity,total) VALUES ('$uid','$itemId', '$quantity','$price')";
    if (mysqli_query($conn, $sql)) {
      echo $quantity." item(s) added to cart successfully";
    } else {
      throw new Exception(mysqli_error($conn));
    }
  }

} catch(Exception $e) {
  mysqli_rollback($conn);
  echo "Error: " . $e->getMessage();
}

mysqli_close($conn);
?>