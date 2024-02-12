<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
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
}

.admin-login {
    text-align: center;
    margin-left: 450px;
    width: 450px;
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
                    <h2 style="color: #000;">Admin Login</h2>
                </div>
        <div class="admin-part">
           
            <form action="home.php" method="POST" name="myForm" onsubmit="return data()">
            <label for="" style="color: #000; font-weight: 600">CNIC:</label>
                <input type="int" placeholder="Enter your valid CNIC Number" id="a1" style="width: 190px; margin-left: 55px;" name="cnic" value="123456789012345"/>
                <br>
                <br>
                <label for="" style="color: #000; font-weight: 600">Password:</label>
                <input type="password" name="password" placeholder="Enter your valid Password" value="fixed" id="b2" style="width: 190px; margin-left: 18px;" name="pw" />           
              <br>
                <br>                  
                <input type="submit" value="Login" name="submit">             
                <div class="admin-login-btn">                                
                </div>  
            </form>
            </div> 
            </div>      
        </div>
</body>
<script>
    function data(){
    // var a=document.getElementById("a1").value;
    var b=document.getElementById("b2").value;
    if(a==""||b==""){
    alert ("All fields are mandatory");
    return false;
}
    else if(b.length<5||b.length>5){
    alert ("Password should be of 5 characters in lowercase letters ! Please Enter Valid Password");
    return false;
}
//     else if(a.length<15||a.length>15){
//     alert ("CNIC Number should be of 15 digits ! Please Enter Valid CNIC Number");
//     return false;
// }
//     else if(is_nan(a)){
//     alert ("Only Numbers and dashses are allowed ! Please Enter Valid Number");
//     return false;
// }
    else {
    return true;
}
    }
</script>
</html>



