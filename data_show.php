<?php
    include "connection.php";
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $delete=mysqli_query($conn,"delete from insertdata where id ='$id'");
        if ($delete) {
            header("location:data_show.php");
            die();
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Show Data From Database in Table</title>
    <style type="text/css">
        *{ 
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Verdana,sans-serif;
        
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background-color: #5d6d7d;
        }
        table{
            border-collapse: collapse;
            color: #fff;
        }
        table th{
            background-color: red;
            padding: 8px 10px ;
            color: #fff;
        }

        table td{
            background-color: #f3f3f3   ;
            padding: 8px 10px ;
            color: #111;
        }
        .opt{
            background-color: orange;
            color: #fff;
            font-size: 1em;
            padding: 5px;
            text-decoration: none;
        }


    </style>
</head>
<body>
   <div class="container">
    <table border="1"cellpadding ="0">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Address</th> 
            <th>State</th>  
            <th>Pin Code</th> 
            <th>Operation</th>  
           
        </tr>
        <?php
        include "connection.php";
            $select= mysqli_query($conn,"select * from insertdata");
            $num =mysqli_num_rows($select);
            if ($num>0) {
                while ($result=mysqli_fetch_assoc($select)) {
                    echo"
                    <tr> 
                        <td> ".$result['id']."</td>
                        <td> ".$result['name']."</td>
                        <td> ".$result['email']."</td>
                        <td> ".$result['mnumber']."</td>
                        <td> ".$result['address']."</td>
                        <td> ".$result['state']."</td>
                        <td> ".$result['pin']."</td>
                            <td>
                            <a href='?id =".$result['id']." 'class ='opt'>Delete</a>
                            <a href='?id =".$result['id']." 'class='opt'>Edit/Update</a>
                        </td>
                    </tr>

                    ";
                }
            }
            
        ?>
    </table>
   </div> 
</body>
</html>