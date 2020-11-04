<?php
        // $connect = new mysqli('localhost', 'root', '', 'A017_DB');
        // $connect = new PDO(" mysql:host=localhost; dbname=A017_DB", 'root', '');
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");
        $sql = mysqli_select_db ($conn,'A017_DB') or die("unable to connect to database");
        $username = $_POST["username"];
        $password = $_POST["password"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $sql = "INSERT INTO `a017_table` (`username`, `password`, `name`, `email`) VALUES ('$username', '$password', '$fullname', '$email')";
        mysqli_query($conn, $sql);
    ?>
