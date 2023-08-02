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
    <title>Contact</title>
    <link rel="stylesheet" href="./Css/nav.css">
    <link rel="stylesheet" href="./Css/contactStyle.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
</head>

<body>
    <?php include('./includes/nav.php');?>
    <section>
        <div class="container">
            <h1 class="contactus">Contact Us</h1>
            <p2>Our Operating Our operating hours are Monday to Sunday (9 AM to 5 PM). We will do our best to reply your
                queries as swiftly as we can.</p2>
            <h3 class="talk">Talk to Us</h3>
            <p2>Have a burning question but unable to reach out to us through the live chat? No worries. Fill out the
                form
                below, or send us an email at OutsideScoop@Gmail.com</p2>
        </div>

        <div class="contact-box">

            <form action="./includes/contactus.php" method="post">
                <div class="try">
                    <input type="text" class="Form" name="name" label="Your name" placeholder="Your Name" required>
                </div>

                <div class="try">
                    <input type="text" class="Form" name="email" label="Your email" placeholder="Your Email" required>
                </div>

                <div class="try">
                    <input type="number" class="Form" name="number" label="Your phone number"
                        placeholder="Your phone Number" required>
                </div>
                <div class="try">
                    <textarea type="text" class="Form1" rows="3" name="message" label="Your message"
                        placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="Submit_Button">Send message</button>
            </form>
        </div>
    </section>



    <footer><?php include('./includes/footer.php');?></footer>


</body>

</html>