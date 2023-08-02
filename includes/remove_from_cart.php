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
$price=$_POST['itemprice'];

// Begin a transaction
mysqli_begin_transaction($conn);

try {
  if ($quantity < 1) {
    throw new Exception("Quantity must be at least 1.");
  }
  // update the itemId and quantity into the database
  $sqlcheck="select * from cart where item_Id='$itemId' and user_id='$uid'";
  $result=$conn->query( $sqlcheck);

  if($result && mysqli_num_rows($result)==1){
    $row=$result->fetch_assoc();
    if($row['quantity']==1){
        $removesql="delete from cart where item_id='$itemId' and user_id='$uid'";
        if(!$conn->query($removesql)){
            throw new Exception(mysqli_error($conn));
        }
    }else{
        $newquan = $row['quantity'] - 1;
        $newprice=$row['total']-$price;
        $cartid=$row['id'];
        $sql="update cart set quantity='$newquan',total='$newprice' where id='$cartid'";
        if(!$conn->query($sql)){
            throw new Exception(mysqli_error($conn));
        }
    }
}

} catch(Exception $e) {
  mysqli_rollback($conn);
  echo "Error: " . $e->getMessage();
}

mysqli_close($conn);
?>