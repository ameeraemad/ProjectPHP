<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "shopping1";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);
// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
} else
    echo "";
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name1'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];


    $query = "update product set name='" . $name . "',type='" . $type . "',price='" . $price . "',discount='" . $discount . "' where id=" . $id;

    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
<html>
<head>
    <title>Update Employee Data</title>
    <style>
        .header {
            background: #6a6e71;
            color: darksalmon;
            text-align: center;
            width: 102%;
            height: 87px;
            padding-top: 23px;
            margin-left: -7px;
            margin-top: -27px;
        }
        #add {
            width: 390px;
            padding: 63px;
            border: 5px solid #6A6E71;
            margin: 21px auto;
        }
        .c {
            margin-top:15px;
        }
        .input {
            padding: 8px;
            width: 200px;
            border: #A3C3E7 1px solid;
            border-radius: 4px;
        }
        .button {
            background: darksalmon;
            border: 0;
            padding: 8px 20px;
            border-radius: 4px;
            color: #FFF;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>Update Product</h1>
</div>
<center>
<form method="post" id="add">
    <div class="c">
        <div><label>ID :</label></div>
        <input type="text" name="id" class="input" ><br><br></div>

    <div><label>Name :</label></div>
    <div class="c">
        <input type="text" name="name1" class="input" ><br><br></div>

    <div><label>Type :</label></div>
    <div class="c">
        <input type="text" name="type" class="input"><br><br></div>

    <div><label>Price :</label></div>
    <div class="c">
        <input type="text" name="price" class="input" ><br><br></div>

    <div><label>Discount :</label></div>
    <div class="c">
        <input type="text" name="discount" class="input" ><br><br></div>
    <div class="c">
        <input type="submit" name="update" value="Update" class="button"></div>
    <br>
    <br>
    <a href="AddControl.php">Back TO Admin</a>
</form>
    </center
</body>
</html>