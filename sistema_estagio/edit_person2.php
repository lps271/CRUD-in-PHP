<?php
include 'link.php';

$name_person = $_POST['name_person'];
$system_date = $_POST['system_date'];
$message = $_POST['message'];
$id = $_POST['id'];

$sql = "UPDATE `table1` SET `name_person` = '$name_person' , `last_update` = '$system_date' WHERE `id_person` = $id";

$update = mysqli_query($link,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" rel="text/css">

<div class="container" id="main-div">

    <h4><?php echo $message; ?></h4>
    
    <div style="padding-top: 20px">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo ítem</a>
    </div>
</div>