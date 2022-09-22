<?php
require('layouts/header.php');
?>

<header>
	<div class="carousel slide" id="carrosel-header" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carrosel-header" data-slide-to="0" class="active"></li>
			<li data-target="#carrosel-header" data-slide-to="1"></li>
			<li data-target="#carrosel-header" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">
			<div class="carousel-item slide-1 active">
				<div class="carousel-caption">
					<h2 class="titulo-slide">Crie seu site com a Cev<span class="text-primary">Code</span></h2>
					<hr class="hr-slide">
					<h4 class="subtitulo-slide">
						Desenvolvimento de Sites a partir de R$599,99.
					</h4>
					<a class="btn btn-outline-primary js-scroll-trigger" href="#servicos">Nossos Serviços</a>
				</div>
			</div>

			<div class="carousel-item slide-2">
				<div class="carousel-caption">
					<h2 class="titulo-slide">Criação de Sites</h2>
					<hr class="hr-slide">
					<h4 class="subtitulo-slide">
						Sites com desing responsivos e profissionais.
					</h4>
					<a class="btn btn-outline-primary js-scroll-trigger" href="#servicos">Nossos Serviços</a>
				</div>
			</div>

			<div class="carousel-item slide-3">
				<div class="carousel-caption">
					<h2 class="titulo-slide">Otimização de Sites | SEO</h2>
					<hr class="hr-slide">
					<h4 class="subtitulo-slide">
						Otimizamos o seu site para a busca do Google.
					</h4>
					<a class="btn btn-outline-primary js-scroll-trigger" href="#servicos">Nossos Serviços</a>
				</div>
			</div>
		</div>
	</div>		
</header>

<!-- Sobre -->
<section id="sobre">
	<div class="container-fluid secao-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							<h3 class="titulo-pagina">Sobre</h3>
							<hr class="hr-titulos">
							<p>A CevCode Criação de Sites foi criada por Carlos Eduardo Vieira (Desenvolvedor web, mobile e Analista de SEO) e atua no mercado desde 2011, prestando serviços de Criação de Sites, Otimização de Sites (SEO), Reestruturação de Sites, Desenvolvimento de Sistemas Web e Apps.
							<br>
							Somos uma agencia virtual de desenvolvimento localizada em São Paulo, mas nosso atendimento se expende a todo território Nacional.
							</p>
						</div>

						<div class="col-md-12">
							<p>Oferecemos a sua empresa o que há de mais atualizado em criação de sites responsivos e otimização de sites.
							Desenvolvemos todos os nossos projetos com as tecnologias mais eficientes do mercado (Bootstrap 4, HTML 5, CSS 3, JavaScript e Wordpress).
							<br>
							Conte com a CevCode para destacar sua empresa na internet e obter o resultado desejado.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<img class="img-fluid" src="img/sobre/agencia-criacao-de-sites.jpg" alt="Sobre a CevCode Criação de Sites" title="Sobre a CevCode Criação de Sites">
				</div>
					
			</div>

			<hr class="pt-3 pb-3">

			<div class="row">
				<article class="col-md-4">
					<div class="bloco-sobre bg-item-1">
						<i class="fas fa-chart-line fa-3x"></i>
						<h5>Planejamento</h5>
						<p>Criação de sites dinâmicos, com estratégia para converter as visitas do seu site em negócios.</p>
					</div>
				</article>

				<article class="col-md-4">
					<div class="bloco-sobre bg-item-2">
						<i class="fas fa-laptop-code fa-3x"></i>
						<h5>Desenvolvimento</h5>
						<p>Trabalhamos com as principais tecnologias do mercado. Atualize seu site sempre que precisar.</p>
					</div>
				</article>

				<article class="col-md-4">
					<div class="bloco-sobre bg-item-3">
						<i class="fas fa-tachometer-alt fa-3x"></i>
						<h5>Performance</h5>
						<p>Otimização de conteúdo do site, cadastramento nos principais buscadores e Google Ads.</p>
					</div>
				</article>
			</div>

		</div>
	</div>
</section>

