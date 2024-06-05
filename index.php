
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
            flex-wrap: wrap;
            margin: 50px 20px;
        }

        .about {
            background-color: #ffffff;
            padding: 30px;
            max-width: 600px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1;
        }

        .about h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .about p {
            font-size: 16px;
            color: #333333;
            line-height: 1.6;
        }

        .image {
            margin: 20px;
            flex: 1;
            text-align: center;
        }

        .image img {
            height: 300px;
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background-color: #011627;
            color: #ffffff;
            text-align: center;
            padding: 50px;
            margin-top: 50px;

        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .mainpage {
                flex-direction: column;
            }

            .about, .image {
                margin: 10px;
            }
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

    <!-- private html -->
    <div class="mainpage">
        <div class="about">
            <h2>About Us</h2>
            <p>Welcome to Matrimony Hub, where your perfect wedding begins. We are a premier marriage management company dedicated to turning your wedding dreams into reality. Our mission is to provide seamless, personalized, and unforgettable wedding planning experiences for couples who want their special day to be nothing short of magical.</p>
        </div>
        <div class="image">
            <img src="https://www.pgsoftwares.com/wp-content/uploads/2022/03/Second-Marriage-Website-for-All-Coimbatore-Tamilnadu-India.webp" alt="Wedding Image">
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Matrimony Hub. All rights reserved.</p>
    </div>
</body>

</html>
