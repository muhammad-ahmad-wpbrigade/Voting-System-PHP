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
    padding-top: 125px;
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

.voter h2 {
    color: #000;
    margin-top: -100px;
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
            <!-- <form action="../api/register.php" method="POST" name="myForm" onsubmit="return validation()" onsubmit="data()"> -->
            <form action="register.html" method="POST" name="myForm" onsubmit="return data()" onsubmit="validation()">
            <div class="voter-part">    
            <label for="" style="color: #000; font-weight: 600; margin-left: -33%;">Name:</label>
            <br>    
            <input type="text" placeholder="Enter your Name" id="c1" style="width: 36%; margin-top: 5px;">  
            <br>       
            <label for="" style="color: #000; font-weight: 600; margin-left: -33%; margin-top: 5px;">Phone:</label>  
            <br>  
        <input type="text" placeholder="Enter your valid Phone Number" id="a1" style="width: 36%; margin-top: 5px;">
        <br>   
        <label for="" style="color: #000; font-weight: 600; margin-left: -34%; margin-top: 5px;">CNIC:</label>
        <br>
        <input type="int" placeholder="Enter your valid CNIC Number" id="e1" style="width: 36%; margin-top: 5px;">
        <br>
        <label for="" style="color: #000; font-weight: 600; margin-left: -31%; margin-top: 5px;">Password:</label>
        <br>
        <input type="text" placeholder="Enter your valid Password" id="b2" style="width: 36%; margin-top: 5px;">
        <br>
        <label for="" style="color: #000; font-weight: 600; margin-left: -32%; margin-top: 5px;">Address:</label>
        <br> 
        <input type="text" style="width:36%;" placeholder="Enter your Address" id="d1"  style="margin-top: 5px;">
        <br>
        <br>      
        <label style="color: #000; font-weight: 600">Image Upload:</label>   <br> <br>
        <input type="file" name="img_upload">  
        <br>
        <input type="submit" value="submit">
        <br>
        <label for="voter" style="color: #000;">Select your role:</label>
        <select name="voter" id="voter">
            <option value="voter">Voter</option>
            <option value="visitor">Visitor</option>
        </select>
    </div>  
    <div class="admin-btn">
        <div class="admin-register-btn">
            <a href="user-login.php">Voter</a>
        </div> 
        <div class="admin-login-btn">
            <a href="visitor.php">Visitor</a>
        </div> 
    </div>
            </form>
    <div class="register">
        <p style="color: #000;">Already User?</p>
        <a href="user-login.php" style="color: #000;">Login here</a>
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
    var b=document.getElementById("b2").value;
    var c=document.getElementById("c1").value;
    var d=document.getElementById("d1").value;
    var e=document.getElementById("e1").value;
    if(a==""||b==""||c==""){
    alert ("All fields are mandatory");
    return false;
}
    else if(a.length<11||a.length>11){
    alert ("Number should be of 11 digits ! Please Enter Valid Number");
    return false;
}
    else if(isNaN(a)){
    alert ("Only Numbers are allowed ! Please Enter Valid Number");
    return false;
}
    else if(e.length<15||e.length>15){
    alert ("CNIC Number should be of 15 digits ! Please Enter Valid CNIC Number");
    return false;
}
    else if(isNaN(e)){
    alert ("Only Numbers and dashses are allowed ! Please Enter Valid CNIC Number");
    return false;
}
    else if(b.length<8||b.length>8){
    alert ("Password should be of 8 characters in which one uppercase letter and 1 special character and 6 lowercase letters ! Please Enter Valid Password");
    return false;
}
    else if(c.length<10||c.length>10){
    alert ("Name should be of 10 letters ! Please Enter Valid Name");
    return false;
}
    else if(isNaN(c)){
    alert ("Only letters are allowed ! Please Enter Valid Name");
    return false;
}
    else if(d.length<15||d.length>15){
    alert ("Address should be of 15 letters ! Please Enter Valid Address");
    return false;
}
    else if(isNaN(d)){
    alert ("Only letters are allowed ! Please Enter Valid Address");
    return false;
}
    else {
    return true;
}
}
</script>
</html>



