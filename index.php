<?php
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chaves,do,meu,site">
    <meta name="description" content="Descrição do meu site">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
    <title>Site Dinamico</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left"><a href="/">logomarca</a></div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
                </div><!--botao-menu-mobile-->
                <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>

    <?php 
        $url = $_GET['url'];
        echo $url;
    ?>

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

</body>
</html>