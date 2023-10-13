<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can add code to send the form data via email or save it to a database here
    $to = "your@email.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    $messageBody = "Full Name: $fullName\nPhone Number: $phoneNumber\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $messageBody, $headers)) {
        // Email sent successfully
        // You can also add code to save the form data to a database here

        // Redirect the user to a thank you page
        header("Location: thank_you.html");
        exit;
    } else {
        // Email could not be sent, handle the error as needed
        echo "Email could not be sent. Please try again later.";
    }

    // Redirect the user to a thank you page
    header("Location: thank_you.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/brands.css">
    
</head>
<body>
    <nav>
        <div class="logo-bg">
            <div class="logo">
                <img src="images/Rutson.png" alt="" style="height: 100px; width: 150px;">
            </div>
            <ul>
                <li class="hOME"> <a href="index.html">Home</a></li>
                <li class="products"><a href="products.html">Products</a></li>
                <li class="projects"><a href="projects.html">Projects</a></li>
                <li class="about-Us"><a href="aboutus.html">About Us</a></li>
                <li class="contactUs"><a href="Contact Us.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="form-header">
            <p>contact <em>Us</em></p>
        </div>
        <div class="form-bg">
            <form method="post" action="process_form.php">
                <div class="form-group">
                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" name="fullName">
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="number" id="phoneNumber" name="phoneNumber">
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="contact-btn">Submit</button>
                </div>
            </form>
        </div>
        <div class="contact-pg2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.017901037319!2d36.66420707384329!3d-1.1476966354880094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f26c443705e1b%3A0xfbd508144ddad6e5!2sSt.%20Pauls%20University!5e0!3m2!1sen!2ske!4v1695039515277!5m2!1sen!2ske" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="rubbie-what">
            
            <p><img src="fontawesome-free-5.15.4-web/svgs/solid/phone.svg" alt="" style="width: 7%;">: (+254)727263955 </p>
        </div>
        <div class="a">
            <p><img src="fontawesome-free-5.15.4-web/svgs/solid/inbox.svg" alt="" style="width: 7%;">: info@rutsonafrica.co.ke</p>
        </div>
        <div class="location">
            <p><img src="fontawesome-free-5.15.4-web/svgs/solid/location-arrow.svg" alt="" style="width: 7%;">: Nation, Syokimau next to Naivas foodmarket</p>
        </div>
    </div>
    <footer class="container" >
        <div class="main-footer" style="top: 800px;">
            <div class="rectangle2">
                <img src="images/logo.png" alt="" style="height: 50px; width:70px">
                <p>&copy; 2023 Rutson Africa ltd. All rights reserved</p>
                <p><a href="privacy-policy.html">Privacy Policy</a></p>
            </div>
            <div class="rectangle3">
                <h3>Contact Us:</h3>
                <p>1234 Syokimau <br>Nairobi, Kenya</p>
                <p>Phone: (+254)727263955 <br>Email: info@rutsonafrica.co.ke</p>
                
            </div>
            <div class="rectangle4">
                <h3>Connect With Us:</h3>
                <a href="#"><img src="fontawesome-free-5.15.4-web/svgs/brands/facebook.svg" alt="facebook" style="width: 10%;"> Facebook</a><br>
                <a href="#"><img src="fontawesome-free-5.15.4-web/svgs/brands/instagram.svg" alt="instagram" style="width: 10%;"> Instagram</a><br>
                <a href="#"><img src="fontawesome-free-5.15.4-web/svgs/brands/twitter.svg" alt="twitter" style="width: 10%;">Twitter</a><br>
                <a href="#"><img src="fontawesome-free-5.15.4-web/svgs/brands/linkedin-in.svg" alt="linkedin" style="width: 10%;">linkedin</a>
                
                
            </div>
        </div>
    </footer>

    <script src="js/slideshow.js"></script>
</body>
</html>
