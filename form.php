<?php
// include "connection.php";
//insert-data.php
include "connection.php";
if (isset($_POST["submit"])) {
    // echo "<pre>";
    // print_r($_POST);  
$uname = $_POST['uname'];
$email = $_POST['email'];
$mnumber = $_POST['mnumber'];
$address = $_POST['address'];
$state = $_POST['state'];
$pin = $_POST['pin'];

$insert=mysqli_query($conn,"INSERT INTO `insertdata`(`name`, `email`, `mnumber`, `address`, `state`, `pin`, `create_on`)
 VALUES('$uname','$email','$mnumber','$address','$state','$pin', NOW())"); 

if ($insert) {
    $msg="Data inserted sucessfully";
}
else {
    $msg ="Something Error ,Try after sometime!";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDE Operation in Php MYSQLi</title>
    <style type="text/css">
        *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: Verdana,sans-serif;
        }
        body{
                width: 100%;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #5d6b7d;

        }
        .container{
            max-width: 500px;
            width: 100%;
            background-color: #ffff;
        }
        .container form{
            width: 100%;
            padding: 30px;
        }
        .container form .data-insert{
            width: 100%;
            padding: 12px 10px;
            outline: none;
            border: 1px solid #111;
            margin: 8px 0px;
        }

        .container form .sub_btn{
            width: 100%;
            padding: 10px,30px;
            background-color: red;
            color: #ffff;
            font-size: 1em;
             outline: none;
             border: 0;
             cursor: pointer;
        }
        .container h1{
            display: block;
            text-align: center;
            padding: 15px 10px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1> Data Insert</h1>
    <form method="post" action="">
        <input type="text" name="uname" placeholder="Enter your name"class="data-insert">
        <input type="email" name="email" placeholder="Enter your email"class="data-insert">
        <input type="text" name="mnumber" placeholder="Enter your mobile number"class="data-insert">
        <input type="text" name="address" placeholder="Enter your address"class="data-insert">
        <input type="text" name="state" placeholder="Enter your state"class="data-insert">
        <input type="text" name="pin" placeholder="Enter your pin"class="data-insert">

        <input type="submit" name="submit" class="sub_btn" value="Submit">
        <br>  
           <span><?php echo $msg; ?></span>  
    </form>
    </div>
</body>
</html>