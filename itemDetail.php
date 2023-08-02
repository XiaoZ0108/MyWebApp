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
    <link rel="stylesheet" href="./Css/itemDetail.css">
    <link rel="stylesheet" href="./Css/itemList.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-VhXcnoJQq62L7cqu3wpiJQbsmOoKWtTYOO7cBksmJhLpZz17vcPvMY7t27ROQwQ/" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Detail</title>
</head>

<body>
    <?php
            //create connection
            $conn = new mysqli('localhost', 'root', '', 'ice_cream');
            //check connection
            if($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM item where id=".$_GET['id'];
            $id = $_GET['id'];
           
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $price=$row['price'] ;
                echo "<section class='section-p1'>";
                    echo "<div id='itemdetail'>";
                        echo "<div class='single-pro-image'>";
                            echo "<img src='" . $row['image_path'] . "'>";
                        echo "</div>";
                        echo "<div class='single-pro-details'>";
                            echo "<h6>Home / Ice-Cream</h6>";
                            echo "<h1>" . $row['title'] . "</h1>";
                            echo "<h2>RM " . $row['price'] . "</h2>";
                            echo "<input id='quantity' type='number' value='1'>";
                            echo "<button id='addItem'onclick='showAlert()'>Add to Cart</button><br><br>";
                            echo "<div id='customAlert' class='alert hide'></div><br>";
                            echo "<h3>Product Details</h3><br>";
                            echo "<p id='detail'>Description: </p>";
                            echo "<span>" . $row['dscrpt'] . "</span><br><br>";
                            echo "<p id='detail'>Flavor: </p>";
                            echo "<span>" . $row['flavor'] . "</span><br><br>";
                            echo "<p id='detail'>Ingredients: </p>";
                            echo "<span>" . $row['ingredients'] . "</span>" . "<br><br>";
                            echo "<span>" . $row['steps'] . "</span>" . "<br><br>";
                            echo "<a href='itemList.php'>" . "<button>Go Back</button>" . "</a>";
                        echo "</div>";
                    echo "</div>";
                echo "</section>";
            $conn->close();
        ?>

    <h2 class="recommend">Recommendation</h2>
    <div class="container">
        <div class="ice cup flavour2" onclick="location.href='itemDetail.php?id=2'">
            <img src="Ice_Cream/Angel Food Cake.png" />
            <div class="des">
                <h5>Angel Food Cake</h5>
                <p>
                    Heavenly light and fluffy ice cream with hints of vanilla and a
                    sweet, airy finish
                </p>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h4>RM5</h4>
            </div>
        </div>
        <div class="ice cup flavour2" onclick="location.href='itemDetail.php?id=11'">
            <img src="Ice_Cream/Mocha Macchiato.png" />
            <div class="des">
                <h5>Mocha Macchiato</h5>
                <p>
                    A creamy blend of espresso and chocolate, with a hint of sweetness
                </p>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RM7</h4>
            </div>
        </div>
        <div class="ice cup flavour2" onclick="location.href='itemDetail.php?id=16'">
            <img src="Ice_Cream/Wisconsin Old Fashioned.png" />
            <div class="des">
                <h5>Wisconsin Old Fashioned</h5>
                <p>
                    Classic cocktail-inspired flavor
                </p>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RM8</h4>
            </div>
        </div>
    </div>
    <script>
    // Get the quantity input field and "Add to Cart" button
    const quantityInput = document.getElementById('quantity');
    const addItemButton = document.getElementById('addItem');
    const message = document.getElementById('customAlert');

    // Attach a click event listener to the "Add to Cart" button
    addItemButton.addEventListener('click', () => {
        // Get the selected item's ID and quantity
        const itemId = `<?php echo $id; ?>`;
        const quantity = quantityInput.value;
        const itemprice = '<?php echo $price; ?>'

        // Send an AJAX request to the PHP script that handles the insertion of data into the database
        const xhr = new XMLHttpRequest();
        xhr.open('POST', './includes/add_to_cart.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the response from the server
                const response = xhr.responseText;
                message.innerHTML =
                    `<h2>${response}</h2><br><button onclick='hideAlert()'>OK</button>`
            }
        };
        xhr.send(`itemId=${itemId}&quantity=${quantity}&itemprice=${itemprice}`);
    });

    function showAlert() {
        document.getElementById("customAlert").classList.remove("hide");
    }

    // Hide the custom alert window
    function hideAlert() {
        document.getElementById("customAlert").classList.add("hide");
    }
    </script>
</body>

</html>