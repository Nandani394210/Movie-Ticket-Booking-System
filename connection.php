<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="movie_booking";

        $conn=mysqli_connect($servername,$username,$password,$dbname);

        if(!$conn){
            die("Connection failed".mysqli_connect_error());
        }
        else{
            echo "Connected successfully.";
        }

        /*$servername="localhost";
        $username="root";
        $password="";

        $conn=new mysqli($servername,$username,$password);

        if($conn->connect_error){
            die("Connection failed.".$conn->connect_error);
        }
        else{
            echo "Connected successfully";
        }*/
    ?>
</body>
</html>