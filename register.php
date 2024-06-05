
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

        .from-seciton{
 background-color: #ffffff;
    padding: 20px;
    max-width: 500px;
    height: 300px;
    margin: 20px;
    margin-left: 400px;
    border-radius: 10px;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
    
}
   input,select{
     width:100%;
     height:20px;
   }
  label {
   display: block;
   margin-bottom:5px;
   margin-top:5px;
  }
  #btn{
         margin-top:10px;
         padding:10px 20px;
         background-color:red;
         color:white;
         border:none;
  }
  #btn:hover { 
   background-color: #45a049;
   }


        </style>
</head>
<body>
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

        <div class="from-seciton">
    <h2 align="center" style="color:black;" ><Strong>Register For Marriage</strong>  </h2>
    <form action="" method="POST">
    <label for="gender">Select Gender :</label>

<select name="gender" id="gender">
 <option value="male">Male</option>
 <option value="female">Female</option>
 <option value="others">Others</option>
 
</select>
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" required>
    <label for="age">Age </label>
    <input type="text" id="age" name="age" required>
    <label for="blood_group">Blood_group : </label>

    <select name="blood_group" id="blood_group">
     <option value="A+">A+</option>
     <option value="B+">B+</option>
     <option value="A-">A-</option>
     <option value="O+">O+</option>
     <option value="AB+">AB+</option>
     <option value="AB-">AB-</option>

    </select>
    <label for="height">Height : </label>
    <input type="text" name="height" id="height " required>
    <label for="weight">Weight : </label>
    <input type="text" name="weight" id="weight " required>
    <label for="skin_color">Skin Color : </label>
    <input type="text" name="skin_color" id="skin_color " required>
    <label for="marital_status">Marital Status :</label>

<select name="marital_status" id="marital_status">
 <option value="single">Single</option>
 <option value="married">Married</option>
 <option value="in_a_relationship">In a relationship</option>
 <option value="devorced">Devorced</option>
 <option value="widowed">Widowed</option>
 
</select>
    <label for="region">Region : </label>
    <input type="text" name="region" id="region" required>
    <label for="contact">Contact : </label>
    <input type="text" name="contact" id="contact ">
    <button id="btn">submit</button>

    </form>

   </div>
<!-- phpconnect -->
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $height = $_POST['height'];
    $weight=$_POST['weight'];
    $skin_color = $_POST['skin_color'];
    $marital_status = $_POST['marital_status'];
    $region= $_POST['region'];
    $contact = $_POST['contact'];


    $sql = "INSERT INTO info (name,age,gender,blood_group,height, weight ,skin_color,marital_status,region, contact) VALUES ('$name', '$age', '$gender', '$blood_group','$height','$weight','$skin_color','$marital_status','$region','$contact')";
    
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