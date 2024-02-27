<?php
    // if (isset($_POST['insert'])) {
    //     $formres=<<<Test
    //         <table>
    //             <tr>
    //                 <td>uid</td>
    //                 <td>$_POST[id]</td>
    //             </tr>
    //             <tr>
    //                 <td>Username</td>
    //                 <td>$_POST[uname]</td>
    //             </tr>
    //             <tr>
    //                 <td>Password</td>
    //                 <td>$_POST[password]</td>
    //             </tr>
    //             <tr>
    //                 <td>fullName</td>
    //                 <td>$_POST[fname]</td>
    //             </tr>
    //             <tr>
    //                 <td>Email</td>
    //                 <td>$_POST[email]</td>
    //             </tr>
    //             <tr>
    //                 <td>Mobile</td>
    //                 <td>$_POST[mobile]</td>
    //             </tr>
    //             <tr>
    //                 <td>Address</td>
    //                 <td>$_POST[address]</td>
    //             </tr>
    //         </table>
    //     Test;
    //     echo $formres;
    // }
    $id=$_POST['userid'];
    $name=$_POST['uname'];



    if (isset($_POST['insert'])) {
        $conn=mysqli_connect("localhost","root","","newdb");
        if (!$conn) {
            exit();
        }
        // echo "Data inserted successfull";
        // mysql_select_db($conn,"newdb");
        
        $uid=$_POST["userid"];
        $username=$_POST["uname"];
        $pass=$_POST["password"];
        $fullname=$_POST["fname"];
        $txtemail=$_POST["email"];
        $mob=$_POST["mobile"];
        $add=$_POST["address"];

        $query1=<<<Iqry
        insert into users values($uid,'$username','$pass','$fullname','$txtemail','$mob','$add');
        Iqry;
        // $query1= "INSERT INTO `users`(`userid`, `uname`, `password`, `fname`, `email`, `mobile`, `address`) VALUES ($uid,'$username','$pass','$fullname','$txtemail','$mob','$add')";
        mysqli_query($conn,$query1) or die(mysqli_error($conn));
        mysqli_close($conn);

    }
?>