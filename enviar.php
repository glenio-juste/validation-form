<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>


<?php

$nome = $_GET['nome'];
$email = $_GET['email'];
$assunto = $_GET['assunto'];
$mensagem = $_GET['mensagem'];



?>

<section class="section">
        <div class="container">
            <div class="columns is-centered">
                <!-- é do bulma, centraliza o formulário no meio -->
                <div class="column is-half">

                <h1 class="title notification is-success" style="text-align: center;">Dados enviados com sucesso!</h1>

                <?php 
                    if($nome != ""){
                        ?>  <h3 class='title notification is-info' style="text-align: center;"><?php echo $nome; ?></h3>  
                        <?php } else { ?>    <h3 class='title notification is-danger' style="text-align: center;">Nome não informado</h3>    <?php }
                ?>

                <?php 
                    if($email != ""){
                        ?>  <h3 class='title notification is-info' style="text-align: center;"><?php echo $email; ?></h3>  
                        <?php } else { ?>    <h3 class='title notification is-danger' style="text-align: center;">E-mail não informado</h3>    <?php }
                ?>

                <?php 
                    if($assunto != ""){
                        ?>  <h3 class='title notification is-info' style="text-align: center;"><?php echo $assunto; ?></h3>  
                        <?php } else { ?>    <h3 class='title notification is-danger' style="text-align: center;">Assunto não informado</h3>    <?php }
                ?>

                <?php 
                    if($mensagem != ""){
                        ?>  <h3 class='title notification is-info' style="text-align: center;"><?php echo $mensagem; ?></h3>  
                        <?php } else { ?>    <h3 class='title notification is-danger' style="text-align: center;">Mensagem não informada</h3>    <?php }
                ?>        
                
                <a class="button is-link is-outlined" href="index.php">Voltar</a>
                
                </div>
            </div>
        </div>
</section>




    
</body>
</html>

