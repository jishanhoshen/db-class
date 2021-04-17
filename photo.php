<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "" , "dreamcre_classroom");


if (isset($_POST['submit'])){
    $photo = $_FILES['photo'];
    echo "<pre>";
    print_r($photo);
    echo "</pre>";
//    move_uploaded_file($_FILES['photo']['tmp_name'],"photos/image.png");
}
?>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="photo">
    <input type="submit" name="submit">
</form>
</body>
</html>