<!-- Serviços -->
<section id="servicos">
	<div class="container-fluid secao-cinza mb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-uppercase titulo-pagina">Nossos Serviços</h3>
					<hr class="hr-titulos">
				</div>
			</div>
			<div class="row jusutify-content-between">
				<div class="col-md-4 text-center">
					<img class="img-fluid mb-4" src="img/servicos/criacao-de-sites.jpg" alt="Serviços - Criação de sites" title="Serviços - Criação de sites">
					<h4 class="text-bold subtitulo-pagina"><span class="subtitulo-destaque">Criação</span> de Sites Responsivos</h4>
					<p>Trabalhamos na criação de sites personalizados, design responsivos e gerenciáveis. Com mais de 250 websites publicados, nosso objetivo é destacar o seu negócio na web, desenvolvemos as melhores ferramentas do mercado com layouts únicos. Desenvolvemos sites com Estruturação de dados e aplicação de SEO.</p>
				</div>

				<div class="col-md-4 text-center">
					<img class="img-fluid mb-4" src="img/servicos/otimizacao-de-sites.jpg" alt="Serviços - Otimização de sites" title="Serviços - Otimização de sites">
					<h4 class="text-bold subtitulo-pagina"><span class="subtitulo-destaque">Otimização</span> de Sites – SEO</h4>
					<p>O SEO (Search Engine Optimization), também conhecido como otimização de sites, é uma forma de aumentar os acessos do seu site através de um conjunto de técnicas que permitem que um site melhore seu posicionamento nos resultados orgânicos dos mecanismos de busca, como Google.</p>
				</div>

				<div class="col-md-4 text-center">
					<img class="img-fluid mb-4" src="img/servicos/reestruturacao-de-sites.jpg" alt="Serviços - Reestruturação de sites" title="Serviços - Reestruturação de sites">
					<h4 class="text-bold subtitulo-pagina"><span class="subtitulo-destaque">Reestruturação</span> de Sites</h4>
					<p>Este serviço é um dos mais importantes para a grande maioria das empresas na atualidade, pois com os avanços tecnológicos em ritmo acelerado, um site pode ficar com um visual antigo em pouco tempo. É preciso destacar também que o mais importante não é só o visual, mas a qualidade da navegação do site.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid secao-transparente bg-servicos">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<img class="img-fluid celular-servicos" src="img/servicos/celular-criacao-de-sites.png" alt="Serviços - Criação de sites responsivos" title="Serviços - Criação de sites responsivos">
				</div>
			</div>

			<div class="row conteudo-servicos-icones">
				<div class="col-md-12">
					<div class="titulo-servicos-icones">
						<h2 class="text-white subtitulo-slide">
						Por que você deve criar um site com a Cev<span class="text-primary">Code</span>?
						</h2>
						<hr class="hr-titulos">
						<p>Todos os nossos projetos são exclusivos, criamos sites seguindo todo o padrão da sua marca, desenvolvemos websites responsivos e gerenciáveis. 
						<br>
						Criamos sites com painel para gerenciamento de conteúdo, otimização SEO de todas as páginas, textos e imagens, cadastro nos principais buscadores, integração com redes sociais e WhatsApp.
						<br>
						Não exigimos sinal para iniciar o seu projeto, aqui na CevCode você só paga quando seu site já estiver no ar.
						</p>
					</div>
				</div>
			</div>

			<div class="row conteudo-servicos-icones mt-2">
				<article class="col-md-4">
					<div class="">
						<i class="far fa-clock fa-4x mb-3"></i>
						<h5 class="text-primary">Tempo de desenvolvimento</h5>
						<p>Aqui na CevCode criamos o layout e toda  estrutura de páginas do seu projeto em até 5 dias uteis.</p>
					</div>
				</article>

				<article class="col-md-4">
					<div class="">
						<i class="fas fa-headset fa-4x mb-3"></i>
						<h5 class="text-primary">Suporte ilimitado</h5>
						<p>Além do suporte via chat e telefone, também disponibilizamos tutoriais diversos para auxilia-lo no gerenciamento do seu site.</p>
					</div>
				</article>

				<article class="col-md-4">
					<div class="">
						<i class="far fa-thumbs-up fa-4x mb-3"></i>
						<h5 class="text-primary">Satisfação do cliente</h5>
						<p>Com mais de 400 projetos concluídos, todos as nossas criações são aprovadas pelo cliente antes de serem finalizadas.</p>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>

