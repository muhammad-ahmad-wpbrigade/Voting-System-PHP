<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "crud";

 // Create Connection
 $conn = new mysqli($servername,   $username,   $password,  $dbname);

$id = "";
$name = "";
$address = "";
$phone = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET') {
    // GET Method: Show data of candidate
    if( !isset($_GET["id"]) ) {
    }
    // $id = $_GET["id"];
    // Read row of selected vote from database table
    $sql = "SELECT * FROM vote WHERE id=$id";
    // $result = $conn->query($sql);
    // $row = $result->fetch_assoc();
    // if (!$row) {
    // header("location: /crud/index.php");
    // exit;
    // }
    // $name = $row["name"];
    // $address = $row["address"];
    // $phone = $row["phone"];
}
else {
    // POST Method: Update data of candidate
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone= $_POST['phone'];
}


    do {
        if ( empty($id) || empty($name) || empty($address) || empty($phone) ) {
            // $errorMessage = "All fields are required";
            break;
        }
        $sql = "UPDATE vote";
        "SET name = '$name', phone = '$phone', address = '$address' ";
        "WHERE id = $id";
        $result = $conn->query($sql);
        if (!$result){
            $errorMessage = "Invalid Query: " . $conn->error;
            break;
        }
        $successMessage = "Candidate Updated Correctly";
        header("location: /crud/index.php");
        exit;
} while (true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<style>
    *{
        padding: 0;
        margin: 0;
    }

    #main-content {
        text-align: center;
        padding-top: 200px;
        background-color:  #1abc9c;
        color: #000;
        min-height: 441px;
    }
</style>

<body>
<?php include 'header.php'; ?>
<div id="main-content">
    <h2>New Candidate</h2>
    <br>
    <?php
    if ( !empty($errorMessage) ){
        echo "
        <strong>$errorMessage</strong>
        ";
    }
    ?>
    <form class="post-form" action="create.php" method="post">
    <input type="hidden" name="id" value="<?php echo '$id'; ?>"/>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <br>
        <div class="form-group">
            <label>Address:</label>
            <input type="text" name="address" value="<?php echo $address; ?>">
        </div>
        <br>
        <div class="form-group">
            <label>Phone:</label>
            <input type="text" name="phone" value="<?php echo $phone; ?>">
        </div>
        <?php
           if ( !empty($successMessage) ){
            echo "
            <strong>$successMessage</strong>
            ";
        }    
        ?>
          <br>
        <input class="submit" type="submit" value="Submit" style="margin-left: -5%;" />
    </form>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>


