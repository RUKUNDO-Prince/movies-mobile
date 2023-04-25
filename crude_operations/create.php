<?php include 'conn.php'; ?>
<?php
    if (isset($_POST['submit'])) {
        $fname = htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $gender = htmlspecialchars($_POST['gender']);

        $result = $conn -> query("SELECT * FROM users WHERE fname='$fname' AND lname='$lname' AND email='$email' AND password='$password'");
        if (!$result) {
            echo "Error: " . $conn -> error;
            exit();
        }

        if ($result -> num_rows > 0) {
            session_start();
            $_SESSION["name"] = $fname;
            echo 'Hello ' . $_SESSION["name"];
        }
    }
?>