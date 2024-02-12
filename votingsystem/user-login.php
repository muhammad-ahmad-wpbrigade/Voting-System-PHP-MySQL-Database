<?php
include 'connect.php';

if (isset($_POST['registerbtn'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $cnic = $_POST['cnic'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    // Using prepared statement to prevent SQL injection
    $sql = "INSERT INTO `register` (`name`, `phone`, `cnic`, `password`, `address`)
            VALUES ('$name', '$phone', '$cnic', '$password', '$address')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data inserted successfully";
        header ("location: user-login.php");
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

.voter {
    background-color: lightgrey;
    margin-top: -200px;
    min-height: 603px;
}

#voter {
    border: none;
    outline: none;
}

.voter-register {
    text-align: center;
    margin-top: 200px;
    min-height: 320px;
    padding-top: 125px;
}

.voter-register h2 {
    color: #fff;
    font-size: 16px;
    text-align: center;
    padding-top: 20px;
    font-family: 'oswald', sans-serif;
}

.voter-part {
    margin-top: 20px;
}

.voter-part label {
    color: #fff;
}

.voter-part input {
    padding: 3px 5px;
    outline: none;
    border: none;
}

/* .voter-register-btn {
    margin-top: 15px;
}

.voter-register-btn a {
    color: #fff;
    background-color: purple;
    text-decoration: none;
    border: none;
    padding: 5px 19px;
}

.voter-register-btn a:hover {
    background-color: red;
} */

.register {
    display: flex;
    justify-content: center;
    padding-top: 18px;
}

.register a {
    text-decoration: none;
    color: #fff;
    padding-left: 6px;
    border: none;
    outline: none;
}

.register a:hover {
    color: yellow;
}

.register p {
    color: #fff;
    font-size: 16px;
    text-align: center;
    font-family: 'oswald', sans-serif;
}

.voter-part form {
    display: flex;
    margin-left: 560px;
}

.admin-btn {
    display: flex;
    justify-content: center;
    margin-top: 15px;
}

.admin-register-btn a {
    color: #fff;
    background-color: green;
    text-decoration: none;
    border: none;
    outline: none;
    padding: 5px 19px;
    margin-left: 38px;
}

.admin-register-btn a:hover {
    background-color: gray;
}

.admin-register-btn {
    width: 11%;
}

.admin-login-btn a {
    color: #fff;
    background-color: green;
    text-decoration: none;
    border: none;
    outline: none;
    padding: 5px 19px;
    margin-left: -45px;
}

.admin-login-btn {
    width: 9%;
}

.admin-login-btn a:hover {
    background-color: gray;
}

/* .register-btn a {
    color: #fff;
    background-color: green;
    text-decoration: none;
    border: none;
    outline: none;
    padding: 5px 12px;
    margin-left: -30px;
}

.register-btn a:hover {
    background-color: gray;
} */

.error-message {
    color: red;
    }

.voter h2 {
    color: #000;
    margin-top: -100px;
}

</style>
<body>
<div class="header-section">
        <h1>Voting System</h1>
    </div>
    <div class="voter">
        <div class="voter-register">
            <div class="head">
                <h2>Registration</h2>
            </div>
            <!-- <form action="../api/register.php" method="POST" name="myForm" onsubmit="return validation()" onsubmit="data()"> -->
            <form action="" method="POST" name="myForm" onsubmit="return data()" onsubmit="validation()">
            <div class="voter-part">    
            <label for="" style="color: #000; font-weight: 600; margin-left: -33%;">Name:</label>
            <br>    
            <input type="text" placeholder="Enter your Name" style="width: 36%; margin-top: 5px;" name="name" name="name" />  
            <br>    
            <br>   
            <label for="" style="color: #000; font-weight: 600; margin-left: -28%; margin-top: 5px;">Phone Number:</label>  
            <br>  
        <input type="text" placeholder="Enter your valid Phone Number" id="a1" style="width: 36%; margin-top: 5px;" name="phone" />
        <br>   
        <br> 
        <label for="" style="color: #000; font-weight: 600; margin-left: -34%; margin-top: 5px;">CNIC:</label>
        <br>
        <input type="int" placeholder="Enter your valid CNIC Number" id="e1" style="width: 36%; margin-top: 5px;" name="cnic" value="346036655055925" />
        <br>
        <br> 
        <label for="" style="color: #000; font-weight: 600; margin-left: -31%; margin-top: 5px;">Password:</label>
        <br>
        <input type="password" placeholder="Enter your valid Password" id="b2" style="width: 36%; margin-top: 5px;" name="password" value="casting" />
        <br>
        <br> 
        <label for="" style="color: #000; font-weight: 600; margin-left: -26%; margin-top: 5px;">Confirm Password:</label>
        <br>
        <input type="password" placeholder="Enter your valid Password" id="b3" style="width: 36%; margin-top: 5px;" name="password" value="casting" />
        <br>
        <br> 
        <label for="" style="color: #000; font-weight: 600; margin-left: -32%; margin-top: 5px;">Address:</label>
        <br> 
        <input type="text" style="width:36%; margin-top: 5px;" placeholder="Enter your Address" id="d1" name="address" />
        <br>
        <br>      
        <br>
        <input type="submit" name="registerbtn" value="Register">
        <br>
    </div>  
            </form>

        </div>      
    </div>
</body>
<script>
function data(){
    var a=document.getElementById("a1").value;
    var b=document.getElementById("b2").value;
    var b=document.getElementById("b3").value;
    // var c=document.getElementById("c1").value;
    var d=document.getElementById("d1").value;
    var e=document.getElementById("e1").value;
    if(a==""||b==""||d==""||e==""){
    alert ("All fields are mandatory");
    return false;
}
    else if(a.length<11||a.length>11){
    alert ("Phone Number should be of 11 digits ! Please Enter Valid Phone Number");
    return false;
}
    else if(isNaN(a)){
    alert ("Only Numbers are allowed ! Please Enter Valid Number");
    return false;
}
    else if(e.length<15||e.length>15){
    alert ("CNIC Number should be of 15 digits ! Please Enter Valid CNIC Number");
    return false;
}
    else if(isNaN(e)){
    alert ("Only Numbers and symbols are allowed ! Please Enter Valid CNIC Number");
    return false;
}
    else if(b.length<7||b.length>7){
    alert ("Password should be of 7 characters in which 7 lowercase letters ! Please Enter Valid Password");
    return false;
}
    // else if(c.length<10||c.length>10){
//     alert ("Name should be of 10 letters ! Please Enter Valid Name");
//     return false;
// }
    else if(isNaN(c)){
    alert ("Only letters are allowed ! Please Enter Valid Name");
    return false;
}
    else if(d.length<15||d.length>15){
    alert ("Address should be of 15 letters ! Please Enter Valid Address");
    return false;
}
    else if(isNaN(d)){
    alert ("Only letters are allowed ! Please Enter Valid Address");
    return false;
}
    else {
    return true;
}
}
</script>

</html>


