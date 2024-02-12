<?php
include 'connect.php';

if (isset($_POST['votebtn'])) {
    $name = $_POST['name'];
    $votes = $_POST['votes'];

    // Using prepared statement to prevent SQL injection
    $sql = "INSERT INTO `visitor` (`name`, `votes`)
            VALUES ('$name', '$votes')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data inserted successfully";
        header ("location: visitor.php");
        exit();
    } else {
        echo "Failed to insert data: " . mysqli_error($conn);
    }
}
?>

<script>

   var votesPTI = 50; // Set the number of votes for PTI
   var votesJMI = 40; // Set the number of votes for JMI
   var votesPMLN = 10; // Set the number of votes for PMLN
   var votesPPP = 20; // Set the number of votes for PPP

   function checkVotes() {

   var maxVotes = Math.max(votesPTI, votesJMI, votesPMLN, votesPPP);
   var winner;

   if (votesPTI === 50) {
    winner = "PTI is won and PTI takes the most votes is: " + votesPTI + " votes";
   } else if (votesJMI === 40) {
    winner = "JMI is loose and takes the votes is: " + votesJMI + " votes";
   } else if (votesPMLN === 10) {
    winner = "PMLN is loose and takes the votes is: " + votesPMLN + " votes";
   } else if (minVotes === votesPPP) {
    winner = "PPP is loose and takes the votes is: " + votesPPP + " votes";
   } else {
      winner = "No clear winner yet";
   }

   alert(winner);
}

</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'oswald', sans-serif;
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

.visitor {
    background-color: lightgrey;
    margin-top: -200px;
    min-height: 603px;
}

.visitor-login {
    text-align: center;
    margin-top: 200px;
    min-height: 180px;
    padding-top: 150px;
}

.visitor-login h2 {
    color: #fff;
    font-size: 16px;
    text-align: center;
    padding-top: 20px;
    font-family: 'oswald', sans-serif;
    margin-top: -150px;
}

.visitor-1 {
    display: flex;
}

.visit-1 {
    border: 1px solid gray;
    background-color: gray;
    width: 170px;
    min-height: 160px;
    margin-left: 350px;
}

.pic-1 img {
    width: 30%;
    margin-top: 5px;
}

.visit-2 {
    border: 1px solid gray;
    background-color: gray;
    width: 170px;
    min-height: 160px;
    margin-left: 350px;
}

.pic-2 img {
    width: 30%;
    margin-top: 5px;
    min-height: 60px;
}

.visitor-2 {
    display: flex;
}

.visit-3 {
    border: 1px solid gray;
    background-color: gray;
    width: 170px;
    min-height: 160px;
    margin-left: 350px;
    margin-top: 30px;
}

.pic-3 img {
    width: 30%;
    margin-top: 5px;
}

.visit-4 {
    border: 1px solid gray;
    background-color: gray;
    width: 170px;
    min-height: 160px;
    margin-left: 350px;
    margin-top: 25px;
}

.pic-4 img { 
    min-height: 100px; 
    width: 30%;
    margin-top: 5px;
}

.content img {
    width: 20%;
}

.content p {
    font-size: 12px;
}

.visit-1 {
    border: 4px solid green;
    min-height: 240px;
}

.visit-2 {
    border: 4px solid red;
    min-height: 240px;
}

.visit-3 {
    border: 4px solid red;
    min-height: 260px;
}

.visit-4 {
    border: 4px solid red;
    min-height: 260px;
}

label {
    font-weight: bold;
}

</style>
<body>
<div class="header-section">
        <h1>Voting System</h1>
    </div>
    <!-- Visitor just see who is winning and who has the most votes -->
    <div class="visitor">
        <div class="visitor-login">
            <div class="head">
                <h2>Visitor</h2>
            </div>
            <div class="visitor-1">
                <div class="visit-1">
                    <div class="pic-1">
                        <img src="assets/Images/khan.png" alt="Khan Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/bat.png" alt="bat icon">                     
                    </div>
                    <form action="" method="POST">
                    <label for="">Name:</label>
                    <input type="text" placeholder="Enter name" style="padding: 5px 10px; border: none; outline: none; width: 82%; margin-top: 5px;" name="name" />
                    <label for="">Votes:</label>
                    <input type="text" placeholder="Enter votes" style="padding: 5px 10px; border: none; outline: none; width: 82%; margin-top: 5px;" name="votes" />
                    <input type="submit" value="Vote" style="padding: 2px 10px; outline: none; margin-top: 5px;" onclick="checkVotes()" id="a1" name="votebtn" />
                    </form>               
                </div>

                <div class="visit-2">
                    <div class="pic-2">
                        <img src="assets/Images/siraj-ul-haq.png" alt="Siraj Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/jammat-e-islami.png" alt="jammat-e-islami icon">                     
                    </div>
                   <form action="" method="POST">
                   <label for="">Name:</label>
                    <input type="text" placeholder="Enter name" style="padding: 5px 10px; border: none; outline: none; width: 82%; margin-top: 5px;" name="name" />
                    <label for="">Votes:</label>
                    <input type="text" placeholder="Enter votes" style="padding: 5px 10px; border: none; outline: none; width: 82%; margin-top: 5px;" name="votes" />
                    <input type="submit" value="Vote" style="padding: 2px 10px; outline: none; margin-top: 5px;" onclick="checkVotes()" id="a2" name="votebtn" />
                   </form>
                </div>
            </div>
            <div class="visitor-2">
                <div class="visit-3">
                    <div class="pic-3">
                        <img src="assets/Images/nawaz.png" alt="Nawaz Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/lion.png" alt="lion icon">                      
                    </div>
                    <form action="" method="POST">
                    <label for="">Name:</label>
                    <input type="text" placeholder="Enter name" style="padding: 5px 10px; border: none; outline: none; width: 82%; margin-top: 5px;" name="name" />
                    <label for="">Votes:</label>
                    <input type="text" placeholder="Enter votes" style="padding: 5px 10px; border: none; outline: none; width: 82%; margin-top: 5px;" name="votes" />
                    <input type="submit" value="Vote" style="padding: 2px 10px; outline: none; margin-top: 5px;" onclick="checkVotes()" id="a3" name="votebtn" />
                    </form>                                   
                </div>

                <div class="visit-4">
                    <div class="pic-4">
                        <img src="assets/Images/bilawal.png" alt="Bilawal Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/arrow.png" alt="arrow icon">                      
                    </div>
                    <form action="" method="POST">
                    <label for="">Name:</label>
                    <input type="text" placeholder="Enter name" style="padding: 5px 10px; border: none; outline: none; width: 82%; margin-top: 5px;" name="name" />
                    <label for="">Votes:</label>
                    <input type="text" placeholder="Enter votes" style="padding: 5px 10px; border: none; outline: none; width: 82%; margin-top: 5px;" name="votes" />
                    <input type="submit" value="Vote" style="padding: 2px 10px; outline: none; margin-top: 5px;" onclick="checkVotes()" id="a4" name="votebtn" />
                </form>                
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>




