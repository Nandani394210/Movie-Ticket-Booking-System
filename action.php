<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="black">
<?php 
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="movie_booking";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }
    // else{
    //     echo "Connected successfully.";
    // }
   
    if(isset($_POST['register']))
    {
        // echo $_POST['action'];

        $name=($_POST['name']);
        $moNo=($_POST['mo_no']);
        $email=($_POST['email']);
        $pass=($_POST['pass']);

        // echo $name."<br>";
        // echo $moNo."<br>";
        // echo $email."<br>";
        // echo $pass."<br>";

        $sql = "INSERT INTO users(name, mobile_no, email, pass) VALUES ('$name', '$moNo', '$email', '$pass')";

        $save = mysqli_query($conn, $sql);

        if($save){
            $_SESSION['message'] = "User Registered Successfully!";
            header("Location: index.php");
            exit();
            // echo "<h1 style='color:#fff;text-align:center; margin-top:100px; text-transform:uppercase;'>User <font color=green>Register</font> Successfully.";
        }
        else{
            echo "error";
        }
    }
    if(isset($_POST['login']))
    {
        $email=($_POST['email']);
        $pass=($_POST['pass']);

        $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: index.php");
        }
        else {
            echo "<h1 style='color:#fff;text-align:center; margin-top:100px; text-transform:uppercase;'><font color=red>Invalid</font> Email and Password.";
        }
        
    }

    if(isset($_POST['cancel']))
    {
        header("Location: index.php");
    }

    mysqli_close($conn);
?>
</body>
</html>
