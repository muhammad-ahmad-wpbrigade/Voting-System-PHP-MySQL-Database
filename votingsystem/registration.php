<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <!-- <link rel="stylesheet" href="assets/css/admin-login.css"> -->
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'oswald', sans-serif;
}

.header-section {
    background-color: green;
    display: flex;
    padding-top: 11px;
    padding-bottom: 11px;
}

.header-section h1 {
    color: #fff;
    font-size: 16px;
    text-align: center;
    font-family: 'oswald', sans-serif;
    margin-left: 500px;
    font-weight: bold;
}

.header-section .back-btn {
    margin-left: 60px;
}

.header-section .back-btn a {
    color: #fff;
    background-color: lightslategray;
    text-decoration: none;
    outline: none;
    border: none;
    padding: 5px 19px;
}

.header-section .back-btn a:hover {
    background-color: lightgray;
}

.header-section .logout-btn {
    margin-left: 465px;
}

.header-section .logout-btn a {
    /* margin-left: 400px; */
    color: #fff;
    background-color: lightslategray;
    text-decoration: none;
    outline: none;
    border: none;
    padding: 5px 19px;
}

.header-section .logout-btn a:hover {
    background-color: lightgray;
}

.admin {
    min-height: 601px;
    margin-top: -100px;
    background-color: lightgray;
    /* margin-top: -200px;
    min-height: 603px; */
}

.admin-login {
    text-align: center;
    /* margin-top: 200px;
    min-height: 580px; */
    margin-left: 450px;
    width: 450px;
    /* background-color: rgb(0,0,0,0.7); */
    /* border: 1px solid rgb(0,0,0,0.7); */
    align-items: center;
    margin-top: 100px;
    min-height: 320px;
    padding-top: 70px;
}

.admin-login h2 {
    color: #fff;
    font-size: 16px;
    text-align: center;
    padding-top: 20px;
    font-family: 'oswald', sans-serif;
    margin-top: 100px;
}

.admin-part {
    margin-top: 20px;
}

.admin-part input {
    padding: 3px 5px;
    outline: none;
    border: none;
}

.admin-login-btn {
    margin-top: 20px;
}

.admin-login-btn a {
    color: #fff;
    background-color: green;
    text-decoration: none;
    border: none;
    padding: 5px 19px;
    outline: none;
    /* text-transform: uppercase; */
    font-weight: bold;
}

.admin-login-btn a:hover {
    background-color: gray;
}

.content img {
    width: 20%;
}

.content p {
    font-size: 12px;
}

form a {
    color: #fff;
    padding: 4px 10px;
    text-decoration: none;
    background-color: lightslategrey;
    border-radius: 10px;
    margin-left: 90px;
    }

</style>
<body>
        <div class="header-section">
            <div class="back-btn">
                <a href="index.php">Back</a>
            </div>   
            <div class="head">
                <h1>Voting System</h1>
            </div>            
            <div class="logout-btn">
                <a href="logout.php?link=logout">Logout</a>
            </div>       
        </div> 
   
        <div class="admin">
            <div class="admin-login">
                <div class="head">
                    <h2 style="color: #000;">Voter Login</h2>
                </div>
        <div class="admin-part">
            <!-- <input type="number" placeholder="Enter mobile">
            <br>
            <br> -->
            <!-- <form onsubmit="return data()" action="" method="POST"> -->
            <form action="user-login.php" method="POST" name="myForm" onsubmit="return data()">
            <label for="" style="color: #000; font-weight: 600">CNIC:</label>
            <input type="cnic" placeholder="Enter your valid CNIC Number" id="a1" style="width: 190px; margin-left: 55px;" value="346036655055925" />
                <br>
                <br>
                <label for="" style="color: #000; font-weight: 600">Password:</label>
                <input type="password" placeholder="Enter your valid Password" id="b1" name="password" style="width: 190px; margin-left: 18px;" value="casting" />             
                <br>
                <br>                  
                <!-- <input type="submit" value="Signin" name="submit" style="margin-left: 80px;"> -->
                  <a href="voter-login.php">Signin</a>
                <input type="submit" value="Register Now" name="submit">
                <!-- <a href="voter-login.php">Login</a> -->
                <div class="admin-login-btn">                
                </div>  
            </form>
            </div> 
            </div>      
        </div>
</body>
<script>
    // const password = document.getElementById("password");
    // const errorMessage = document.getElementById("errorMessage");
    // if(password.value.length < 8){
    //     errors.push("Password must contain at least 1 uppercase letter and 1 special character and 6 lowercase letters");
    // }
//     function data(){
//     var a=document.getElementById("a1").value;
//     var b=document.getElementById("b1").value;
//     if(a==""||b=="") {
//     alert ("All fields are mandatory");
//     return false;
// }
//     else if(a.length<15||a.length>15){
//     alert ("CNIC Number should be of 15 digits ! Please Enter Valid Number");
//     return false;
// }
//     else if(is_nan(a)){
//     alert ("Only Numbers and symbols are allowed ! Please Enter Valid CNIC");
//     return false;
// }
//     else if(b.length<8||b.length>8){
//     alert ("Password should be of 8 characters in which one uppercase letter and 1 special character and 6 lowercase letters ! Please Enter Valid Password");
//     return false;
// }
//     else {
//     return true;
// }
//     }
</script>
</html>



