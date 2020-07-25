<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="register.php">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1> Login Form </h1>
                <form action="validation.php" method="post">

                    <div class="form-group">

                        <label > Username </label>
                        <input type="text" name="user" class="form-control">

                    </div>

                    <div class="form-group">

                        <label > Password </label>
                        <input type="text" name="pswd" class="form-control">

                    </div>

                    <button type="submit" class="btn btn-primary"> Login </button>

                </form>

            </div>

            <div class="col-lg-6">
                <h1> Sign up </h1>
                <form action="register.php" method="post">

                    <div class="form-group">

                        <label > Username </label>
                        <input type="text" name="user" class="form-control">

                    </div>

                    <div class="form-group">

                        <label > Password </label>
                        <input type="text" name="pswd" class="form-control">

                    </div>

                    <button type="submit" class="btn btn-primary"> Signup </button>

                </form>

            </div>
        </div>
    </div>
</body>
</html>