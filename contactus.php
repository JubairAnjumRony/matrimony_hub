
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrimony Hub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poetsen+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Poetsen One", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
          
            background-color:#008080;
            color: #FFFFFF;
            margin-top:10px;
            border-radius:60px;
            padding: 15px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar_start {
            font-family: "Anton", sans-serif;
            font-size: 28px;
            color: #ffffff;
            text-decoration: none;
        }

        .navbar_start:hover {
            color: #ffcc00;
        }

        .navbar_menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar_item {
            margin-left: 30px;
        }

        .navbar_item a {
            text-decoration: none;
            color: #ffffff;
            font-size: 16px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .navbar_item a:hover {
            color: #ffcc00;
            transform: scale(1.1);
        }

        .mainpage {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 50px 20px;
        }

        .contact {
            background-color: #ffffff;
            padding: 30px;
            max-width: 600px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .contact h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .contact p {
            font-size: 16px;
            color: #333333;
            line-height: 1.6;
        }

        .contact form {
            display: flex;
            flex-direction: column;
        }

        .contact form input,
        .contact form textarea {
            font-family: "Poetsen One", sans-serif;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .contact form input[type="submit"] {
            background-color: #800020;
            color: #ffffff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact form input[type="submit"]:hover {
            background-color: #ffcc00;
            color: #800020;
        }

        .footer {
            background-color: #011627;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
        <!-- universal html -->
        <div class="container">
        <div class="navbar">
            <a href="#" class="navbar_start">Matrimony Hub</a>
            <ul class="navbar_menu">
                <li class="navbar_item"><a href="index.php">Home</a></li>
                <li class="navbar_item"><a href="register.php">Register</a></li>
                <li class="navbar_item"><a href="search.php">Search</a></li>
                <li class="navbar_item"><a href="admin.php">Admin</a></li>
                <li class="navbar_item"><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
    </div>


    <!-- Contact Us Page -->
    <div class="mainpage">
        <div class="contact">
            <h2>Contact Us</h2>
            <p>If you have any questions, feel free to reach out to us. We are here to help you find your perfect match.</p>
            <form action="#" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Matrimony Hub. All rights reserved.</p>
    </div>
    <div>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "matrimony_hub";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   


    $sql = "INSERT INTO contact (name,email,message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
        

</div>
</body>

</html>
