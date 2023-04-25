<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
</head>
<body>
    <form action="create.php" method="POST">
        First Name: <input type="text" name="fname"> <br>
        Last Name: <input type="text" name="lname"> <br>
        Email: <input type="email" name="email"> <br>
        Password: <input type="password" name="password"> <br>
        Gender: <input type="radio" name="gender">Male
                <input type="radio" name="gender">Female <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>