<?php

?>


<!DOCTYPE html>
<html>
<head>

    <title></title>
    <style type="text/css">
        body {
            padding: 0px;
            margin: 0px;
            background-color: antiquewhite;
        }
        .header {
            background-color: #6a6e71;
            color: #25aae1;
            text-align: center;
            width: 100%;
            height: 85px;
            padding-top: 23px;
            margin-left: 0px;
            margin-top: -36px;
        }
        .member-dashboard {
            padding: 40px;
            background: #25AAE1;
            color: #555;
            border-radius: 4px;
            display: inline-block;
        }
        .member-dashboard a {
            color: #09F;
            text-decoration:none;
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
    </style>
</head>
<body>
<div>
    <center>
        <br><br>
        <div class="header">
            <h1>View Product</h1>
        </div>
        <br>
        <a href="AddControl.php" style="text-decoration: none; color: hotpink;
    ">Back To Admin</a>
        <br>
        <br><br><br>
        <table border="2"style="
    padding: 30px;">
            <tr>
                <th>Id</th>
                <th> Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Image</th>
                <th>discount</th>

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
                    <td><img src="<?php echo $row['image']; ?>"></td>
                    <td><?php echo $row['discount'];?></td>

                </tr>


                <?php
            }
            ?>
</div>
</table>
</center>
</body>
</html>