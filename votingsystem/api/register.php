<?php
include("connect.php");
$name = $_POST[' name '];
$cnic = $_POST[' cnic'];
$phone = $_POST[' phone '];
$password = $_POST[' password '];
$address = $_POST[' address '];
$image = $_FILES['name']['photo'];
$tmp_name = $_FILES['tmp_name']['photo'];
$role = $_POST[' role '];
if($password==$123){
    move_uploaded_file($tmp_name, "../uploads/$image");
    $insert = mysqli_query($connect, "INSERT INTO registration (name, cnic, phone, password, address, photo, role, status, votes) VALUES ('$name', '$cnic', '$phone', '$password', '$address', '$image', '$role', 0, 0)");
    if($insert){
        echo '
        <script>
        alert ("Registration Successfull");
        window.location = "../";
        </script>
        ';
    }
    else {
        echo '
        <script>
        alert ("Some error occured!");
        window.location = "../routes/registration.php";
        </script>
        ';
    }
}
else{
    echo '
    <script>
    alert ("Password does not match!");
    window.location = "../routes/registration.php";
    </script>
    ';
}
?>


