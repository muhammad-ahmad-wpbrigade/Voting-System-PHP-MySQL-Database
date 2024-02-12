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

.home-page {
    /* display: flex;
    justify-content: center;
    min-height: 400px;
    padding-top: 200px; */
    background-color: lightgrey;
    min-height: 530px;
    padding-top: 69px;
}

.home-page a {
    color: #fff;
    background-color: green;
    text-decoration: none;
    border: none;
    outline: none;
    padding: 5px 19px;
    margin-left: 38px;
}

.home-page a:hover {
    background-color: gray;
}

.vote-image {
    margin-top: -30px;
}

.vote-image img {
    width: 25%;
    min-height: 300px;
    /* margin-top: 90px; */
    margin-left: 530px;
    margin-top: -30%;
}

.buttons {
    /* margin-left: 100px; */
    display: flex;
    justify-content: center;
    /* margin-top: 300px; */
    background-color: lightgrey;
    min-height: 400px;
    padding-top: 100px;
}

/* img {
    width: 50%;
    margin-left: 450px;
    margin-top: -10%;
} */

</style>

<body>
<div class="header-section">
        <h1>Voting System</h1>
    </div>
    <div class="home-page"> 
       <div class="buttons">
       <div class="admin">
        <a href="admin-login.php">Admin</a>
        </div>
        <div class="voter">
        <a href="registration.php">Voter</a>
        </div>
        <div class="visitor">
        <a href="visitor.php">Visitor</a>
        </div>
       </div>
       <div class="vote-image">
        <img src="assets/Images/vote.png" alt="Vote Image" >
        </div> 
    </div>
</body>
</html>

