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
    margin-top: -50px;
}

/* .visitor-part {
    margin-top: 20px;
}

.visitor-part input {
    padding: 3px 5px;
    outline: none;
} */

/* .visitor-login-btn a {
    color: #fff;
    background-color: purple;
    text-decoration: none;
    border: none;
    padding: 5px 19px;
}

.visitor-login-btn a:hover {
    background-color: aqua;
} */

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
    width: 40%;
    margin-top: 15px;
}

/* .btn-1 a {
    text-decoration: none;
    color: #fff;
    padding: 3px 19px;
    background-color: aqua;
}

.btn-1 a:hover {
    background-color: yellow;
} */

.visit-2 {
    border: 1px solid gray;
    background-color: gray;
    width: 170px;
    min-height: 160px;
    margin-left: 350px;
}

.pic-2 img {
    width: 50%;
    margin-top: 12px;
    min-height: 60px;
}

/* .btn-2 a {
    text-decoration: none;
    color: #fff;
    padding: 3px 19px;
    background-color: aqua;
}

.btn-2 a:hover {
    background-color: yellow;
} */

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
    width: 40%;
    margin-top: 25px;
}

/* .btn-3 a {
    text-decoration: none;
    color: #fff;
    padding: 3px 19px;
    background-color: aqua;
}

.btn-3 a:hover {
    background-color: yellow;
} */

.visit-4 {
    border: 1px solid gray;
    background-color: gray;
    width: 170px;
    min-height: 160px;
    margin-left: 350px;
    margin-top: 30px;
}

.pic-4 img { 
    min-height: 130px; 
    width: 40%;
    margin-top: 25px;
}

/* .btn-4 a {
    text-decoration: none;
    color: #fff;
    padding: 3px 19px;
    background-color: aqua;
}

.btn-4 a:hover {
    background-color: yellow;
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
    margin-top: 10px;
} */

.content img {
    width: 20%;
}

.content p {
    font-size: 12px;
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
            <!-- <div class="visitor-part">
        <input type="number" placeholder="Enter mobile">
        <br>
        <br> 
        <input type="text" placeholder="Winning Candidate">
        <br>
        <br>
        <input type="text" placeholder="All Candidate Votes">
        <br>
        <br>      
    </div>   -->
            <!-- <div class="visitor-login-btn">
        <a href="#">Submit</a>
    </div>    -->
            <div class="visitor-1">
                <div class="visit-1">
                    <div class="pic-1">
                        <img src="assets/Images/khan.png" alt="Khan Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/bat.png" alt="bat icon">
                        <p>Visitors can be users</p>
                    </div>
                    <!-- <div class="btn-1">
                <a href="#">Vote</a>
            </div> -->
                </div>

                <div class="visit-2">
                    <div class="pic-2">
                        <img src="assets/Images/siraj-ul-haq.png" alt="Siraj Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/jammat-e-islami.png" alt="jammat-e-islami icon">
                        <p>Visitors can be users</p>
                    </div>
                    <!-- <div class="btn-2">
                <a href="#">Vote</a>
            </div> -->
                </div>
            </div>

            <div class="visitor-2">
                <div class="visit-3">
                    <div class="pic-3">
                        <img src="assets/Images/nawaz.png" alt="Nawaz Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/lion.png" alt="lion icon">
                        <p>Visitors can be users</p>
                    </div>
                    <!-- <div class="btn-3">
                <a href="#">Vote</a>
            </div> -->
                </div>

                <div class="visit-4">
                    <div class="pic-4">
                        <img src="assets/Images/bilawal.png" alt="Bilawal Image">
                    </div>
                    <div class="content">
                        <img src="assets/Images/arrow.png" alt="arrow icon">
                        <p>Visitors can be users</p>
                    </div>
                    <!-- <div class="btn-4">
                <a href="#">Vote</a>
            </div> -->
                </div>
            </div>

        </div>
    </div>
    </div>
</body>
</html>