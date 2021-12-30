<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        @include('includes.head', array(
            'title' => 'Espaço Mercado - Criamos seu site online',
            'keywords' => 'Loja Online, Criar App, Criar Site',
            'description' => 'Aumente suas vendas com app e site personalizados. A Espaço Mercado é capaz de criar sua loja online em até 24h.'
        ))
	</head>
	<body>
		<body data-spy="scroll" data-target=".header-nav-main nav" data-offset="65">
			@include('includes.topbar')

			<div role="main" class="main">
				<section id="overview" class="section custom-bg-color-1 custom-background-style-1 m-0">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-lg-8">
								<div class="custom-top-title-box">
									<span class="text-color-light font-weight-semibold">Quer Criar um app e site para sua empresa?</span>
									<h1 class="text-color-light">Criamos sua loja online!</h1>
									<span class="text-color-light font-weight-semibold mb-5 mt-1">Criamos sua loja online e já pronta para vender em até 24hs!</span>
									<a href="#supermercado" class="btn custom-btn-style-1 text-color-light mb-5" data-hash>SUPERMERCADO</a>
									<a href="#farmacia" class="btn btn-primary custom-btn-style-1 btn-outline _borders text-color-light ml-2 mb-5" data-hash data-hash-offset="62">FARMÁCIA</a>
								</div>
							</div>
							<div class="col-8 col-md-4 col-lg-4 mx-auto">
								<div class="owl-carousel custom-arrows-style-1 custom-left-pos-1 custom-background-1 m-0" data-plugin-options="{'items': 1, 'loop': true, 'dots': false, 'nav': true, 'autoplay': true, 'autoplayTimeout': 3000}">
									<div>
										<img src="{{ asset('img/em/overview-carousel-1.jpg') }}" alt class="img-fluid" />
									</div>	
									<div>
										<img src="{{ asset('img/em/overview-carousel-1.jpg') }}" alt class="img-fluid" />
									</div>	
									<div>
										<img src="{{ asset('img/em/overview-carousel-1.jpg') }}" alt class="img-fluid" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div id="home-intro" class="home-intro custom-home-intro bg-color-tertiary m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-sm-8">
								<p class="text-color-light m-0">
									App disponível para Android e IOS
									<span class="pt-0 text-2">Veja um exemplo na playstore para plataformas Android.</span>
								</p>
							</div>
							<div class="col-lg-4 col-sm-4">
								<a href="https://play.google.com/store/apps/developer?id=Espaço+Mercado" target="_blank" class="btn btn-primary custom-btn-style-1 text-uppercase font-weight-semibold float-md-right mt-1"><i class="icon-cloud-download icons mr-2"></i>BAIXE AGORA</a>
							</div>
						</div>
					</div>
				</div>

				<section id="key-features" class="section bg-color-light m-0 pb-0">
					<div class="container">
						<div class="row mb-5 pb-5 justify-content-center">
							<div class="col-lg-5 text-center">
								<img src="img/em/loja-online-espaco-mercado.png" data-appear-animation="fadeInLeft" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
							</div>
							<div class="col-md-10 col-lg-7 text-center text-lg-left">
								<h2 class="custom-bar _left text-color-dark">Aplicativo e site exclusivo</h2>
								<h4 class="font-weight-normal">Aumente suas vendas com app em Android e iOS e site exclusivo para a sua loja no melhor custo benefício do mercado! </h4>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-10 col-lg-7 order-2 order-lg-1 text-center text-lg-right">
								<h2 class="custom-bar _right text-color-dark">+ 100 mil produtos categorizados</h2>
								<h4 class="font-weight-normal">Oferecemos a melhor solução de vendas com mais de 100 mil produtos categorizados e imagens além de app exclusivo para a sua loja online! </h4>
							</div>
							<div class="col-lg-5 order-1 order-lg-2 text-center">
								<img src="img/em/ecommerce-espaco-mercado.png" data-appear-animation="fadeInRight" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
							</div>
						</div>
						<div class="row mb-5 pb-5 justify-content-center">
							<div class="col-lg-5 text-center">
								<img src="img/em/site-espaco-mercado.png" data-appear-animation="fadeInLeft" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
							</div>
							<div class="col-md-10 col-lg-7 text-center text-lg-left">
								<h2 class="custom-bar _left text-color-dark">Site responsivo</h2>
								<h4 class="font-weight-normal"> A Espaço Mercado oferece uma solução completa e integrada. Não importa o tamanho do seu negócio. Nos preocupamos com tudo do seu site para que você venda ainda mais online! </h4>
							</div>
						</div>
						
						<hr class="solid custom-tall">

						<div class="row justify-content-center">
							<h2 class="col-12 custom-bar _center text-color-dark">Como Funciona</h2>
							<h4 class="col-12 text-center font-weight-normal">Assista ao vídeo e entenda como funciona.</h4>

							<article class="post post-large mt-4">
								<div class="post-image">
									<iframe width="680" height="382" src="https://www.youtube.com/embed/87cUzG9k61E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</article>
						</div>
						<hr class="solid custom-tall">
					</div>
				</section>

				<section id="cases" class="section bg-color-light m-0 pt-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="owl-carousel show-nav-title custom-arrows-style-1" data-plugin-options="{'responsive': {'767': {'items': 1}, '1200': {'items': 2}}, 'margin': 50, 'loop': false, 'dots': false, 'nav': true}">
									<div class="text-center cursor-pointer card-cases" id="supermercado" data-action="{{ route('supermercado') }}">
										<article class="thumb-info custom-thumb-info-style-2" style="background-color: #A00202;">
											<span class="thumb-info-wrapper m-0">
												<a href="#" class="text-decoration-none" title="Porto Website">
													<img src="{{ asset('img/em/criar-mercado-online-app-ecommerce.png') }}" class="img-fluid" alt="">
												</a>
											</span>
											<span class="thumb-info-caption bg-color-gray text-center p-3">
												<h4>
													<a href="#" class="text-decoration-none text-color-white">
														SUPERMERCADO
													</a>
												</h4>
												<p class="custom-thumb-info-category p-0 text-color-white">Criar site para mercados e supermercados é o nosso forte!</p>
												<p class="custom-thumb-info-category p-0 text-color-white">Confira os benefícios em nossa página.</p>
											</span>
										</article>
										<a href="{{ route('supermercado') }}" class="btn btn-modern btn-light mt-3">Saiba Mais</a>
									</div>
									<div class="text-center cursor-pointer card-cases" id="farmacia" data-action="{{ route('farmacia') }}">
										<article class="thumb-info custom-thumb-info-style-2" style="background-color: #0286A0;">
											<span class="thumb-info-wrapper m-0">
												<a href="#" class="text-decoration-none" title="Porto Website">
													<img src="{{ asset('img/em/criar-farmacia-online-app-ecommerce.svg') }}" class="img-fluid" alt="">
												</a>
											</span>
											<span class="thumb-info-caption bg-color-gray text-center p-3">
												<h4>
													<a href="#" class="text-decoration-none text-color-white">
														FARMÁCIA
													</a>
												</h4>
												<p class="custom-thumb-info-category p-0 text-color-white">Criar site para farmácia é a nossa especialidade!</p>
												<p class="custom-thumb-info-category p-0 text-color-white">Confira os benefícios em nossa página.</p>
											</span>
										</article>
										<a href="{{ route('farmacia') }}" class="btn btn-modern btn-light mt-3">Saiba Mais</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="reviews" class="section bg-color-tertiary m-0">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<h2 class="text-color-light">O que os clientes falam</h2>
								<div class="owl-carousel custom-arrows-style-1 _custom-nav-bottom _big" data-plugin-options="{'items': 1, 'responsive': {'479': {'items': 1}, '979': {'items': 2}, '1199': {'items': 2}}, 'margin': 80, 'loop': true, 'dots': false, 'nav': true, 'autoplay': true, 'autoplayTimeout': 7000}">
									<div>
										<div class="custom-review text-left">
											<h4 class="text-color-light">
												Diretor comercial, Supermercados Ideal
												<span class="stars text-color-primary">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												</span>
											</h4>
											<p class="custom-color-1">
												Utilizamos a plataforma da Espaço Mercado para a inauguração de nosso e-commerce. Lançamos nossa loja em 2 dias com baixo investimento e excelentes resultados. A empresa foi super solícita e parceira, recomendo!
											</p>
										</div>
									</div>
									<div>
										<div class="custom-review text-left">
											<h4 class="text-color-light">
												Maikio Dias dos Santos. Drogaria Tabuazeiro											
												<span class="stars text-color-primary">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												</span>
											</h4>
											<p class="custom-color-1">
												Implantei em minha loja, foi super rápido e fácil, a plataforma atendeu todas as minhas expectativas!
											</p>
										</div>
									</div>
									<div>
										<div class="custom-review text-left">
											<h4 class="text-color-light">
												Sandro Litig. Shopping das Frutas
												<span class="stars text-color-primary">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												</span>
											</h4>
											<p class="custom-color-1">
												Começamos a usar o site da Espaço Mercado pela simplicidade, rapidez na integração e eficiência no dia a dia. Em dois cliques atualizo os preços e fico tranquilo em relação compra e navegação dos clientes, o atendimento é rápido e a solução também. Parabéns aos desenvolvedores.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-color-light pt-0 pb-0">
					<div class="container text-center">
						<a href="{{ route('contato') }}" class="btn custom-btn-style-1 text-color-light m-auto">Contato</a>
					</div>
				</section>

				@include('includes.btn-whatsapp')
			</div>
			@include('includes.footer')
		</body>

        @include('includes.scripts', array('pagina' => 'false'))
	</body>
</html>