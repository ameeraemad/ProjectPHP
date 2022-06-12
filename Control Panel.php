<?php

session_start();
$host="localhost";
$username="root";
$password="";
$database="shopping1";

$conn = mysqli_connect($host,$username,$password,$database);

// Check connection

if (mysqli_connect_errno())

{
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();

}

if(isset($_POST["login"])) {
    $username=$_POST['username'];
    $password=($_POST['password']);
    $sql = "Select * from admin where UserName ='$username' and UserPassword ='$password'";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)) {
        $_SESSION["userid"]= $row["id"];
        if(!empty($_POST["remember"])) {
            setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
            setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
        } else {

            if(isset($_COOKIE["user_login"])) {

                setcookie ("user_login","");

            }

            if(isset($_COOKIE["userpassword"])) {

                setcookie ("userpassword","");

            }

        }

        header('location :AddControl.php');

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login as Admin</title>
    <style>
        body {
            padding: 0px;
            margin: 0px;
        }
        .header {
            background-color: #6A6E71;
            color: #A3C3E7;
            text-align: center;
            top: 0px;
            width: 100%;
            padding: 5px;
        }
       #login {
        width: 390px;
        padding: 63px;
        border: 5px solid #6A6E71;
           margin: 21px auto;

        }
        .input {
            padding: 8px;
            width: 200px;
            border: #A3C3E7 1px solid;
            border-radius: 4px;
        }
        .c {
            margin-top:15px;
        }
        .button {
            background: #EC008C;
            border: 0;
            padding: 8px 20px;
            border-radius: 4px;
            color: #FFF;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<center>
    <div class="header">
        <h1>Login As Admin</h1>
    </div>
    <div>
        <form action="AddControl.php" method="post" id="login">
            <div class="c">
                <div><label>Username</label></div>
                <div>
                    <input name="username" type="text" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" class="input">
                </div>
                <div class="c">
                    <div><label for="password">Password</label></div>

                    <div><input name="password" type="password" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>" class="input">
                    </div>

                    <div class="c">

                        <div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />
                            <label for="remember-me">Remember me</label>
                        </div>
                        <div class="c">
                            <div><input type="submit" name="login" value="Login" class="button"></span></div>
                        </div>
        </form>
    </div>
    <div>
</center>
</body>
</html>