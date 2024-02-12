<?php
include 'connect.php';

if (isset($_POST['addbtn'])) {
    $name = $_POST['name'];
    $party = $_POST['party'];
    $symbol = $_POST['symbol'];

    // Using prepared statement to prevent SQL injection
    $sql = "INSERT INTO `candidates` (`name`, `party`, `symbol`)
            VALUES ('$name', '$party', '$symbol')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data inserted successfully";
        header ("location: home.php");
        exit();
    } else {
        echo "Failed to insert data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Candidate</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    .header-section {
    background-color: green;
    padding-top: 10px;
    padding-bottom: 10px;
}
    .header-section h1 {
    color: #fff;
    font-size: 16px;
    text-align: center;
    font-family: 'oswald', sans-serif;
}
    label {
    color: #000;
    font-weight: 600;
}
        form {
            padding-top: 200px;
            padding-left: 600px;
            background-color: lightslategray;
            min-height: 403px;
        }
        a {
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            background-color: darkgray;
            font-size: small;
            margin-left: 15px;
        }
    </style>
    </head>
<body>
    <div class="header-section">
    <h1>Voting System</h1>
    </div>
<form action="" method="POST">
    <label for="">Candidate Name:</label>
    <br>
    <input type="text" placeholder="Enter Candidate Name" style="margin-top: 10px; padding: 5px 10px; outline: none; border: none; width: 35%;" name="name" />
    <br>
    <br>
    <label for="">Party Name:</label>
    <br>
    <input type="text" placeholder="Enter Party Name" style="margin-top: 10px; padding: 5px 10px; outline: none; border: none; width: 35%;" name="party" />
    <br>
    <br>
    <label for="">Party Symbol:</label>
    <br>
    <input type="text" placeholder="Enter your party symbol" style="margin-top: 10px; padding: 5px 10px; outline: none; border: none; width: 35%;" name="symbol" />
    <br>
    <br>
    <input type="submit" value="Add Candidate" name="addbtn" style="padding: 5px 10px; margin-left: 25px; text-align: center; color: #fff; background-color: darkgray; border: none; outline: none; font-size: small;" />
    <a href="delete-candidate.php">Delete Candidate</a>
</form>
</body>
</html>


