<?php
include 'header.php';
?>
<div id="main-content">
    <a href="create.php" style="color: #fff; background-color: grey; padding: 5px 10px; text-decoration: none; border-radius: 5px;">New Candidate</a>
    <h2 style="margin-top: 10px;">All Candidates Record</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
        //  while($row = mysqli_fetch_assoc($result)){
        // } 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud";

    // Create Connection
    $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
    // Check Connection
    if ($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }
    // Read all rows from database table
    $sql = "SELECT * FROM vote";
    $result = $conn->query($sql);
    // if (!result) {
    //     die("Invalid Query: " .  $conn->error);
    // }

    // Read data of each row
    while($row =  $result->fetch_assoc()) {
        echo "
        <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[address]</td>
        <td>$row[phone]</td>              
        <td>
            <a href='edit.php?id=$row[id]'>Edit</a>
            <a href='delete.php?id=$row[id]'>Delete</a>
        </td>
    </tr>
        ";
    }
        ?>
           
            <tr>
                <td>2</td>
                <td>Daud</td>
                <td>Punjab</td>
                <td>98765432105</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Hassan</td>
                <td>Kashmir Road</td>
                <td>98765432108</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Javad</td>
                <td>Gujrat</td>
                <td>98765432106</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ahmad</td>
                <td>Model Town</td>
                <td>98765432107</td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete.php'>Delete</a>
                </td>
            </tr>
            <?php 
         ?>
        </tbody>
    </table>
    <?php
    // else {
    //     echo "<h2>No record found</h2>";
    // }
    // Database Connection Close
    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>


