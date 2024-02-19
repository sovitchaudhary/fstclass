<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
</head>

<body>
    <div class="container my-2">
        <div class="row bg-dark text-center">
            <div class="col">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <div class="container">
                        <a class="navbar-brand" href="">My Web</a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Others</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div>
                    <img class="img img-fluid" src="./logo.jpg" />
                </div>
                <div class="bg-dark text-white">
                    <h1 class="display-4">My Website</h1>
                </div>
            </div>
        </div>

        <div class="row bg-dark text-white">
            <div class="col-3">Aside1</div>
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <?php
                          $username="sovit";
                          $password="12345";
                          if(isset($_POST['submit'])){
                            $uname= $_POST['uname'];
                            $pass= $_POST['pass'];
                            if($username==$uname && $password==$pass)
                            {
                              echo ("<h2 class='text-sucess'>Welcome User $uname</h2>");
                            }else {
                              echo ("<h2 class='text-danger'>invalid username and password</h2>");
                            }
                          }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <h3>Login</h3>
                <form method="POST">
                    <div class="form-group mb-0">
                        <label>User Name<label>
                                <input class="form-control" type="text" name="uname" />
                    </div>

                    <div class="form-group m-0">
                        <label>Password<label>
                                <input class="form-control" type="password" name="pass" />
                    </div>
                    <input class="btn btn-danger" type="submit" name="submit" value="Login" />
                    <input class="btn btn-danger" type="reset" name="reset" value="Reset" />

                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
</body>

</html>