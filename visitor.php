<?php
include 'connect.php';

if (isset($_POST['votebtn'])) {
    $name = $_POST['name'];
    $votes = $_POST['votes'];

    // Using prepared statement to prevent SQL injection
    $sql = "INSERT INTO `visitor` (`name`, `votes`)
            VALUES ('$name', '$votes')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data inserted successfully";
        header ("location: visitor.php");
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
    background-color: lightgrey;
    margin-top: -200px;
    min-height: 603px;
}

.visitor-login {
    text-align: center;
    margin-top: 200px;
    min-height: 180px;
    padding-top: 150px;
}

.visitor-login h2 {
    color: #fff;
    font-size: 16px;
    text-align: center;
    padding-top: 20px;
    font-family: 'oswald', sans-serif;
    margin-top: -150px;
}

.visitor-1 {
    display: flex;
}

.visit-1 {
    border: 1px solid gray;
    background-color: gray;
    width: 170px;
    min-height: 160px;
    margin-left: 350px;
}

.pic-1 img {
    width: 30%;
    margin-top: 35px;
}

.visit-2 {
    border: 1px solid gray;
    background-color: gray;
    width: 170px;
    min-height: 160px;
    margin-left: 350px;
}

.pic-2 img {
    width: 30%;
    margin-top: 35px;
    min-height: 60px;
}

.visitor-2 {
    display: flex;
}

.visit-3 {
    border: 1px solid gray;
    background-color: gray;
    width: 170px;
    min-height: 160px;
    margin-left: 350px;
    margin-top: 30px;
}

.pic-3 img {
    width: 30%;
    margin-top: 35px;
}

.visit-4 {
    border: 1px solid gray;
    background-color: gray;
    width: 170px;
    min-height: 160px;
    margin-left: 350px;
    margin-top: 25px;
}

.pic-4 img { 
    min-height: 100px; 
    width: 30%;
    margin-top: 35px;
}

.content img {
    width: 20%;
    margin-top: 15px;
}

.content p {
    font-size: 12px;
}

.visit-1 {
    border: 4px solid green;
    min-height: 240px;
}

.visit-2 {
    border: 4px solid red;
    min-height: 240px;
}

.visit-3 {
    border: 4px solid red;
    min-height: 260px;
}

.visit-4 {
    border: 4px solid red;
    min-height: 260px;
}

label {
    font-weight: bold;
}

</style>
<body>
<div class="header-section">
        <h1>Voting System</h1>
    </div>
    <!-- Visitor just see who is winning and who has the most votes -->
    <div class="visitor">
        <div class="visitor-login">
            <div class="head">
                <h2>Visitor</h2>
            </div>
            <div class="visitor-1">
                <div class="visit-1">
                    <div class="pic-1">
                        <img src="assets/Images/khan.png" alt="Khan Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/bat.png" alt="bat icon">                     
                    </div>
                    <!-- <input type="submit" value="Votes" style="padding: 2px 10px; outline: none; margin-top: 15px;" onclick="checkVotes1()" id="a1" name="votebtn" />
                    <button onclick="updateResults()">Check Results</button> -->
                    <br>
                    <button onclick="castVote('PTI')">Votes</button>
            <button onclick="updateResults()">Check Results</button>
                </div>
                <div class="visit-2">
                    <div class="pic-2">
                        <img src="assets/Images/siraj-ul-haq.png" alt="Siraj Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/jammat-e-islami.png" alt="jammat-e-islami icon">                     
                    </div>
                   <!-- <input type="submit" value="Votes" style="padding: 2px 10px; outline: none; margin-top: 15px;" onclick="checkVotes2()" id="a2" name="votebtn" />
                   <button onclick="updateResults()">Check Results</button> -->
                   <br>
                   <button onclick="castVote('JMI')">Votes</button>
                <button onclick="updateResults()">Check Results</button>
</div>
            </div>
            <div class="visitor-2">
                <div class="visit-3">
                    <div class="pic-3">
                        <img src="assets/Images/nawaz.png" alt="Nawaz Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/lion.png" alt="lion icon">                      
                    </div>
                    <!-- <input type="submit" value="Votes" style="padding: 2px 10px; outline: none; margin-top: 15px;" onclick="checkVotes3()" id="a3" name="votebtn" />                          
                    <button onclick="updateResults()">Check Results</button> -->
                    <br>
                    <button onclick="castVote('PMLN')">Votes</button> 
                <button onclick="updateResults()">Check Results</button>
                </div>
                <div class="visit-4">
                    <div class="pic-4">
                        <img src="assets/Images/bilawal.png" alt="Bilawal Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/arrow.png" alt="arrow icon">                      
                    </div>
                 <!-- <input type="submit" value="Votes" style="padding: 2px 10px; outline: none; margin-top: 15px;" onclick="checkVotes4()" id="a4" name="votebtn" /> -->         
                <br>
                <button onclick="castVote('PPP')">Votes</button>
                <button onclick="updateResults()">Check Results</button> 
            </div>
            </div>
        </div>
    </div>
    </div>
    <script>
    var votes = {
      PTI: 5000,
      JMI: 4000,
      PMLN: 1000,
      PPP: 2000
    };

    function castVote(party) {
      votes[party]++;
      updateResults();
    }

    function updateResults() {
      var maxVotes = Math.max(...Object.values(votes));
      var winner = Object.keys(votes).find(party => votes[party] === maxVotes);

      var resultMessage;
      if (winner) {
        resultMessage = winner + " is winning with " + maxVotes + " votes" + " and the most votes are PTI";
      } else {
        resultMessage = "No clear winner yet.";
      }

      alert(resultMessage);
    }

  </script>
</body>
</html>




