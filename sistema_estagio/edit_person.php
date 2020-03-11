<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Registros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" rel="text/css">
    

</head>
<body>
<?php
include 'link.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `table1` where `id_person` = $id";
$search = mysqli_query($link,$sql);

while ($array = mysqli_fetch_array($search)){
    $name_person = $array['name_person'];    
?>  

<div class="container" id="div-show" >
    
    <form action="edit_person2.php" method="POST" style="margin-top: 20px;">

    <div class="form-group">      
        <label>Altere o Nome</label>    
        <input type="text" class="form-control" name="name_person" value="<?php echo $name_person ?>">
        <input type="hidden" name="system_date" value="<?php echo $date_system = date("d/m/y H:i");?>">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="hidden" name="message" value="Alterado com Sucesso!">
    </div>

    <div style="float: right;">
		<button type="submit" id="btn" class="btn btn-sm" >Alterar</button>
    </div>

    </form>
    
    <a class="btn" id="btn" href="show_person.php" role="button">Registros existentes</a>
    
    <a style="margin-left: 15px;" class="btn" id="btn" href="index.php" role="button">Pagina inicial</a>
</div>

<?php }?>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
    crossorigin="anonymous"></script>
</body>
</html>