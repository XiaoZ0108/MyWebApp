 <nav>
     <section id="navbar">
         <p id="clock"></p>
         <a href="index.php"><img src="./Element/logoi.png" class="logo" alt="" /></a>

         <div id="searchContainer">
             <form method=get action='itemList.php#product1' id="search-form">
                 <input type="text" id="navsearch" name='input' placeholder="Ice cream..." />
                 <button type="submit" id="navbutton">
                     <i class="fa fa-search"></i>
                 </button>
             </form>
         </div>
         <div class="navbox">
             <ul class='row'>
                 <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>"
                         href="index.php">Home</a></li>
                 <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'About.php') ? 'active' : ''; ?>"
                         href="About.php">About</a></li>
                 <li class="dropdown">
                     <a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'itemList.php') ? 'active' : ''; ?>"
                         href="itemList.php">Menu</a>
                     <div class="dropdown-content">
                         <a href="itemList.php#product1">Cup ice cream</a>
                         <a href="itemList.php#product2">Cone ice cream</a>
                     </div>
                 </li>
                 <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>"
                         href="contact.php">Contact</a></li>
                 <li>
                     <a href="./Cart.php"><i class="fa fa-shopping-cart"></i></a>
                 </li>
             </ul>
         </div>
     </section>
 </nav>