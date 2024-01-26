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


.buttons {
    display: flex;
    justify-content: center;
    /* margin-top: 300px; */
    background-color: lightgrey;
    min-height: 400px;
    padding-top: 200px;
}

.buttons a {
    color: #fff;
    background-color: green;
    text-decoration: none;
    border: none;
    outline: none;
    padding: 5px 19px;
    margin-left: 38px;
}

.buttons a:hover {
    background-color: gray;
}

</style>

<body>
<div class="header-section">
        <h1>Voting System</h1>
    </div>
    <div class="buttons">
        <div class="admin">
        <a href="admin-login.php">Admin</a>
        </div>
        <div class="voter">
        <a href="voter-login.php">Voter</a>
        </div>
        <div class="visitor">
        <a href="visitor.php">Visitor</a>
        </div>
        <div class="register">
        <a href="registration.php">Register</a>
        </div>
        <!-- <div class="add-candidate-page">
            <a href="add-candidate.php">Admin Pannel</a>
        </div> -->

    </div>
</body>
</html>