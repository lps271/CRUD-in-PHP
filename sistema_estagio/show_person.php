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
    <div class="container" id="div-show">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">Ultima Atualização</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>

                </tr>
            </thead>
                <?php
                    include 'link.php';
                    $sql = "SELECT * FROM `table1`";
                    $search = mysqli_query($link,$sql);

                    while ($array = mysqli_fetch_array($search)){
                        $id_person = $array['id_person'];
                        $name_person = $array['name_person'];
                        $last_update = $array['last_update'];
                        
                ?>

                <tr>             
                   <td><?php echo $id_person ?></td>
                   <td><?php echo $name_person ?></td>
                   <td><?php echo $last_update ?></td>
                   <td><a class="btn btn-primary" href="edit_person.php?id=<?php echo $id_person; ?>" role="button">Editar</a></td>
                   <td><a class="btn btn-danger" href="delete_person.php?id=<?php echo $id_person; ?>" role="button">Excluir</a></td>
                </tr>

                    <?php } ?>
                
        </table>

        <div style="padding-top: 20px" style="float: right">
            <a href="index.php" role="button" class="btn btn-primary">Cadastrar novo ítem</a>
        </div>

    </div>

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