<!-- Portifolio -->
<section class="secao-padrao" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="titulo-pagina">Portfólio</h3>
				<h6 class="portfolio-caption text-center text-uppercase">Últimos projetos desenvolvidos</h6>
				<hr class="hr-titulos">
			</div>
		</div>

		<div class="row">
			<!-- Portfólio 1 -->
			<div class="col-md-4 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolio-modal-1">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="far fa-eye fa-3x"></i>
						</div>
					</div>

					<img class="img-fluid" src="img/portfolio/portfolio-criacao-de-sites-1-1.jpg" alt="Portfólio - Criação de sites" title="Portfólio - Criação de sites">
				</a>

				<div class="portfolio-caption">
					<h4>Koinstec</h4>
					<p class="text-muted">Instalações e Projetos Ltda.</p>
				</div>
			</div>
			<!-- fim Portfólio 1 -->

			<!-- Portfólio 2 -->
			<div class="col-md-4 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolio-modal-2">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="far fa-eye fa-3x"></i>
						</div>
					</div>

					<img class="img-fluid" src="img/portfolio/portfolio-criacao-de-sites-2-1.jpg" alt="Portfólio - Criação de sites" title="Portfólio - Criação de sites">
				</a>

				<div class="portfolio-caption">
					<h4>Veterinário 24 horas</h4>
					<p class="text-muted">Clinica veterinária em Cotia.</p>
				</div>
			</div>
			<!-- fim Portfólio 2 -->

			<!-- Portfólio 3 -->
			<div class="col-md-4 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolio-modal-3">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="far fa-eye fa-3x"></i>
						</div>
					</div>

					<img class="img-fluid" src="img/portfolio/portfolio-criacao-de-sites-3-1.jpg" alt="Portfólio - Criação de sites" title="Portfólio - Criação de sites">
				</a>

				<div class="portfolio-caption">
					<h4>Star Limp</h4>
					<p class="text-muted">Limpeza pós obra e Higienização.</p>
				</div>
			</div>
			<!-- fim Portfólio 3 -->
		</div>
		<!-- fim Linha 1 -->

		<!-- Linha 2 -->
		<div class="row">
			<!-- Portfólio 4 -->
			<div class="col-md-4 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolio-modal-4">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="far fa-eye fa-3x"></i>
						</div>
					</div>

					<img class="img-fluid" src="img/portfolio/portfolio-criacao-de-sites-4-1.jpg" alt="Portfólio - Criação de sites" title="Portfólio - Criação de sites">
				</a>

				<div class="portfolio-caption">
					<h4>Buffet Happy Day</h4>
					<p class="text-muted">Espaço para Eventos.</p>
				</div>
			</div>
			<!-- fim Portfólio 4 -->

			<!-- Portfólio 5 -->
			<div class="col-md-4 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolio-modal-5">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="far fa-eye fa-3x"></i>
						</div>
					</div>

					<img class="img-fluid" src="img/portfolio/portfolio-criacao-de-sites-5-1.jpg" alt="Portfólio - Criação de sites" title="Portfólio - Criação de sites">
				</a>

				<div class="portfolio-caption">
					<h4>Fast Beer</h4>
					<p class="text-muted">Comércio de bebidas.</p>
				</div>
			</div>
			<!-- fim Portfólio 5 -->

			<!-- Portfólio 6 -->
			<div class="col-md-4 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolio-modal-6">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="far fa-eye fa-3x"></i>
						</div>
					</div>

					<img class="img-fluid" src="img/portfolio/portfolio-criacao-de-sites-6-1.jpg" alt="Portfólio - Criação de sites" title="Portfólio - Criação de sites">
				</a>

				<div class="portfolio-caption">
					<h4>Sure Rastreadores</h4>
					<p class="text-muted">Rastreamento de veículos.</p>
				</div>
			</div>
			<!-- fim Portfólio 6 -->
		</div>
		<!-- fim Linha 2 -->

		<!-- Linha 3 -->
		<div class="row">
			<!-- Portfólio 7 -->
			<div class="col-md-4 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolio-modal-7">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="far fa-eye fa-3x"></i>
						</div>
					</div>

					<img class="img-fluid" src="img/portfolio/portfolio-criacao-de-sites-7-1.jpg" alt="Portfólio - Criação de sites" title="Portfólio - Criação de sites">
				</a>

				<div class="portfolio-caption">
					<h4>Galileu Central de Cursos</h4>
					<p class="text-muted">Consultoria Educacional.</p>
				</div>
			</div>
			<!-- fim Portfólio 7 -->

			<!-- Portfólio 8 -->
			<div class="col-md-4 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolio-modal-8">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="far fa-eye fa-3x"></i>
						</div>
					</div>

					<img class="img-fluid" src="img/portfolio/portfolio-criacao-de-sites-8-1.jpg" alt="Portfólio - Criação de sites" title="Portfólio - Criação de sites">
				</a>

				<div class="portfolio-caption">
					<h4>Reabihidro</h4>
					<p class="text-muted">Reabilitação | Habilitação Física.</p>
				</div>
			</div>
			<!-- fim Portfólio 8 -->

			<!-- Portfólio 9 -->
			<div class="col-md-4 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#portfolio-modal-9">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="far fa-eye fa-3x"></i>
						</div>
					</div>

					<img class="img-fluid" src="img/portfolio/portfolio-criacao-de-sites-9-1.jpg" alt="Portfólio - Criação de sites" title="Portfólio - Criação de sites">
				</a>

				<div class="portfolio-caption">
					<h4>ENGENDREAMS</h4>
					<p class="text-muted">Engenharia & Construção.</p>
				</div>
			</div>
			<!-- fim Portfólio 9 -->
		</div>
	</div>
