<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    // Connect Database
    $con = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
   // Select data
   $sql = "SELECT * FROM vote JOIN record";
   $result = mysqli_query($con, $sql) or die("Query Unsuccessful...");
   if(mysqli_num_rows($result)> 0) {
}
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        }
            ?>
            <tr>
                <td>1</td>
                <td>Ali</td>
                <td>Model Town</td>
                <td>9876543210</td>              
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Daud</td>
                <td>Punjab</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Hassan</td>
                <td>Kashmir Road</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Javad</td>
                <td>Gujrat</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ahmad</td>
                <td>Model Town</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php 
            ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>


