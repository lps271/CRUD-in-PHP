<?php
include 'link.php';

$name_person = $_POST['name_person'];
//$system_date = date("d/m/y H:i");
$system_date = $_POST['system_date'];
$message = $_POST['message'];

$sql = "INSERT INTO `table1`(`name_person`, `last_update`) VALUES ('$name_person','$system_date')";

$insert = mysqli_query($link,$sql);



?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" rel="text/css">

<div class="container" id="main-div">

    <h4><?php echo $message; ?></h4>
    
    <div style="padding-top: 20px">
        <a href="index.php" role="button" class="btn btn-primary">Cadastrar novo ítem</a>
        <a class="btn" id="btn" href="show_person.php" role="button">Registros existentes</a>
    </div>
</div>