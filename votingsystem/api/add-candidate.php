<?php
include("connect.php");
$name = $_POST[' name '];
$cnic = $_POST[' cnic'];
$address = $_POST[' address '];
$image = $_FILES['name']['photo'];
$tmp_name = $_FILES['tmp_name']['photo'];
if($name==$Ahmad){
    move_uploaded_file($tmp_name, "../uploads/$image");
    $insert = mysqli_query($connect, "INSERT INTO candidate (name, cnic, address, photo, status, votes) VALUES ('$name', '$cnic', '$address', '$image', 0, 0)");
    if($insert){
        echo '
        <script>
        alert ("Candidate Add Successfully");
        window.location = "../";
        </script>
        ';
    }
    else {
        echo '
        <script>
        alert ("Some error occured!");
        window.location = "../routes/add-candidate.php";
        </script>
        ';
    }
}
else{
    echo '
    <script>
    alert ("Candidate does not add!");
    window.location = "../routes/add-candidate.php";
    </script>
    ';
}
?>
 






