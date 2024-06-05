
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

/* univeral css*/
/* private css */
.summary { display: flex; gap:50px; margin-left:400px; margin-bottom: 20px; }
        .summary-item { background-color: #4CAF50; color: white; padding: 20px; border-radius: 5px; text-align: center; }
        .summary-item h3 { margin: 0; font-size: 2em; }
             
        .admin-pannel
        {
             margin-left:600px;
             margin-top: 50px;
             margin-bottom:50px;

        }
    
   </style>
      
</head>
<body>

<div class="container">
 <!-- private html -->
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
  <h2 class="admin-pannel">Admin Panel</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "matrimony_hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

   // Fetch blood requests summary
$totalRequestsSql = "SELECT COUNT(*) AS total FROM info";
$totalPendingSql = "SELECT COUNT(*) AS broom FROM info WHERE gender='male'";
$totalApprovedSql = "SELECT COUNT(*) AS bride FROM info WHERE gender='female'";

$totalRequestsResult = $conn->query($totalRequestsSql);
$totalPendingResult = $conn->query($totalPendingSql);
$totalApprovedResult = $conn->query($totalApprovedSql);

$totalRequests = $totalRequestsResult->fetch_assoc()['total'];
$totalPending = $totalPendingResult->fetch_assoc()['broom'];
$totalApproved = $totalApprovedResult->fetch_assoc()['bride'];
?>

<div class="summary">
    <div class="summary-item">
        <h3><?php echo $totalRequests; ?></h3>
        <p>Total Candidate</p>
    </div>
    <div class="summary-item">
        <h3><?php echo $totalPending; ?></h3>
        <p>Male Candidate</p>
    </div>
    <div class="summary-item">
        <h3><?php echo $totalApproved; ?></h3>
        <p>Female candidate</p>
    </div>
</div>   
</body>
</html>