<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name=$_POST["name"];
    $email=$_POST["email"];

    echo "name ".$name." email ".$email; 

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Name"><br>
        <input type="email" name="email" id="email" placeholder="Enter Email"><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>