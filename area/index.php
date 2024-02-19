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
        <div class="box">
            <div class="heading">
                <p>1. Circle</p>
                <p>2. Rectangle</p>
            </div>
            <div class="input">
                <form action="" method="post">
                    <label for="num">Enter Your choice</label>
                    <input type="number" name="num" id="num" required>
                    <input type="submit" value="submit" name="submit">
                </form>
                <?php
                $number = $_POST['num'];

                if (isset($_POST['submit'])) {
                    switch ($number) {
                        case 1:
                ?>
                            <?php
                            $value1 = $_POST['radius'];
                            if (isset($_POST['result1'])) {
                                $c = $value1 * $value1;
                                $res = $c * 3.14;
                                
                            }
                            ?>
                            <div class='area'>
                                <form method="POST">
                                    <label for='radius'>Enter Radius:</label>
                                    <input type='number' name='radius' required />
                                    <input type='submit' name='result1' />
                                </form>
                                <div class='result'>
                                    <?php
                                        echo "<p>Radius of Circle: $value1</p>";
                                        echo "<p>Area of Circle: $res</p>";
                                    ?>
                                </div>
                            </div>
                        <?php
                            break;
                        case 2:
                        ?>
                            <div class='area'>
                                <?php
                                if (isset($_POST['result'])) {
                                    $length = $_POST['length'];
                                    $width = $_POST['width'];
                                    $result = $length * $width;
                                }
                                ?>
                                <form method='post'>
                                    <label for='length'>Length:</label>
                                    <input type='number' name='length' required /><br /><br>
                                    <label for='width'>Width:</label>
                                    <input type='number' name='width' required />
                                    <button type='submit' name='result'>Result</button>
                                </form>
                                <div class='result'>
                                    <?php echo "<p>Area of Rectangle: $result</p>"; ?>
                                </div>
                            </div>
                <?php
                            break;
                        default:
                            echo "inavlid number";
                    }
                }

                ?>
            </div>
        </div>
    </center>
</body>

</html>