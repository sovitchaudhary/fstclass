<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Multiplication</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <center>
    <h3>Multiplication Table</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Enter Number: 
    <input type="number" name="number">
    <br>
    <br>
    <input type="submit" name="submit" value="Generate Table">
    <br>
    <br>
    <input type="submit" name="clear" value="Clear Table">
   </form>

   <?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["clear"])){
    //clear table
    //echo"<p>Table cleared</p>";
   }elseif(isset($_POST["submit"])){
    //Generate Multiplication Table
    $number = $_POST["number"];
    echo"<h3>Multiplication Table for $number</h3>";
    echo"<table>";
    for($i=1;$i<=10;$i++){
        echo"<tr>";
        echo"<td>$number</td>";
        echo"<td>x</td>";
        echo"<td>$i</td>";
        echo"<td>=</td>";
        echo"<td>".($number*$i)."</td>";
        echo"<tr>";
    }
    echo"</table>";
   }
}
?>
</center>
</body>
</html>