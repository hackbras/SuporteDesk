<html>
<head>
    <meta charset="utf-8">
	<!--<meta name="viewport" content="width=device-width,initial-scale=1.0">-->
		
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script src="js\validation.js"></script>
	<script src="js\efeitos.js"></script>
	<script type="text/javascript" src="js\compatibility.js"></script>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<link rel="stylesheet" href="css\custom.css">		  
	<!--<link rel="stylesheet" href="css\custom-tablet.css">
	<link rel="stylesheet" href="css\custom-mobile.css">-->

	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>		
	<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

		
	<title>SuporteDesk</title>
	<link rel="shortcut icon" href="img/logo_suportedeskv4.png" type="image/x-png"/>
	<!--[if lt IE 9]>
	<script src="js\html5shiv.min.js"></script>
	<![endif]-->


</head>
<body>
   	<!--DESCRIÇÃO DE SERVIÇOS1-->
	<div id="planFormatModal">
		<section id="plan-format" class="planFormatModalContainer plan-format">
			<span>
				<h3 width="40%">Planos de Formatação</h3>	
				<a href="#formatacao" class="fechar" width="40%">Fechar.</a>			
			</span>

			<article class="col4 plan-format-bas">
			<h4 class="legenda-plan">Básico</h4>
			<ul>
				<li>Backup</li>
				<li>Orçamento sem compromisso</li>
			</ul>
			</article>
					
			<article class="col4 plan-format-int">
			<h4 class="legenda-plan">Intermediário</h4>
			<ul>
				<li>Backup</li>
				<li>Orçamento sem compromisso</li>
				<li class="destaque">Garantia de 3 meses</li>
				<li class="destaque">Instalação de Word, Excel e Power point</li>
			</ul>
			</article>

			<article class="col4 plan-format-av">
			<h4 class="legenda-plan">Avançado</h4>
			<ul>
				<li>Backup</li>
				<li>Orçamento sem compromisso</li>
				<li>Garantia de 3 meses</li>
				<li>Instalação de Word, Excel e Power point</li>
				<li class="destaque">Formatação Definitiva</li>
			</ul>
			</article>
		</section>
	</div>

	<div id="instalacaoModal">
		<div id="instalacaoModalContainer">
			<a href="#instalacao" class="fechar" width="40%">Fechar.</a>	
			<img src="img/paginaemconstrucao.png" alt="Página em Manutenção.">	
		</div>	
	<div>

	<div id="configModal">
		<div id="configModalContainer">
			<a href="#configuracao" class="fechar" width="40%">Fechar.</a>	
			<img src="img/paginaemconstrucao.png" alt="Página em Manutenção.">			
		</div>	
	<div>

	<!--DESCRIÇÃO DE SERVIÇOS2-->

	<div id="checkModal">
		<div id="checkModalContainer">
			<a href="#troca-pecas" class="fechar" width="40%">Fechar.</a>	
			<img src="img/paginaemconstrucao.png" alt="Página em Manutenção.">			
		</div>	
	<div>

	<div id="montModal">
		<div id="montModalContainer">
			<a href="#manutencao" class="fechar" width="40%">Fechar.</a>	
			<img src="img/paginaemconstrucao.png" alt="Página em Manutenção.">			
		</div>	
	<div>

	<div id="recuperacaoModal">
		<div id="recuperacaoModalContainer">
			<a href="#recuperacao-componente" class="fechar" width="40%">Fechar.</a>	
			<img src="img/paginaemconstrucao.png" alt="Página em Manutenção.">			
		</div>	
	<div>

	<!--DESCRIÇÃO DE SERVIÇOS3-->	

	<div id="manutModal">
		<div id="manutModalContainer">
			<a href="#upgrade" class="fechar" width="40%">Fechar.</a>	
			<img src="img/paginaemconstrucao.png" alt="Página em Manutenção.">			
		</div>	
	<div>

	<div id="telaModal">
		<div id="telaModalContainer">
			<a href="#troca-tela" class="fechar" width="40%">Fechar.</a>	
			<img src="img/paginaemconstrucao.png" alt="Página em Manutenção.">			
		</div>	
	<div>

	<div id="bateriaModal">
		<div id="bateriaModalContainer">
			<a href="#troca-bateria" class="fechar" width="40%">Fechar.</a>	
			<img src="img/paginaemconstrucao.png" alt="Página em Manutenção.">			
		</div>	
	<div>

	<!--VERSÕES SISTEMA-->
	<div id="versaoModal" >
		<div id="versaoModalContainer">
			<a href="#rodape" class="fechar" >Fechar.</a>							
			<div >
				<h2>VERSÕES</h2>

				<h3>SuporteDesk Versão 0.5</h3>
				<img src="img/versoes/v0.5.jpg">

				<h3>SuporteDesk Versão 1.0</h3>
				<img src="img/versoes/v1.0.jpg">
						
				<h3>SuporteDesk Versão 2.0</h3>		
				<img src="img/versoes/v2.0.PNG">

				<h3>SuporteDesk Versão 3.0</h3>
				<img src="img/versoes/v3.0.PNG">								
						
				<h3>SuporteDesk Versão 4.0</h3>
				<img src="img/versoes/v4.0.PNG">

			</div>

		</div>	
	<div>

	<header>	

		<script>
			$(document).ready(function(){							
					$(".icone").click(function(){
						$("#opcoes-menu").animate({
							width:'toggle'
						});
						$(".close").hide();
					});		
			});		
		</script>	
   		<div id="menu">
			<div id="logo">		
				<img class="icone" src="img\menu1.png">				
				<img id="" class="logo-image" src="img/logo-oficial2.png">				
			</div>

			<div id="opcoes-menu">
				<span class="close">Sair</span>
				<ul >					
					<li><a href="#menu"> Home</a></li>	</br>			
					<li><a href="#descricao-servicos"> Serviços</a></li></br>	
					<li><a href="#contact"> Fale Conosco</a></li>						
				</ul>
			</div>
			
		</div>

		<p class="legenda">Se você precisa formatar, configurar e até mesmo montar o seu computador, entre em contato conosco e saiba mais informações.</p>				
		
	</header>	

	<section class="slider">			
		<!--Carroussel-->
		<ul class="slides">
			<li>
				<img src="img/configuracao_formatacao.jpg" alt="Configuração de Computadores" /></li>
			<li>
				<img src="img/notebook2.png" alt="Manutenção de notebooks" /></li>
			<li>
				<img src="img/stress.jpg" alt="Alternate Text" /></li>
		</ul>
	</section>

	<section id="descricao-servicos" >
		<h2 id="services">SERVIÇOS</h2>
		<article id="servicos-diversos">
			<h3>Instalação e Configuração</h3>	

			<script>
				$(document).ready(function(){		
					$(window).scroll(function(){
						if ($(document).scrollTop() > 100){
							$("#menu").addClass("no-top");
						}
						else{							
							$("#menu").removeClass("no-top");	
						}

					});
				});
			</script>

			<div id="formatacao" class="contraste-preto col-tb servicos">
				<h5 class="title2">Formatação</h5>
				<div class="servico">			
					<img class="service-image responsive-img" src="img/virus.jpg" >
				</div>
					<a href="#planFormatModal"><img id="more-details" class="more-details" src="img/plus.png"></a>
					<ol class="descricao-servico" style="font-size:20px">
						<li>Fazemos o backup de seus dados.</li>
						<li>Formatamos, configuramos, damos orientações e ferramentas para que tenha a melhor experiência possível com seu computador e por um preço justo.</li>
						<li>Damos garantia do serviço</li>
					</ol>
			</div>		

			<div id="instalacao" class="col-tb servicos contraste-preto">
				<h5 class="title2" >Instalações</h5>
				<div class="servico">
					<img class="service-image responsive-img" src="img/manutencao2.jpg" >
				</div>

					<a href="#instalacaoModal"><img id="more-details" class="more-details" src="img/plus.png"></a>
					<ol class="descricao-servico">
						<li>Instalação de Placas;</li>
						<li>Instalação de drivers;</li>
						<li>Instalação de programas</li>
					</ol>
			</div>

			<div id="configuracao" class="contraste-preto col-tb servicos">
				<h5 class="title2" >Configuração</h5>
				<div class="servico">
					<img class="service-image responsive-img" src="img/configuracao2.png" >
				</div>
	
				<a href="#configModal"><img id="more-details" class="more-details" src="img/plus.png"></a>
				<ol class="descricao-servico">
					<li>Configuração do Sistema operação</li>
					<li>Configuração de programas</li>
					<li>Otimização</li>
				</ol>
			</div>

		</article>
	
		</div>

		<article id="manutencao-pc">
			<h3>Manutenção do Computador</h3>

			<div id="troca-pecas" class="col-tb servicos contraste-preto">
				<h5 class="title2" >Checkup e Upgrade</h5>
				<div class="servico">
					<img class="service-image responsive-img" src="img/troca-pecas.png" >
				</div>

				<a href="#checkModal"><img id="more-details" class="more-details" src="img/plus.png"></a>
				<ol class="descricao-servico">
					<li>Limpeza;</li>
					<li>Troca de peças: HD, Memória, cooler, placa wireless e etc...</li>
					<li>Upgrade.</li>
				</ol>
			</div>

			<div id="manutencao" class="contraste-preto col-tb servicos">
			<h5 class="title2" >Montagem e Manutenção</h5>
				<div class="servico">
					<img class="service-image responsive-img" src="img/manutencao.png">
				</div>

				<a href="#montModal"><img id="more-details" class="more-details" src="img/plus.png"></a>
				<ol class="descricao-servico">
					<li>Motagem de computador de baixo custo e Gamer;</li>
					<li>Correção de defeitos diversos.</li>
				</ol>
			</div>

			<div id="recuperacao-componente" class="col-tb servicos contraste-preto">
			<h5 class="title2" >Recuperação de Placa Mãe</h5>
				<div class="servico">
					<img class="service-image responsive-img" src="img/manutencao.jpg">
				</div>

				<a href="#recuperacaoModal"><img id="more-details" class="more-details" src="img/plus.png"></a>
				<ul class="descricao-servico">
					<li>Troca de componentes eletrônicos.</li>
				</ul>
			</div>

		</article>

		<article id="manutencao-note">
			<h3>Manutenção de Notebook</h3>

			<div id="upgrade" class="contraste-preto col-tb servicos">
			<h5 class="title2" >Manutenção</h5>
				<div class="servico">
					<img class="service-image responsive-img" src="img/note.jpg" >
				</div>			

				<a href="#manutModal"><img id="more-details" class="more-details" src="img/plus.png">	</a>	
				<ol class="descricao-servico">
					<li>Troca de peças: HD, Memória, cooler, placa wireless e etc...</li>
					<li>Upgrade.</li>
					<li>Manutenção.</li>	
					<li>Limpeza</li>
				</ol>
			</div>

			<div id="troca-tela" class="col-tb servicos contraste-preto">
				<h5 class="title2" >Tela Quebrada</h5>
				<div class="servico">
					<img class="service-image responsive-img" src="img/note2.jpg" >
				</div>
	
				<a href="#telaModal"><img id="more-details" class="more-details" src="img/plus.png"></a>
				<ol class="descricao-servico">
					<li>Troca e reparo de cabos flat de tela LCD</li>
					<li>Troca de tela LCD quebradas.</li>
				</ol>
			</div>

			<div id="troca-bateria" class="contraste-preto col-tb servicos">
				<h5 class="title2" >Baterias Viciadas</h5>
				<div class="servico">
					<img class="service-image responsive-img" src="img/baterias-notebook.jpg" >
				</div>

				<a href="#bateriaModal"><img id="more-details" class="more-details" src="img/plus.png">	</a>
				<ul class="descricao-servico">
					<li>Troca e/ou manutenção de baterias viciadas</li>
				</ul>
			</div>

		</article>	
	</section>

	<!--<section class="tab-services"></section>-->

	<section id="contact">

		<h2 class="title grey lighten-1  white-text">
			<img class="responsive-img" class="responsive-img"  src="img/contact.png" align="center">
			Fale Conosco
		</h2>

		<div class="row container">
			<form class="e-mail col-sm col-pc" name="formulario" method="post">
				<div class="input-field">	
					<input id="nome" class="validate" type="text" name="nome" pattern="[a-zA-Z]+$" width="100px" minlength="2" maxlength="100" autocomplete="on" data-error="wrong" data-success="right" required="required">			
					<label for="nome" >Nome:</label>
				</div>
				<div class="input-field">		
					<input id="email" class="validate" type="email" name="email" minlength="7" maxlength="100" placeholder="usuario@email.com.br" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" autocomplete="on"  required="required">
					<label for="email">E-mail:</label>		
				</div>	
				<div class="input-field">
					<input id="assunto" class="tooltipped validate" type="text" name="assunto" autocomplete="on" data-error="wrong" data-success="right" data-position="right" data-delay="50" data-tooltip="*Campo opcional.">
					<label for="assunto" >Assunto</label>
				</div>

				<label for="mensagem">Mensagem</label>	
				<textarea id="mensagem" class="tooltipped validate" name="mensagem"  rows="10" cols="45" minlength="2" maxlength="500" data-error="wrong" data-success="right" data-position="right" data-delay="50" data-tooltip="*Até 500 caracteres." required></textarea>						
				<input type="submit" name="botao" value="Enviar" onclick="validacao()" class="btn waves-effect waves-light" style="margin-top:20px;padding-top:10px;">

			</form>
			<div class="contatos col-sm col-pc" >	
				<img id="tel" class="responsive-img" width="36" height="36">
				<span id="email-company"></span><br>

				<img id="whats" class="responsive-img" width="97" height="97">	
				<span id="whatsapp"></span><br>

				<img id="map" class="responsive-img"  width="97" height="97">	
				<span id="phone"></span>		
			</div>
		</div>
		
		<h2>Como Chegar<h2>
		<iframe 
			width="600" 
			height="450" 
			frameborder="0" 
			style="border:0" 
			src="https://www.google.com/maps/embed/v1/place?q=place_id:EkJSLiBDaW5jbywgMzQ2IC0gUGFycXVlIEVsaXphYmV0aCwgSWJpcml0w6kgLSBNRywgMzI0MDAtMDAwLCBCcmFzaWw&key=AIzaSyBQ3pvoJAjabFuPJ0blxXjIqrK9wosvf7c" 
			allowfullscreen>
		</iframe>
	</section>
	
		<?php

		function zerar(){		
			unset($email_destino);
			unset($nome);
			unset($email_contato);
			unset($assunto);
			unset($mensagem);
		}

		$email_destino="contato@suportedesk.com.br";
		$nome=$_POST['nome'];
		$email_contato=$_POST['email'];
		$assunto=$_POST['assunto'];
		$mensagem=$_POST['mensagem'];
	

		if (isset($nome)&& isset($email_contato) && isset($mensagem)

			&& mail($email_destino, $assunto, $mensagem,"from:contato@suportedesk.com.br")){

			echo '<script>alert("'.$nome.' sua mensagem foi enviada com sucesso.");</script>';

			zerar();
			}

		?>
		<!--<video width="500" preload="auto" controls muted>
		<source src="img/DEfeitosPrologo Oficial.mp4" type="video/mp4">
		</video>-->
	<section id="formasPagamento" >
		<h2>Formas de Pagamento</h2>
		<div id="pagamento" > </div>
	</section>

	<footer id="rodape" class="paddingU2">			

		<section>
			<span class="ano" width="45%">Suportedesk 2013 à 2017</span>
			
			<span  width="45%">
				<a href="#versaoModal">V.5.0 </a>By 	

				<a id="by" href="https://github.com/hackbras/SuporteDesk" target="_blank">
					<img class="responsive-img" class="responsive-img"  src="img/github.png" width="20px">
				</a>
			</span>
		</section>
		
	</footer>   

	<script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
	<script src="js\connection.js"></script>

</body>
</html>