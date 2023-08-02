<?php
   session_start();
    if($_SERVER['REQUEST_METHOD']==='GET'&&isset($_GET['input'])){
        echo "<input type='hidden' id='search_main' value=".$_GET['input'].">";
    }
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./Css/footerStyle.css">
    <link rel="stylesheet" href="./Css/itemList.css" />
    <link rel="stylesheet" href="./Css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-VhXcnoJQq62L7cqu3wpiJQbsmOoKWtTYOO7cBksmJhLpZz17vcPvMY7t27ROQwQ/" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice-Cream</title>
</head>

<body>
    <?php include('./includes/nav.php');?>
    <div class="header">
        <h1 class="title">Delicious Ice Cream Flavors</h1>
        <p class="subtitle">Explore our wide range of ice cream flavors!</p>
    </div>
    <div class='search_category'>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search for products..." />
            <button type="submit" id="submitButton">
                <i class=" fa fa-search"></i>
            </button>
            <button type="button" id="showAll">
                Show All
            </button>
        </div>
        <div class="category-container">
            <select id="categoryFilter">
                <option value="all">All</option>
                <option value="flavour1">Sweet Lover</option>
                <option value="flavour2">Classic Lover</option>
                <option value="flavour3">Fruit Lover</option>
            </select>
        </div>
    </div>
    <section id="product1" class="section-p1">
        <div class="header1">
            <h1 class="title1">Cup Type Ice Cream</h1>
            <p class="subtitle1">
                Enjoy the rich and creamy flavor in a convenient, easy-to-hold cup
                that's perfect for any occasion!
            </p>
        </div>
        <div class='container'>
            <?php
         $conn = new mysqli('localhost', 'root', '', 'ice_cream');
         if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM cup";
          $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
            echo "<div class='" . $row['type'] . "' onclick=\"location.href='itemDetail.php?id=" . $row['id'] . "'\">";
              echo"  <img src='".$row['image_path']."'>";
               echo" <div class='des'>";
                 echo"<h5>".$row['name']."</h5>";
                   echo" <p>".$row['dscript']."</p>";
                    echo"<div class='star'>";
                    if($row['star']==5){
                       echo"<i class='fas fa-star'></i>";
                      echo"<i class='fas fa-star'></i>";
                        echo"<i class='fas fa-star'></i>";
                        echo"<i class='fas fa-star'></i>";
                        echo"<i class='fas fa-star'></i>";
                    }
                    else{
                        echo"<i class='fas fa-star'></i>";
                        echo"<i class='fas fa-star'></i>";
                        echo"<i class='fas fa-star'></i>";
                        echo"<i class='fas fa-star'></i>";
                        echo"<i class='fas fa-star-half-alt'></i>";
                    }
                  echo"  </div>";
                    echo"<h4>".$row['price']."</h4>";
                echo"</div>";
               echo"</div>";
                }
            $conn->close();
            ?>
        </div>

    </section>

    <section id="product2" class="section-p1">
        <div class="header2">
            <h1 class="title2">Cone Type Ice Cream</h1>
            <p class="subtitle2">A delicious and convenient way to enjoy a frozen treat on-the-go!</p>
        </div>

        <div class='container'>
            <?php
          $conn = new mysqli('localhost', 'root', '', 'ice_cream');
          if($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }
         $sql = "SELECT * FROM cone";
           $result = $conn->query($sql);
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()){
            echo "<div class='" . $row['type'] . "' onclick=\"location.href='itemDetail.php?id=" . $row['id'] . "'\">";
             echo"  <img src='".$row['image_path']."'>";
              echo" <div class='des'>";
                echo"<h5>".$row['name']."</h5>";
                  echo" <p>".$row['dscript']."</p>";
                   echo"<div class='star'>";
                   if($row['star']==5){
                      echo"<i class='fas fa-star'></i>";
                     echo"<i class='fas fa-star'></i>";
                       echo"<i class='fas fa-star'></i>";
                       echo"<i class='fas fa-star'></i>";
                       echo"<i class='fas fa-star'></i>";
                   }
                   else{
                       echo"<i class='fas fa-star'></i>";
                       echo"<i class='fas fa-star'></i>";
                       echo"<i class='fas fa-star'></i>";
                       echo"<i class='fas fa-star'></i>";
                       echo"<i class='fas fa-star-half-alt'></i>";
                   }
                 echo"  </div>";
                   echo"<h4>".$row['price']."</h4>";
               echo"</div>";
              echo"</div>";
               }
           $conn->close();
             ?>
        </div>
    </section>
    <?php include('./includes/footer.php');?>
    <script src="./Js/itemList.js"></script>
</body>

</html>