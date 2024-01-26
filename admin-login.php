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
    margin-top: 10px;
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
                    <h2>Admin Login</h2>
                </div>
        <div class="admin-part">
            <!-- <input type="number" placeholder="Enter mobile">
            <br>
            <br> -->
            <form action="" method="POST">
                <input type="text" 
                pattern="^[0-9]{5}-[0-9]{7}-[0-9]{1}$"
                title="Type CNIC Like 34603-6655055-9" required>
                <br>
                <br>
                <input type="password" placeholder="Enter Password" required/>
                <br>
                <br>                  
                <input type="submit" value="Submit" name="submit">
                <div class="admin-login-btn">                
                    <a href="add-candidate.php">Login Here</a>
                </div>  
            </form>
            </div> 
            </div>      
        </div>
</body>
<script>
    const password = document.getElementById("password");
    const errorMessage = document.getElementById("errorMessage");
    if(password.value.length < 8){
        errors.push("Password must be at least 8 characters");
    }
</script>
</html>



