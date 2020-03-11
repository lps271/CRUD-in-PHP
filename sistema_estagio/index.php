<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema simplista PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" rel="text/css">

</head>
<body>
    
    <div  id="main-div" class="container">
        <form action="add_new_person.php" id="my_form" method="POST" style="margin-top: 20px;">
    
        <div class="form-group">
    		<label>Cadastrar novo nome</label>
            <input type="text" id="text" class="form-control" name="name_person" placeholder="Insira nome e sobrenome..." required>
            <input type="hidden" name="system_date" value="<?php echo $date_system = date("d/m/y H:i");?>">  
            <input type="hidden" name="message" value="Adicionado com Sucesso!">
        </div>
        </form>

        <div id="btn-form">
			<button onclick="validate()" id="btn" class="btn" >Adicionar</button>
        </div>


        <a class="btn" id="btn" href="show_person.php" role="button">Registros existentes</a>

    </div>

    <script type="text/javascript">   
        
        var form = document.getElementById("my_form");

        function validate(){
            
            var text = document.getElementById("text").value;
            var regexp = new RegExp(/([A-Z]|[a-z]) ([A-Z]|[a-z])/);

            //var m = text.split(/[\s]/);

            var n = regexp.test(text);

            if(n == false){
            	alert("Insira um nome completo");
            }else {
                form.submit();
            }

        }

    </script>

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