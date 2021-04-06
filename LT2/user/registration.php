<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <!-- <link rel="stylesheet" type="text/css" href="../styles/user_reg.css"> -->
</head>

<style>
    form {
        max-width: 1400px;
        margin: auto;
        border: 5px solid violet;
        padding-top: 10px;
        margin-top: 30px;
        border-radius: 30px;
        padding: 40px;
    }

    .btn {
        max-width: 120px;
        margin: auto;

    }
</style>

<body style="background-image: url('../images/MegaTron.jpg')">


    <div class="container-fluid reg-form">
        <form action="" method="post" enctype="multipart/form" role="form" class="form-horizontal">
            <center>
                <h2 style="margin-bottom:20px">Register as User</h2>
            </center>
            <hr>
            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">First Name</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="first_name" class="form-control" required>
                </div>


                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Middle Name</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="middle_name" class="form-control">
                </div>


                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Last Name</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="last_name" class="form-control" required>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">City</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="city" class="form-control" required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">State</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="state" class="form-control" required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">ZipCode</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="zipcode" class="form-control" required>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Gmail</label>
                </div>
                <div class="col-sm-2">
                    <input type="email" id="firstName" name="user_email" class="form-control" required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Confirm Gmail</label>
                </div>
                <div class="col-sm-2">
                    <input type="email" id="firstName" name="user_email1" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Mobile Number</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="user_phone" class="form-control" required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Alternate Mobile Number</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" id="firstName" name="user_phone1" class="form-control">
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Date of Birth</label>
                </div>

                <div class="col-sm-2">
                    <input type="date" id="firstName" name="user_birthday" class="form-control" required>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Password</label>
                </div>
                <div class="col-sm-2">
                    <input type="password" id="firstName" name="user_pass" class="form-control" required>
                </div>

                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Confirm Password</label>
                </div>
                <div class="col-sm-2">
                    <input type="password" id="firstName" name="user_pass1" class="form-control" required>
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label for="firstName" class="control-label">Bidata</label>
                </div>

                <div class="col-sm-8">
                    <textarea name="biodata" id="" cols="75" rows="8"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block" name="user_sign_up">Register</button>
            <?php include("insert_new_user.php"); ?>
        </form>

        <center style="font-size:18px;">
            <p>Aleardy have an account <a href="user_login.php">Click Here</a></p>
        </center>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>