<?php
include 'connect.php';

if (isset($_POST[''])) {
    $candidatename = $_POST['candidatename'];
    $partyname = $_POST['partyname'];
    $partysymbol = $_POST['partysymbol'];

    // Using prepared statement to prevent SQL injection
    $sql = "INSERT INTO `candidates` (`candidate name`, `party name`, `party symbol`)
            VALUES ('$candidate name', '$party name', '$party symbol')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data inserted successfully";
        header ("location: voter-login.php");
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

.visitor {
    background-color: lightgray;
    margin-top: -200px;
    min-height: 603px;
}

.visitor-login {
    text-align: center;
    margin-top: 200px;
    min-height: 180px;
    padding-top: 60px;
}

.visitor-login h2 {
    color: #fff;
    font-size: 16px;
    text-align: center;
    padding-top: 20px;
    font-family: 'oswald', sans-serif;
    margin-top: -50px;
}

.visitor-1 {
    display: flex;
}

.visit-1 {
    border: 4px solid #000;
    background-color: gray;
    width: 170px;
    min-height: 220px;
    margin-left: 350px;
}

.pic-1 img {
    width: 40%;
    margin-top: 15px;
}

.btn-1 a {
    text-decoration: none;
    color: #fff;
    padding: 3px 19px;
    background-color: green;
    text-transform: uppercase;
}

.btn-1 a:hover {
    background-color: lightgrey;
}

.visit-2 {
    border: 4px solid #000;
    background-color: gray;
    width: 170px;
    min-height: 220px;
    margin-left: 350px;
}

.pic-2 img {
    width: 50%;
    margin-top: 12px;
    min-height: 60px;
}

.btn-2 a {
    text-decoration: none;
    color: #fff;
    padding: 3px 19px;
    background-color: green;
    text-transform: uppercase;
}

.btn-2 a:hover {
    background-color: lightgrey;
}

.visitor-2 {
    display: flex;
}

.visit-3 {
    border: 4px solid #000;
    background-color: gray;
    width: 170px;
    min-height: 250px;
    margin-left: 350px;
    margin-top: 30px;
}

.pic-3 img {
    width: 40%;
    margin-top: 25px;
}

.btn-3 a {
    text-decoration: none;
    color: #fff;
    padding: 3px 19px;
    background-color: green;
    text-transform: uppercase;
}

.btn-3 a:hover {
    background-color: lightgrey;
}

.visit-4 {
    border: 4px solid #000;
    background-color: gray;
    width: 170px;
    min-height: 250px;
    margin-left: 350px;
    margin-top: 30px;
}

.pic-4 img { 
    min-height: 125px; 
    width: 40%;
    margin-top: 25px;
}

.btn-1 {
    margin-top: 10px;
}

.btn-2 {
    margin-top: 10px;
}

.btn-3 {
    margin-top: 10px;
}

.btn-4 {
    margin-top: 12px;
} 

.content img {
    width: 20%;
}

.content p {
    font-size: 12px;
}

.btn-4 a {
    text-decoration: none;
    color: #fff;
    padding: 3px 19px;
    background-color: green;
    text-transform: uppercase;
}

.btn-4 a:hover {
    background-color: lightgrey;
}

.head a {
    text-decoration: none;
    color: #fff;
    padding: 3px 19px;
    background-color: lightslategray;
    text-transform: uppercase;
}

.head a:hover {
    background-color: grey;
}

#voteCount {
    font-size: 24px;
    text-align: center;
}

.button-option {
    text-align: center;
    margin-top: -47px;
}

.count {
    display: flex;
    margin-left: 400px;
}

</style>

<body>
<div class="header-section">
        <h1>Voting System</h1>
    </div>
    <div class="visitor">
        <div class="visitor-login">
            <div class="head">
                <h2>Voter</h2>
            </div>
    <div class="visitor-1">
    <div class="visit-1">
    <div class="pic-1">
    <img src="assets/Images/khan.png" alt="Khan Image">
    </div>
    <div class="content">
    <img src="assets/Images/bat.png" alt="bat icon">
    <p>A voter is a user who has the right to cast a vote</p>
    </div>
    <button id="voteButton1" onclick="castVote1()" style="margin-top: 5px; padding: 1px 7px;">Vote for PTI</button>
    </div>
    <div class="visit-2">
    <div class="pic-2">
    <img src="assets/Images/siraj-ul-haq.png" alt="Siraj Image">
    </div>
    <div class="content">
    <img src="assets/Images/jammat-e-islami.png" alt="jammat-e-islami icon">
    <p>A voter is a user who has the right to cast a vote</p>
    </div>
    <button id="voteButton2" onclick="castVote2()" style="margin-top: 5px; padding: 1px 7px;">Vote for JMI</button>
    </div>
            </div>
            <div class="visitor-2">
                <div class="visit-3">
                    <div class="pic-3">
                        <img src="assets/Images/nawaz.png" alt="Nawaz Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/lion.png" alt="lion icon">
                        <p>A voter is a user who has the right to cast a vote</p>
                    </div>
                    <button id="voteButton3" onclick="castVote3()" style="margin-top: 5px; padding: 1px 7px;">Vote for PMLN</button>
                </div>
                <div class="visit-4">
                    <div class="pic-4">
                        <img src="assets/Images/bilawal.png" alt="Bilawal Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/arrow.png" alt="arrow icon">
                        <p>A voter is a user who has the right to cast a vote</p>
                    </div>
    <button id="voteButton4" onclick="castVote4()" style="margin-top: 5px; padding: 1px 7px;">Vote for PPP</button>
            </div>
        </div>
    </div>
    </div>
    <script>
    let hasVoted = false;
    // Function to handle casting a vote
    function castVote1() {
    // Check if the voter has already cast a vote
    if (!hasVoted) {
    hasVoted = true;
    // Disable the button after the vote is cast
    document.getElementById("voteButton1").disabled = true;
    // You can display a confirmation message
    alert("Your vote has been cast successfully!");
    } else {
    // Display a message if the voter has already cast a vote
    alert("You have already cast your vote.");
    }
}
    // Function to handle casting a vote
    function castVote2() {
    // Check if the voter has already cast a vote
    if (!hasVoted) {
    hasVoted = true;
    // Disable the button after the vote is cast
    document.getElementById("voteButton2").disabled = true;
    // You can display a confirmation message
    alert("Your vote has been cast successfully!");
    } else {
    // Display a message if the voter has already cast a vote
    alert("You have already cast your vote.");
    }
}
    // Function to handle casting a vote
    function castVote3() {
    // Check if the voter has already cast a vote
    if (!hasVoted) {
    hasVoted = true;
    // Disable the button after the vote is cast
    document.getElementById("voteButton3").disabled = true;
    // You can display a confirmation message
    alert("Your vote has been cast successfully!");
    } else {
    // Display a message if the voter has already cast a vote
    alert("You have already cast your vote.");
    }
}
    // Function to handle casting a vote
    function castVote4() {
    // Check if the voter has already cast a vote
    if (!hasVoted) {
    hasVoted = true;
    // Disable the button after the vote is cast
    document.getElementById("voteButton4").disabled = true;
    // You can display a confirmation message
    alert("Your vote has been cast successfully!");
    } else {
    // Display a message if the voter has already cast a vote
    alert("You have already cast your vote.");
    }
}
</script>
</body>
</html>







