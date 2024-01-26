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
    background-color: lightgrey;
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

/* .voter-register-btn {
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
} */

.register {
    display: flex;
    justify-content: center;
    padding-top: 18px;
}

.register a {
    text-decoration: none;
    color: #fff;
    padding-left: 6px;
    border: none;
    outline: none;
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

.admin-btn {
    display: flex;
    justify-content: center;
    margin-top: 15px;
}

.admin-register-btn a {
    color: #fff;
    background-color: green;
    text-decoration: none;
    border: none;
    outline: none;
    padding: 5px 19px;
    margin-left: 38px;
}

.admin-register-btn a:hover {
    background-color: gray;
}

.admin-register-btn {
    width: 11%;
}

.admin-login-btn a {
    color: #fff;
    background-color: green;
    text-decoration: none;
    border: none;
    outline: none;
    padding: 5px 19px;
    margin-left: -45px;
}

.admin-login-btn {
    width: 9%;
}

.admin-login-btn a:hover {
    background-color: gray;
}

/* .register-btn a {
    color: #fff;
    background-color: green;
    text-decoration: none;
    border: none;
    outline: none;
    padding: 5px 12px;
    margin-left: -30px;
}

.register-btn a:hover {
    background-color: gray;
} */

.error-message {
      color: red;
    }

</style>
<body>
<div class="header-section">
        <h1>Voting System</h1>
    </div>
    <div class="voter">
        <div class="voter-register">
            <div class="head">
                <h2>Registration</h2>
            </div>
            <form action="../api/register.php" method="POST" id="myForm" onsubmit="return validateForm()">
            <div class="voter-part">
            <input type="text" id="name" name="name" pattern="[A-Za-z ]+" title="Please enter a valid name (only letters and spaces allowed)" required>     
        <input type="text" 
        pattern="^[0-9]{4}-[0-9]{7}$"
        title="Title Mobile Number Format Like 0346-5514368" required>
        <br>
        <br>
        <!-- <input id="phonenum" type="number" pattern="[+ 0-7] {12}" placeholder="Phone" max-length="12" required/> -->
        <input type="text" 
        pattern="^[0-9]{5}-[0-9]{7}-[0-9]{1}$"
        title="Type CNIC Like 34603-6655055-9" required>
        <!-- <input type="password" placeholder="Password" id="password" max-length="8" required/>
        <span id="addressError" class="error-message"></span>  -->
        <!-- <input type="text" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g" required> -->
        <input type="password" id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least 1 uppercase letter and 1 special character and 6 lowercase letters" required>
        <br>
        <br>
        <!-- <input type="address" style="width: 26%;" placeholder="Address" id="address" max-length="100" required/>  
        <span id="addressError" class="error-message"></span>  -->
        <input type="text" 
        pattern="^regexp=^[A-Za-z-0-99999999"
        title="Address should only contain lowercase letters. e.g. sialkot" required>
        <br>
        <br>      
        <input type="submit" value="Submit">
        <form action="/action_page.php">
            <p style="color: #fff; font-size: 12px; margin-top: 5px; font-family: 'oswald', sans-serif;">Upload Image</p>
            <input type="file" id="myFile" name="filename">
            <!-- <input type="submit"> -->
          </form>    
          <br>
        <label for="voter">Select your role:</label>
        <select name="voter" id="voter">
            <option value="voter">Voter</option>
            <option value="visitor">Visitor</option>
        </select>
    </div>  
    <!-- <div class="voter-register-btn">
        <a href="#">Register</a>
    </div>    -->
    <div class="admin-btn">
        <div class="admin-register-btn">
            <a href="voter-login.php">Voter</a>
            <!-- <a href="registration.php">Voter</a> -->
        </div> 
        <div class="admin-login-btn">
            <a href="visitor.php">Visitor</a>
        </div> 
        <!-- <div class="register-btn">
            <a href="registration.php">Register</a>
        </div>  -->
    </div>
            </form>

    <div class="register">
        <p>Already User?</p>
        <a href="admin-login.php">Login here</a>
    </div>
        </div>      
    </div>
</body>
<script>
//   function validateForm() {
//   var myForm = document.getElementById('myForm').value; 
//   var myForm = /^[A-Za-z]+$/;
//   if (name.trim() === '' || !myForm.test(name)) {
//     // Display an error message
//     document.getElementById('nameError').innerText = 'Please enter a valid name with only letters.';
//     return true;
//   }
//   document.getElementById('nameError').innerText = '';
//   return false;
// }
// function validateForm() {
// var password = document.getElementById('password').value;

// // Check if the password is empty or less than 8 characters
// if (password.trim() === '' || password.length == 8) {
//   document.getElementById('passwordError').innerText = 'Password must be at least 8 characters.';
//   return true;
// }
// document.getElementById('passwordError').innerText = '';
// return false;
// }
// function validateForm() {
//   var address = document.getElementById('address').value;
//   var address = /^[a-zA-Z0-9\s]+$/;
//   if (address.trim() === '' || !addressRegex.test(address)) {
//     document.getElementById('addressError').innerText = 'Please enter a valid address with alphanumeric characters and spaces.';
//     return false;
//   }
//   document.getElementById('addressError').innerText = '';
//   return true;
// }
</script>
</html>

