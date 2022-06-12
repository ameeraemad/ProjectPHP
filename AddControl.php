<?php

?>


<!DOCTYPE html>
<html>
<head>

    <title></title>
    <style type="text/css">
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
        table{
            width: 90%;
            height: 300px;
            border-collapse: collapse;


        }
        td,th{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        a{
            color: firebrick;
        }

        body{
            background-color: antiquewhite;
        }


    </style>


</head>
<body>
<div>
    <div class="header">
        <h1>Control Panel</h1>
    </div><br><br><br>
    <center><br><br>

        <table border="2" style="
    padding: 30px;">
            <tr>
                <th>Id</th>
                <th> Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>discount</th>
                <th>Delete</th>
                <th>Update</th>

            </tr>

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

                <!-- populate table from mysql database -->

                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['discount'];?></td>
                    <td><a href="DeleteProduct.php?id=<?php echo $row['id'];?>" style="text-decoration: none;">DeleteProduct</a></td>
                    <td><a href="UpdateProduct.php" style="text-decoration: none;">UpdateProduct</a></td>
                </tr>


                <?php
            }
            ?>

</div>


</table>
<form action="AddProduct.php" method="post">
    <button style="font-size: xx-large;
    color: firebrick;
    cursor: pointer;
}">Add Product</button>

</form>  <br>
<form action="ViewProduct.php" method="post">
    <button style="font-size: xx-large;
    color: firebrick;
    cursor: pointer;
}">ViewProduct</button><br><br>
</form>
<a href="index.php" style="font-size: xx-large;
    text-decoration: none;" >Logout</a>
</center>


</body>
</html>