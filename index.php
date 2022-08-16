<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chaves,do,meu,site">
    <meta name="description" content="Descrição do meu site">
    <link href="estilo/style.css" rel="stylesheet" />
    <title>Site Dinamico</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left">logomarca</div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
                </div><!--botao-menu-mobile-->
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div><!--overlay-->
        <div class="center">
        <form>
            <h2>Qual é o seu e-mail?</h2>
            <input type="email" name="email" required />
            <input type="submit" name="acao" value="cadastrar" />
        </form>
        </div><!--center-->
    </section><!--banner-principal-->

    <section class="descricao-autor">
        <div class="center">
        <div class="w50 left">
            <h2>Marco Aurélio M. Santos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Sed viverra, diam in sodales accumsan, sapien mi tincidunt libero, 
            eget placerat quam risus in ante. Phasellus auctor molestie ipsum, quis vehicula sapien. 
            Fusce aliquam in magna at tristique. Curabitur eu felis faucibus sem tempor aliquam id eget neque. 
            Pellentesque sit amet tempus urna. Nullam sagittis pellentesque blandit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Sed viverra, diam in sodales accumsan, sapien mi tincidunt libero, 
            eget placerat quam risus in ante. Phasellus auctor molestie ipsum, quis vehicula sapien. 
            Fusce aliquam in magna at tristique. Curabitur eu felis faucibus sem tempor aliquam id eget neque. 
            Pellentesque sit amet tempus urna. Nullam sagittis pellentesque blandit.</p>
        </div><!--w50-->
        <div class="w50 left">
            <img class="right" src="imagens/foto-perfil2.jpg" />
        </div><!--w50-->
        <div class="clear"></div>
        </div><!--center-->
    </section><!--descricao-autor-->

    <section class="especialidades">
        <div class="center">
        <h2 class="title">Especialidades</h2>
        
        <div class="w33 left box-especialidade">
				<h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
				<h4>CSS3</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->

			<div class="w33 left box-especialidade">
				<h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
				<h4>HTML 5</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->

			<div class="w33 left box-especialidade">
				<h3><i class="fa fa-gg-circle"></i></h3>
				<h4>Javascript</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
			</div><!--box-especialidade-->

			<div class="w33 left box-especialidade">
				<h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
				<h4>CSS3</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                </p>
			</div><!--box-especialidade-->

			<div class="w33 left box-especialidade">
				<h3><i class="fa fa-html5"></i></h3>
				<h4>HTML 5</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod    
                </p>
			</div><!--box-especialidade-->

			<div class="w33 left box-especialidade">
				<h3><i class="fa fa-gg-circle"></i></h3>
				<h4>Javascript</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </p>
			</div><!--box-especialidade-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--especialidades-->

    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed viverra, diam in sodales accumsan, sapien mi tincidunt libero,
                    eget placerat quam risus in ante. Phasellus auctor molestie ipsum, quis vehicula sapien.
                    Fusce aliquam in magna at tristique. Curabitur eu felis faucibus sem tempor aliquam id eget neque.
                    Pellentesque sit amet tempus urna. Nullam sagittis pellentesque blandit."</p>
                    <p class="nome-autor">Loren Ipsun</p>
                </div><!--depoimentos-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed viverra, diam in sodales accumsan, sapien mi tincidunt libero, 
                    eget placerat quam risus in ante. Phasellus auctor molestie ipsum, quis vehicula sapien. 
                    Fusce aliquam in magna at tristique. Curabitur eu felis faucibus sem tempor aliquam id eget neque. 
                    Pellentesque sit amet tempus urna. Nullam sagittis pellentesque blandit."</p>
                    <p class="nome-autor">Loren Ipsun</p>
                </div><!--depoimentos-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed viverra, diam in sodales accumsan, sapien mi tincidunt libero, 
                    eget placerat quam risus in ante. Phasellus auctor molestie ipsum, quis vehicula sapien. 
                    Fusce aliquam in magna at tristique. Curabitur eu felis faucibus sem tempor aliquam id eget neque. 
                    Pellentesque sit amet tempus urna. Nullam sagittis pellentesque blandit."</p>
                    <p class="nome-autor">Loren Ipsun</p>
                </div><!--depoimentos-single-->
            </div><!--w50-->
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed viverra, diam in sodales accumsan, sapien mi tincidunt libero, 
                    eget placerat quam risus in ante. Phasellus auctor molestie ipsum, quis vehicula sapien.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed viverra, diam in sodales accumsan, sapien mi tincidunt libero, 
                    eget placerat quam risus in ante. Phasellus auctor molestie ipsum, quis vehicula sapien.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed viverra, diam in sodales accumsan, sapien mi tincidunt libero, 
                    eget placerat quam risus in ante. Phasellus auctor molestie ipsum, quis vehicula sapien.</li>
                </ul>
                </div><!--servicos-->
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--extras-->

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>
    <script src="js/jquery.js"></script>
    <script>
        $(function(){
            
            var mensagem = "Olá Mundo";
            console.log(mensagem);
            alert(mensagem);
        })
    </script>

</body>
</html>