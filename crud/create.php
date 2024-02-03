<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud";

    // Create Connection
    $conn = new mysqli($servername,   $username,   $password,  $dbname);
$name = "";
$address = "";
$phone = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone= $_POST['phone'];

    do {
        if ( empty($name) || empty($address) || empty($phone) ) {
            $errorMessage = "All fields are required";
            break;
        }

    // add new candidate to database
    $sql = "INSERT INTO vote (name, address, phone) " ;
    "VALUES ('$name','$address','$phone')";
    // $result = $conn->query($sql);
    // if (!$result) {
    //     $errorMessage = "Invalid Query: " . $conn->error;
    //     break;
    // }
    $name = "";
    $address = "";
    $phone = "";

    $successMessage = "candidate added correctly";
    // header("location: /crud/index.php");
    // exit;

    } while (false);
}
?>

<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
<div id="main-content" style="background-color: #1abc9c;">
    <h2>Add New Candidate</h2>
    <?php
    if ( !empty($errorMessage) ){
        echo "
        <strong>$errorMessage</strong>
        ";
    }
    ?>
    <form class="post-form" action="create.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" value="<?php echo $address; ?>">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" value="<?php echo $phone; ?>">
        </div>
        <?php
           if ( !empty($successMessage) ){
            echo "
            <strong>$successMessage</strong>
            ";
        }    
        ?>
        <input class="submit" type="submit" value="Submit" />
    </form>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>





