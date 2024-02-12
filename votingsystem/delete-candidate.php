<?php
include 'connect.php';

if (isset($_POST['deletebtn'])) {
    $name = $_POST['name'];
    $party = $_POST['party'];
    $symbol = $_POST['symbol'];

    // $sql = "DELETE FROM `candidates` WHERE `name` = ? AND `party` = ? AND `symbol` = ?";
    $sql = "DELETE FROM `candidates` WHERE `id` = 13";
    
    // Prepare statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    // mysqli_stmt_bind_param($stmt, "sss", $name, $party, $symbol);

    // Execute the statement
    $query = mysqli_stmt_execute($stmt);

    if ($query) {
        echo "Data deleted successfully";
        header("location: delete-candidate.php");
        exit();
    } else {
        echo "Failed to delete data: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Candidate</title>
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
        input {
            padding: 5px 10px;
            margin-top: 10px;
            outline: none;
            border: none;
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
    <input type="text" placeholder="Enter Candidate Name" name="name" />
    <br>
    <br>
    <label for="">Party Name:</label>
    <br>
    <input type="text" placeholder="Enter Party Name" name="party" />
    <br>
    <br>
    <label for="">Party Symbol:</label>
    <br>
    <input type="text" placeholder="Enter your party symbol" name="symbol" />
    <br>
    <br>
    <input type="submit" value="Delete Candidate" name="deletebtn" style="padding: 5px 10px; text-align: center; margin-left: 30px;" />
</form>
</body>
</html>









