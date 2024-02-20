<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="container">
            <h3>Registration form</h3>
            <form action="formhandle.php" method="post">

                <div class="search">
                    <input type="text" name="search" />
                    <input class="btn" type="button" value="search">
                </div>

                <table>
                    <tr>
                        <td><label for="UId">UId</label></td>
                        <td><input type="number" name="id" /></td>
                    </tr>
                    <tr>
                        <td><label for="Username">Username</label></td>
                        <td><input type="text" name="uname" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="Password">Password</label></td>
                        <td><input type="password" name="password" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="fullname">fullname</label></td>
                        <td><input type="text" name="fname" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td><input type="email" name="email" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="Mobile">Mobile</label></td>
                        <td><input type="number" name="mobile" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="Address">Address</label></td>
                        <td><textarea name="address" id="" cols="21" rows="2"></textarea></td>
                    </tr>
                    </table>

                        <div class="bt">
                            <td><input class="btn" type="submit" value="insert" name="insert" /></td>
                            <td><input class="btn" type="submit" value="Update" /></td>
                            <td><input class="btn" type="submit" value="Delete" /></td>
                            <td><input class="btn" type="submit" value="View All" /></td>
                        </div>

            </form>
        </div>
    </center>
</body>
</html>