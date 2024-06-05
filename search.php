
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
    /* private css */
    .search-section {
      margin-left: 400px;
      margin-top: 100px;
      width: 600px;
    }

    .search-bar input {
      height: 30px;
      margin-bottom: 10px;
    }

    .search-bar input[type="text"] {
      width: 40%;
      margin-right: 10px;
    }

    #btn {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    #btn:hover {
      background-color: #45a049;
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
  <!-- universla html -->
  <!-- private html  -->
  <div class="search-section">
    <h3 style="font-size: 30px;">Search For Partner </h3><br>
    <form method="GET" action="" class="search-bar ">
      <label for="gender">Select Gender :</label>

      <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="others">Others</option>

      </select><br><br>
      <label for="age">Age : </label><br>
      <input type="text" id="age" name="age" required><br>
      <label for="region">Region : </label><br>
      <input type="text" name="region" id="region" required><br>
      <button type="submit" id="btn">Search</button>

    </form>
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
    if (isset($_GET['gender']) && isset($_GET['age']) && isset($_GET['region'])) {
      $gender = $_GET['gender'];
      $age = $_GET['age'];
      $region = $_GET['region'];

      $sql = "SELECT name, age, gender, blood_group,height, weight, skin_color, marital_status,region, contact FROM info WHERE gender = '$gender' AND age = '$age' AND region='$region'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<div class='card'>
                              
                                <p><strong>name :</strong> {$row['name']}</p>
                                <p><strong>age :</strong> {$row['age']}</p>
                                <p><strong>gender :</strong> {$row['gender']}</p>
                                <p><strong>blood_group :</strong> {$row['blood_group']}</p>
                                <p><strong>height :</strong> {$row['height']}</p>
                                <p><strong>weight :</strong> {$row['weight']}</p>
                                <p><strong>skin_color :</strong> {$row['skin_color']}</p>
                                <p><strong>marital_status :</strong> {$row['marital_status']}</p>
                                <p><strong>region :</strong> {$row['region']}</p>
                               
                                <p><strong>contact :</strong> {$row['contact']}</p>

                                <br>
                              </div>";
        }
      } else {
        echo "<p>No data found</p>";
      }
    }

    $conn->close();
    ?>
  </div>


</body>

</html>