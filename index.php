<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

   $query = "SELECT * FROM `product` WHERE CONCAT(`id`, `name`, `type`, `price`, `discount`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
else {
    $query = "SELECT * FROM `product`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "shopping1");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FinalProject</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .product {
            width:92%;
            margin:10px;
            padding:3px;
            background-color:#FFF;
            border:1px solid #CCC
        }
        .name {
            padding: 11px;
            width: 200px;
            border: #a3b5e7 3px solid;
            border-radius: 4px;
        }
        .send {
        background: #EC008C;
        border: 0;
        padding: 12px 20px;
        border-radius: 4px;
        color: #FFF;
        text-transform: uppercase;
        }

    </style>
</head>
<body>
<div class="header">
    <div class="slider">
        <div class="container">
            <div class="intro">
                <h2>Vereesa<br> FURNITURE SHOP</h2>
                <form action="Control%20Panel.php">
                    <button>Login as Admin</button></form>
            </div>
        </div>
    </div>
    <div class="navbar">
        <div class="container">
            <h2 class="fl-left">Welcome to our <span>online</span> store!</h2>

        </div>
    </div>
</div>


<div class="portfolio text-center">
    <div class="container">
        <h2>Intro</h2>
        <p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est, te usu virtute placerat. Purto brute disputando cu est.</p>
        <form action="index.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Enter To Search" class="name">
            <input type="submit" name="search" value="Filter" class="send"><br><br>
        <?php
        $link1 = mysqli_connect("localhost", "root", "", "shopping1");

        if ($link1 === false) {
            die("ERROR: Could not connect. "
                .mysqli_connect_error());
        }

        $sql = "SELECT * FROM product";
        $res = mysqli_query($link1, $sql);
        while ($row = mysqli_fetch_array($res)) {
            ?>


            <div class="product">
                <div><img src="<?php echo $row['image'];?>" >
                    <p><?php echo $row['id'];?></p>
                    <p><?php echo $row['name'];?></p>
                    <p><?php echo $row['type'];?></p>
                    <p><?php echo $row['price'];?></p>
                    <p><?php echo $row['discount'];?></p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<table border="5">
    <tr><th>ID</th> <th> Name </th> <th> Type </th> <th> Price </th><th> discount </th></tr>
    <?php while($row = mysqli_fetch_array($search_result)):?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['type'];?></td>
            <td><?php echo $row['price'];?></td>
            <td><?php echo $row['discount'];?></td>
        </tr>
    <?php endwhile;?>
</table><br><br>
    <div class="contact" style="background-color:gainsboro;">
    <div class="container" style="background-color: aliceblue;">
        <div class="info fl-left" >
            <h2 style="color: forestgreen;">Vereesa<br><span style="color:dimgrey;">FURNITURE SHOP</span></h2>
            <p>Shop the latest products right from your home .

                We have furniture supplies & accessories from top brands.</p>

        </div>

    </div>
</div>



<div class="footer">

    <div class="container">

        <span class="fl-left">Copyright &copy; 2019 Vereesa.All rights reserved</span>
        <ul>
            <li><i class="fa fa-facebook-square fa-lg"></i></li>
            <li><i class="fa fa-twitter-square fa-lg"></i></li>
            <li><i class="fa fa-linkedin-square fa-lg"></i></li>
            <li><i class="fa fa-google-plus-square fa-lg"></i></li>
        </ul>
    </div>
</div>

<!-- End Footer -->
</form>
</body>
</html>
