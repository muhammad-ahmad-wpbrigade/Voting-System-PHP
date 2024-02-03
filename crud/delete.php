<?php include 'header.php'; ?>
<div id="main-content" style="background-color: #1abc9c;">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" value="4"/>
        </div>
        <a href="delete-inline.php">Delete</a>
        <!-- <input class="submit" type="submit" name="deletebtn" value="Delete" /> -->
    </form>
</div>
</div>
</body>
</html>

<style>
    .post-form a {
        color: #000;
        background-color: lightgray;
        padding: 5px 10px; 
        text-transform: uppercase; 
        text-decoration: none;
        text-align: center;
        border-radius: 5px;
        margin-left: 190px;
    }
</style>

<?php
// Create connection
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$userId = 1;
// Delete data
$sql = "DELETE FROM users WHERE id=$userId";
// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }
// Close connection
$conn->close();
?>