</section>

<!-- Fale Conosco -->
<section class="secao-padrao" id="fale-conosco">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="titulo-pagina text-white">Fale Conosco</h3>
				<hr class="hr-titulos">
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 pb-5">
				<form id="form1" name="form1" method="post" action="email/contato.php/?acao=enviar" enctype="multipart/form-data">
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Seu Nome *" required="required" data-validation-required-message="Preencha o seu nome." name="nome" id="nome">

						<label class="ident-text" for="nome">
							Nome
						</label>

						<p class="help-block text-danger"></p>
					</div>

					<div class="form-group">
						<input class="form-control" type="email" placeholder="Seu Email *" required="required" data-validation-required-message="Preencha o email." name="email" id="email">

						<label class="ident-text" for="email">
							Email
						</label>

						<p class="help-block text-danger"></p>
					</div>

					<div class="form-group">
						<input class="form-control" type="tel" placeholder="Seu Telefone *" required="required" data-validation-required-message="Preencha o telefone." name="telefone" id="telefone">

						<label class="ident-text" for="telefone">
							Telefone
						</label>

						<p class="help-block text-danger"></p>
					</div>

					<div class="form-group">
						<textarea class="form-control" placeholder="Sua Mensagem *" required="required" data-validation-required-message="Preencha a mensagem." name="mensagem" id="mensagem"></textarea>

						<label class="ident-text" for="mensagem">
							Mensagem
						</label>

						<p class="help-block text-danger"></p>
					</div>

					<input class="btn btn-outline-primary" 
					type="submit" name="Submit" value="Enviar Dados">

				</form>
			</div>

			<div class="col-sm-6">
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-primary text-uppercase pb-3">Nossos Contatos</h5>

						<ul class="list-inline text-white">
							<li class="list-inline-item">
								<i class="fas fa-phone fa-lg"></i>
								<h6 class="d-inline text-white">
									&nbsp;&nbsp;&nbsp;Telefone: 
									<a href="tel:11979516391" rel="nofollow noreferrer noopener" title="Telefone">11 97951-6391</a>
								</h6>
							</li>
						</ul>
						<ul class="list-inline text-white">
							<li class="list-inline-item">
								<i class="fas fa-envelope fa-lg"></i>
								<h6 class="d-inline text-white">
									&nbsp;&nbsp;&nbsp;Email: 
									<a href="mailto:cevcode@gmail.com.br">
										cevcode@gmail.com.br
									</a>
								</h6>
							</li>
						</ul>
						<ul class="list-inline text-white">
							<li class="list-inline-item">
								<i class="fas fa-home fa-lg"></i>
								<h6 class="d-inline text-white">
									&nbsp;&nbsp;&nbsp;Site: 
									<a href="https://servicos.cevcode.com.br">
										servicos.cevcode.com.br
									</a>
								</h6>
							</li>
						</ul>
					</div>
				</div>

				<div class="row mt-3">
					<div class="col-md-12">
						<h5 class="text-primary text-uppercase pb-3">Horários de atendimento</h5>

						<ul class="list-inline text-white">
							<li class="list-inline-item">
								<i class="fas fa-clock fa-lg"></i>
								<h6 class="d-inline text-white">
									&nbsp;&nbsp;&nbsp;Segunda à Sexta 9:00 às 17:00
								</h6>
							</li>
						</ul>
						<ul class="list-inline text-white">
							<li class="list-inline-item">
								<i class="fas fa-clock fa-lg"></i>
								<h6 class="d-inline text-white">
									&nbsp;&nbsp;&nbsp;Sábado e Feriados 9:00 às 13:00
								</h6>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	require('layouts/portfolio.php');
	require('layouts/footer.php');
?>