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
</style>
<body>
<div class="header-section">
        <h1>Voting System</h1>
    </div>
    <div class="voter">
        <div class="voter-register">
            <div class="head">
                <h2>Add Candidate</h2>
            </div>
    <div class="voter-part">
        <input type="text" placeholder="Name" required/>      
        <input type="number" placeholder="CNIC" required/>
        <br>
        <br>
        <input type="text" placeholder="Symbol">
        <select name="position" id="position">
            <option value="position">MPA</option>
            <option value="position">MNA</option>
        </select>
        <br>
        <br>
        <input type="text" style="width: 26%;" placeholder="Address" required/>   
        <br>
        <br>
        <form action="/action_page.php">
            <p style="color: #fff; font-size: 12px; margin-top: 5px; font-family: 'oswald', sans-serif;">Upload Image</p>
            <input type="file" id="myFile" name="filename" required/>                    
          </form>
          <div class="add-btn">
            <a href="#">Add+</a>
          </div> 
    </div>  
        </div>      
    </div>
</body>
</html>