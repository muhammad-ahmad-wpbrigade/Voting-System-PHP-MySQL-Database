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
    background-color: lightgray;
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
    padding-top: 150px;
}

.voter-register h2 {
    color: #fff;
    font-size: 16px;
    text-align: center;
    padding-top: 20px;
    font-family: 'oswald', sans-serif;
    margin-top: -100px;
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

.voter-register-btn {
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
}

.register {
    display: flex;
    justify-content: center;
    padding-top: 18px;
}

.register a {
    text-decoration: none;
    color: #fff;
    padding-left: 6px;
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

#position {
    padding: 3px 5px;
    outline: none;
    border: none;
    width: 183px;
}

.add-btn {
    margin-top: 20px;
}

.add-btn a {
    color: #fff;
    background-color: green;
    text-decoration: none;
    border: none;
    outline: none;
    padding: 5px 19px;
}

.add-btn a:hover {
    background-color: gray;
}


.submit a {
    color: #fff;
    background-color: lightslategray;
    text-decoration: none;
    border: none;
    outline: none;
    padding: 1px 19px;
}

.submit a:hover {
    background-color: gray;
}

</style>
<body>
<div class="header-section">
    <h1>Voting System</h1>
    </div>
    <div class="voter">
    <div class="voter-register">
    <div class="head">
    <h2 style="color: #000;">Add Candidate</h2>
    </div>
    <form action="add-candidate.html" method="POST" name="myForm" onsubmit="return data()" onsubmit="return  validation()">
    <div class="voter-part">
        <label for="" style="color: #000; font-weight: 600; margin-left: -33%;">Name:</label>
        <br>
    <input type="text" placeholder="Enter your Name" id="a1" style="width: 36%; margin-top: 5px;">   
    <br>   
    <label for="" style="color: #000; font-weight: 600; margin-left: 15px; margin-left: -34%;">CNIC:</label>
    <br>
    <input type="text" placeholder="Enter your valid CNIC Number" id="a2" style="width: 36%; margin-top: 5px;"> 
        <br>
        <label for="" style="color: #000; font-weight: 600; margin-left: -33%;">Symbol:</label>
        <br>
        <input type="text" placeholder="Symbol" style="width: 36%; margin-top: 5px;">
        <br>
        <label for="" style="color: #000; font-weight: 600; margin-left: -32%;">Position:</label>
        <br>
        <select name="position" id="position" style="width: 37%; margin-left: 3px;">
        <option value="position">MPA</option>
        <option value="position">MNA</option>
        </select>
        <br>
        <label for="" style="color: #000; font-weight: 600; margin-left: -32%;">Address:</label>
        <br>
        <input type="text" style="width: 36%;" placeholder="Enter your Address" id="a3" style="margin-top: 5px;">   
        <br>
        <br>    
          <label style="color: #000; font-weight: 600">Image Upload:</label>   <br> <br>
        <input type="file" name="img_upload">  
        <br>
        </form> 
        <input type="submit" value="submit">
          <div class="add-btn">
            <a href="#">Add+</a>
          </div> 
    </div>  
        </div>      
    </div>
</body>
<script>
    var img = document.forms['myForm']['img_upload'];
    var validExt=["jpeg","png","jpg"];
    function validation(){
    if(img.value!=''){
    var img_ext=image.value.substring(img.value.lastIndexOf('.')+1);
    var result = validExt.includes(img_ext);
    if(result==false){
        alert("Selected file is not an image...");
        return false;
    }
    else {
        if(parseFloat(img.files[0].size/(1024*1024))>=3){
            alert("File size must be smaller than 3 MB. Current file size : " + parseFloat(img.files[0].size/(1024*1024)));
            return false;
        }
    }
    }
    else {
        alert("No image is selected...");
        return false;
    }
        return true;
}
function data(){
    var a=document.getElementById("a1").value;
    var b=document.getElementById("a2").value;
    var c=document.getElementById("a3").value;
    if(a==""||b==""||c==""){
    alert ("All fields are mandatory");
    return false;
}
    else if(a.length<10||a.length>10){
    alert ("Name should be in letters ! Please Enter Valid Name");
    return false;
}
    else if(isNaN(a)){
    alert ("Only letters are allowed ! Please Enter Valid Name");
    return false;
}
    else if(b.length<15||b.length>15){
    alert ("CNIC Number should be of 15 digits ! Please Enter Valid CNIC Number");
    return false;
}
    else if(isNaN(b)){
    alert ("Only Numbers and dashses are allowed ! Please Enter Valid CNIC Number");
    return false;
}
    else if(c.length<15||c.length>15){
    alert ("Address should be of 15 letters ! Please Enter Valid Address");
    return false;
}
    else if(isNaN(c)){
    alert ("Only letters are allowed ! Please Enter Valid Address");
    return false;
}
    else {
    return true;
}
}
</script>
</html>


