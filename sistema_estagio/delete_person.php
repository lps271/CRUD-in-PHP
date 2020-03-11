<?php
    include 'link.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM `table1` WHERE `id_person` = $id ";

    $delete = mysqli_query($link,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" rel="text/css">

<div class="container" id="main-div">

    <h4>Deletado com sucesso!</h4>
    
    <div style="padding-top: 20px">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo ítem</a>
        <a href="show_person.php" role="button" class="btn btn-sm btn-primary">Registros existentes</a>
    </div>
</div>