<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        @include('includes.head', array(
            'title' => 'Criar site de supermercado é com a Espaço Mercado!',
            'keywords' => 'Supermercado online, Criar site supermercado',
            'description' => 'A Espaço Mercado é especialista em desenvolvimento e irá criar rapidamente seu site de supermercado para vendas online.'
        ))
        <link rel="stylesheet" href="{{ asset('css/supermercado.css') }}">
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
									<span class="text-color-light font-weight-semibold">Quer criar um app e site para seu supermercado?</span>
									<h1 class="text-color-light">App para <br> Supermercado</h1>
									<span class="text-color-light font-weight-semibold mb-5 mt-3">Criamos sua loja de supermercado online e já pronta para vender em até 24hs!</span>
								</div>
							</div>
							<div class="col-8 col-md-4 col-lg-4 mx-auto">
								<div class="owl-carousel custom-arrows-style-1 custom-left-pos-1 custom-background-1 m-0" data-plugin-options="{'items': 1, 'loop': true, 'dots': false, 'nav': true, 'autoplay': true, 'autoplayTimeout': 3000}">
									<div>
										<img src="{{ asset('img/em/criar-mercado-online-site-ecommerce.svg') }}" alt class="img-fluid" />
									</div>	
									<div>
										<img src="{{ asset('img/em/criar-mercado-online-site-ecommerce2.svg') }}" alt class="img-fluid" />
									</div>	
									<div>
										<img src="{{ asset('img/em/criar-mercado-online-site-ecommerce3.svg') }}" alt class="img-fluid" />
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
									Aplicativo exemplo dos nossos supermercados disponível na PlayStore!
									<span class="pt-0 text-2">Venha conferir como ficará o seu supermercado online.</span>
								</p>
							</div>
							<div class="col-lg-4 col-sm-4">
								<a href="#downloads" class="btn btn-primary custom-btn-style-1 text-uppercase font-weight-semibold float-md-right mt-1" data-hash data-hash-offset="62"><i class="icon-cloud-download icons mr-3"></i>BAIXE AGORA</a>
							</div>
						</div>
					</div>
				</div>

				<section id="key-features" class="section bg-color-light m-0 pb-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-12">
								<h2 class="custom-bar _center text-color-dark">Como funciona</h2>
							</div>
							<div class="col-12">
								<h4 class="font-weight-normal text-center">Assista ao vídeo e entenda como funciona a Espaço Mercado</h4>
							</div>

							<article class="post post-large mt-4">
								<div class="post-image">
									<iframe width="680" height="382" src="https://www.youtube.com/embed/87cUzG9k61E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</article>
						</div>
						<hr class="solid custom-tall">
					</div>
				</section>

                <section id="how-it-work" class="section bg-color-light m-0 pb-0 pt-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-10 col-lg-12 text-center text-lg-left">
								<div class="row justify-content-center">
									<div class="custom-wrap-icons">
										<div class="custom-box-icon">
											<svg version="1.1" id="sign-up" x="0px" y="0px" width="65px" height="65px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
												<path class="icon appear-animation" data-appear-animation="icons-anim" data-appear-animation-duration="1500ms" data-appear-animation-delay="500ms" fill="#F1645B" stroke="#F1645B" 
													d="M35.5,33.7H15.8c-0.5,0-1-0.4-1-1V20.3c0-0.5,0.4-1,1-1h4.7c0.2,0,0.4,0.2,0.4,0.4c0,0.2-0.2,0.4-0.4,0.4c0,0,0,0,0,0
														h-4.7c-0.1,0-0.2,0.1-0.2,0.2v12.4c0,0.1,0.1,0.2,0.2,0.2h19.7c0.1,0,0.2-0.1,0.2-0.2V20.3c0-0.1-0.1-0.2-0.2-0.2h-4.7
														c-0.2,0-0.4-0.2-0.4-0.4c0-0.2,0.2-0.4,0.4-0.4c0,0,0,0,0,0h4.7c0.5,0,1,0.4,1,1v12.4C36.4,33.2,36,33.7,35.5,33.7z
														M34.4,32.3H16.9c-0.4,0-0.7-0.3-0.7-0.7V21.4c0-0.4,0.3-0.7,0.7-0.7h3c0.2,0,0.4,0.2,0.4,0.4c0,0.2-0.2,0.4-0.4,0.4H17
														v10.1h17.2V21.5h-2.9c-0.2,0-0.4-0.2-0.4-0.4c0-0.2,0.2-0.4,0.4-0.4h3c0.4,0,0.7,0.3,0.7,0.7v10.3C35,32,34.7,32.3,34.4,32.3z
														M24.6,30.6h-6.5c-0.2,0-0.4-0.2-0.4-0.4c0,0,0,0,0,0c0-0.2,0.2-0.4,0.4-0.4h6.5c0.2,0,0.4,0.2,0.4,0.4 C25,30.4,24.8,30.6,24.6,30.6C24.6,30.6,24.6,30.6,24.6,30.6z
														M24.6,28.9h-6.5c-0.2,0-0.4-0.1-0.4-0.3c0-0.2,0.1-0.4,0.3-0.4c0,0,0.1,0,0.1,0h6.5c0.2,0,0.4,0.1,0.4,0.3 C25,28.7,24.9,28.9,24.6,28.9C24.6,28.9,24.6,28.9,24.6,28.9z
														M28.1,36.3h-5c-1,0-1.8-0.8-1.8-1.8l0,0c0-0.2,0.2-0.4,0.4-0.4s0.4,0.2,0.4,0.4c0,0,0,0,0,0c0,0.6,0.5,1,1,1h0h5
														c0.6,0,1-0.5,1-1c0-0.2,0.2-0.4,0.4-0.4s0.4,0.2,0.4,0.4c0,0,0,0,0,0C29.9,35.5,29.1,36.3,28.1,36.3z
														M34.4,37.5H16.9c-1.1,0-2.1-0.9-2.1-2.1v-0.8c0-0.2,0.2-0.4,0.4-0.4h6.5c0.2,0,0.4,0.2,0.4,0.4c0,0.6,0.5,1,1,1h0h5
														c0.6,0,1-0.5,1-1c0-0.2,0.2-0.4,0.4-0.4h6.5c0.2,0,0.4,0.2,0.4,0.4l0,0v0.8C36.4,36.5,35.5,37.5,34.4,37.5z M15.6,34.9v0.5
														c0,0.7,0.6,1.3,1.3,1.3l0,0h17.4c0.7,0,1.3-0.6,1.3-1.3l0,0v-0.5h-5.8c-0.2,0.8-0.9,1.4-1.8,1.4h-5c-0.8,0-1.6-0.6-1.8-1.4H15.6z
														M25.5,25.2c-0.1,0-0.2,0-0.2-0.1l-4-6.9c-0.9-1.5-0.9-3.4-0.1-4.9c0.8-1.5,2.3-2.5,4-2.5h0.3h0.3c1.7,0.1,3.2,1.1,4,2.6
														c0.8,1.5,0.8,3.4-0.1,4.9l-4,6.9C25.6,25.1,25.6,25.2,25.5,25.2z M25.5,11.1h-0.2c-1.5,0.1-2.9,1-3.6,2.3
														c-0.8,1.4-0.7,3.1,0.1,4.5l3.8,6.5l3.8-6.5c0.8-1.4,0.8-3.1,0.1-4.5c-0.7-1.4-2.1-2.2-3.6-2.3L25.5,11.1z
														M25.5,19.6c-2.2,0-4-1.8-4-4s1.8-4,4-4c2.2,0,4,1.8,4,4c0,0,0,0,0,0C29.4,17.8,27.7,19.6,25.5,19.6z M25.5,12.1
														c-1.9,0-3.5,1.6-3.5,3.5s1.6,3.5,3.5,3.5s3.5-1.6,3.5-3.5C29,13.7,27.4,12.1,25.5,12.1z
														M27.7,17.9h-4.5c-0.1,0-0.2-0.1-0.2-0.2v-3.8c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0h4.5c0.1,0,0.2,0.1,0.2,0.2c0,0,0,0,0,0 v3.8C28,17.8,27.9,17.9,27.7,17.9z M23.5,17.4h4v-3.3h-4V17.4z
														M27.4,15.1c-0.1,0-0.3,0-0.4-0.1c-0.2,0.1-0.5,0.1-0.7,0c-0.2,0.1-0.5,0.1-0.7,0c-0.2,0.1-0.5,0.1-0.7,0
														c-0.2,0.1-0.5,0.1-0.7,0c-0.1,0.1-0.2,0.1-0.4,0.1c-0.3,0-0.6-0.2-0.6-0.5c0-0.1,0.1-0.2,0.2-0.2c0.1,0,0.2,0.1,0.2,0.2
														c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0.1c0.1,0,0.1,0,0.1,0c0.1-0.1,0.3-0.2,0.4,0c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.3,0
														c0.1-0.1,0.3-0.2,0.4,0c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0c0.1,0,0.1,0,0.1,0c0.1-0.1,0.3-0.2,0.5,0c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0
														c0.1,0,0.1,0,0.1,0c0.1-0.1,0.3-0.2,0.4,0c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0c0,0,0.1,0,0.1,0c0.1-0.1,0.3-0.2,0.4,0c0,0,0,0,0,0
														c0,0,0.1,0.1,0.1,0c0.1,0,0.1,0,0.1-0.1c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0c0.1,0,0.2,0.1,0.2,0.2C28,14.9,27.7,15.1,27.4,15.1
														C27.4,15.1,27.4,15.1,27.4,15.1z M25.3,17.9h-1.2c-0.1,0-0.2-0.1-0.2-0.2v-2.1c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0h1.2c0.1,0,0.2,0.1,0.2,0.2c0,0,0,0,0,0
														v2.1C25.5,17.8,25.4,17.9,25.3,17.9z M24.3,17.4H25v-1.6h-0.7L24.3,17.4z
														M28,14.1h-5c-0.1,0-0.2-0.1-0.2-0.2c0-0.1,0.1-0.2,0.2-0.2h5c0.1,0,0.2,0.1,0.2,0.2C28.2,14,28.1,14.1,28,14.1z
														M27.7,16.8h-1.6c-0.1,0-0.2-0.1-0.2-0.2v-1c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0h1.6c0.1,0,0.2,0.1,0.2,0.2v1
														C28,16.7,27.9,16.8,27.7,16.8z M26.4,16.3h1.1v-0.5h-1.1V16.3z
														M28.9,25.2h-6.8c-0.1,0-0.2-0.1-0.2-0.2c0-0.1,0.1-0.2,0.2-0.2c0,0,0,0,0,0h6.8c0.1,0,0.2,0.1,0.2,0.2c0,0,0,0,0,0
														C29.1,25.1,29,25.2,28.9,25.2z"/>
												<circle class="icons-circle appear-animation" data-appear-animation="icons-circle-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="800" fill="none" stroke="#F1645B" stroke-width="2" stroke-miterlimit="50" cx="25.027" cy="25.092" r="24.062"/>
											</svg>
											<span class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="1500">Seu Supermercado Online</span>
										</div>

										<div class="custom-box-icon">
											<div class="wrap-dashed-lines">
												<svg version="1.1" id="connect-people" x="0px" y="0px" width="65px" height="65px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
													<path class="icon appear-animation" data-appear-animation="icons-anim" data-appear-animation-duration="3500ms" data-appear-animation-delay="700" fill="#F1645B" 
													d="M16,27.3c0,0-0.1,0-0.1,0l-3.3-0.9c-0.1,0-0.2-0.1-0.2-0.2c-0.1-0.1-0.1-0.2,0-0.3l2-7.5c0.1-0.2,0.3-0.3,0.5-0.3l3.3,0.9
														c0.1,0,0.2,0.1,0.2,0.2c0.1,0.1,0.1,0.2,0,0.3l-2,7.5C16.3,27.2,16.2,27.3,16,27.3z M13.2,25.7l2.5,0.7l1.8-6.7L15,19L13.2,25.7z
														M17.4,26.9c-0.3,0-0.5,0-0.8-0.1L16,26.6c-0.2-0.1-0.3-0.3-0.3-0.5l1.6-6c0.1-0.2,0.3-0.3,0.5-0.3l0.9,0.2
														c0.5,0.1,1,0.1,1.5,0l2.1-0.6c0.9-0.3,1.9-0.1,2.6,0.6l2.8,2.5c0.5,0.5,0.6,1.3,0.1,1.9c-0.4,0.5-1.1,0.6-1.7,0.2l-1.6-1
														c-0.4-0.3-1-0.3-1.4,0l-4.2,2.8C18.5,26.7,18,26.9,17.4,26.9z M16.7,25.9l0.2,0.1c0.5,0.2,1.1,0.1,1.6-0.2l4.2-2.8
														c0.7-0.5,1.6-0.5,2.3,0l1.6,1c0.2,0.2,0.5,0.1,0.7-0.1c0.2-0.2,0.1-0.5-0.1-0.7l-2.8-2.6c-0.5-0.5-1.2-0.6-1.8-0.4l-2.1,0.6
														c-0.6,0.2-1.3,0.2-1.9,0l-0.5-0.1L16.7,25.9z
														M32.5,27.3c-0.2,0-0.3-0.1-0.4-0.2c-0.1-0.2,0-0.4,0.2-0.5c0,0,0,0,0,0l1.6-0.8l-1.9-4.8l-1.2,0.2c-0.5,0.1-1,0-1.5-0.2
														l-3.2-1.1c-0.2-0.1-0.5-0.1-0.7,0l-1.2,0.5c-0.2,0.1-0.4,0.1-0.6-0.1c-0.1-0.2-0.1-0.4,0.1-0.6c0.1,0,0.1-0.1,0.2-0.1l1.2-0.5
														c0.4-0.2,0.9-0.2,1.3,0l3.1,1.1c0.4,0.1,0.8,0.2,1.1,0.1l1.5-0.2c0.2,0,0.4,0.1,0.4,0.3l2.2,5.4c0.1,0.2,0,0.4-0.2,0.5l-2,0.9
														C32.7,27.3,32.6,27.3,32.5,27.3z
														M32,29c-0.4,0-0.7-0.2-0.9-0.5l-0.7-1C30,27,30.1,26.3,30.7,26c0,0,0,0,0,0l0.2-0.2c0.5-0.4,1.2-0.2,1.5,0.3l0.7,1
														c0.4,0.5,0.2,1.2-0.3,1.5l-0.3,0.2C32.5,29,32.2,29,32,29z M31.5,26.4c-0.1,0-0.1,0-0.2,0.1l-0.3,0.2c-0.1,0.1-0.2,0.3-0.1,0.4
														l0.7,1c0.1,0.1,0.3,0.2,0.4,0.1l0.3-0.2c0.1-0.1,0.2-0.3,0.1-0.4l-0.7-1C31.7,26.4,31.6,26.4,31.5,26.4L31.5,26.4z
														M30.8,30.5c-0.1,0-0.1,0-0.2,0c-0.3-0.1-0.6-0.2-0.7-0.5L28,27.4c-0.2-0.2-0.2-0.6-0.2-0.9c0.1-0.3,0.2-0.6,0.5-0.7
														l0.3-0.2c0.2-0.2,0.6-0.2,0.9-0.2c0.3,0.1,0.6,0.2,0.7,0.5l1.8,2.6c0.4,0.5,0.2,1.2-0.3,1.6c0,0,0,0,0,0l-0.3,0.2
														C31.3,30.4,31.1,30.5,30.8,30.5z M29.3,26.2c-0.1,0-0.1,0-0.2,0.1l-0.3,0.2c-0.1,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.2,0.1,0.2l1.8,2.6
														c0,0.1,0.1,0.1,0.2,0.1c0.1,0,0.2,0,0.2-0.1l0.3-0.2c0.1-0.1,0.1-0.1,0.1-0.2c0-0.1,0-0.2-0.1-0.2l-1.8-2.6
														C29.5,26.2,29.4,26.2,29.3,26.2z
														M29,30.9c-0.1,0-0.1,0-0.2,0c-0.3-0.1-0.6-0.2-0.7-0.5l-1.4-1.9c-0.4-0.5-0.3-1.2,0.3-1.6c0,0,0,0,0,0l0.3-0.2
														c0.5-0.4,1.2-0.2,1.6,0.3l1.4,1.9c0.4,0.5,0.2,1.2-0.3,1.6c0,0,0,0,0,0l-0.3,0.2C29.4,30.9,29.2,30.9,29,30.9z M27.9,27.3
														c-0.1,0-0.1,0-0.2,0.1l-0.3,0.2c-0.1,0-0.1,0.1-0.1,0.2c0,0.1,0,0.2,0.1,0.3l1.4,1.9c0.1,0.1,0.3,0.2,0.5,0.1l0.3-0.2
														c0.1,0,0.1-0.1,0.1-0.2c0-0.1,0-0.2-0.1-0.2l-1.4-1.9C28.1,27.4,28,27.4,27.9,27.3L27.9,27.3z
														M27.3,31.9c-0.4,0-0.7-0.2-1-0.5l-1.1-1.6c-0.4-0.5-0.3-1.2,0.3-1.6c0,0,0,0,0,0l0.3-0.2c0.5-0.4,1.3-0.2,1.6,0.3l1.1,1.6
														c0.2,0.3,0.3,0.6,0.2,0.9c-0.1,0.3-0.2,0.6-0.5,0.8L28,31.7C27.8,31.8,27.6,31.9,27.3,31.9z M26.5,28.5c-0.1,0-0.1,0-0.2,0.1
														L26,28.8c-0.1,0.1-0.2,0.3-0.1,0.5l1.1,1.6c0.1,0.1,0.1,0.1,0.2,0.1c0.1,0,0.2,0,0.3-0.1l0.3-0.2c0.1-0.1,0.1-0.1,0.1-0.2
														c0-0.1,0-0.2-0.1-0.3l-1.1-1.6C26.7,28.6,26.6,28.6,26.5,28.5L26.5,28.5z
														M23.5,31.3c-0.6,0-1-0.5-1-1c0-0.4,0.2-0.7,0.5-0.9l1.1-0.6c0.2-0.1,0.4,0,0.5,0.2c0,0,0,0,0,0c0.1,0.2,0,0.4-0.2,0.6
														l-1.1,0.6c-0.1,0-0.1,0.1-0.1,0.1c0,0.1,0,0.1,0,0.2c0.1,0.1,0.2,0.1,0.3,0.1l2.1-0.9c0.2-0.1,0.4,0,0.6,0.1
														c0.1,0.2,0,0.4-0.1,0.6c0,0,0,0-0.1,0l-2.1,1C23.8,31.3,23.7,31.3,23.5,31.3z
														M21.9,30.7c-0.7,0-1.2-0.5-1.2-1.2c0-0.1,0-0.2,0-0.2c0.1-0.3,0.3-0.6,0.6-0.8l3.3-1.9c0.2-0.1,0.4,0,0.6,0.1
														c0.1,0.2,0,0.4-0.1,0.6c0,0,0,0,0,0l-3.3,1.9c-0.1,0.1-0.2,0.1-0.2,0.3c0,0.2,0.1,0.4,0.3,0.5c0.1,0,0.2,0,0.3,0l1.1-0.5
														c0.2-0.1,0.4-0.1,0.6,0.1c0.1,0.2,0.1,0.4-0.1,0.6c0,0-0.1,0-0.1,0l-1.1,0.5C22.3,30.7,22.1,30.7,21.9,30.7z
														M20.7,29.5c-0.1,0-0.2,0-0.3,0c-0.7-0.2-1.1-0.9-0.9-1.6c0.1-0.3,0.3-0.6,0.6-0.7l3.3-2c0.2-0.1,0.4-0.1,0.6,0.1
														s0.1,0.4-0.1,0.6l0,0l-3.3,2c-0.2,0.1-0.3,0.4-0.2,0.6c0.1,0.1,0.2,0.2,0.3,0.2c0.1,0,0.2,0,0.3,0l2.6-1.5c0.2-0.1,0.4,0,0.6,0.1
														c0,0,0,0,0,0c0.1,0.2,0,0.4-0.1,0.6l-2.6,1.5C21.2,29.5,21,29.5,20.7,29.5z
														M19.4,28.3c-0.1,0-0.2,0-0.4,0c-0.8-0.2-1.3-1-1.1-1.8c0.1-0.4,0.3-0.7,0.6-0.9l2.3-1.5c0.2-0.1,0.4-0.1,0.6,0.1
														s0.1,0.4-0.1,0.6L19,26.3c-0.3,0.2-0.4,0.6-0.2,0.9c0.1,0.2,0.2,0.3,0.4,0.3c0.2,0,0.4,0,0.5-0.1l1.3-0.8c0.2-0.1,0.4-0.1,0.6,0.1
														c0,0,0,0,0,0c0.1,0.2,0.1,0.4-0.1,0.6c0,0,0,0,0,0l-1.3,0.8C20,28.3,19.7,28.3,19.4,28.3z
														M34.9,27.2c-0.2,0-0.3-0.1-0.4-0.2l-0.4-0.8l-2.2-5.5l-0.3-0.9c-0.1-0.2,0-0.4,0.2-0.5l3.3-1.3c0.1,0,0.2,0,0.3,0
														c0.1,0,0.2,0.1,0.2,0.2l2.8,7.3c0,0.1,0,0.2,0,0.3c0,0.1-0.1,0.2-0.2,0.2L35,27.2C35,27.2,34.9,27.2,34.9,27.2z M32.7,20.3l2.4,6
														l2.5-1l-2.5-6.5l-2.6,1L32.7,20.3z"/>
													<circle class="icons-circle appear-animation" data-appear-animation="icons-circle-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="3000" fill="none" stroke="#F1645B" stroke-width="2" stroke-miterlimit="50" cx="25.027" cy="25.092" r="24.062"/>
												</svg>
												<span class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="3700">Conquiste mais clientes</span>
												<svg version="1.1" id="4" class="dashed-line _left" x="0px" y="0px" width="98.5px" height="26.5px" viewBox="0 0 98.5 26.5" enable-background="new 0 0 98.5 26.5" xml:space="preserve">
													<path class="line" data-appear-animation="line-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="2000" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="3,3" d="M4,16.93c0,0,40.589-36.872,83.192,1.084"/>
													<path class="line-mask" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-dasharray="3,3" d="M4,16.93c0,0,40.589-36.872,83.192,1.084"/>
													<circle class="circle appear-animation" data-appear-animation="line-circle-anim" data-appear-animation-duration="700ms" data-appear-animation-delay="2700" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="3,3" cx="91.01" cy="21.014" r="4.627"/>
													<circle class="circle-mask" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-dasharray="3,3" cx="91.01" cy="21.014" r="4.627"/>
												</svg>
												<svg version="1.1" id="dashed-line-2" class="dashed-line _right" x="0px" y="0px" width="98.5px" height="26.5px" viewBox="0 0 98.5 26.5" enable-background="new 0 0 98.5 26.5" xml:space="preserve">
													<path class="line" data-appear-animation="line-anim" data-appear-animation-duration="1s" data-appear-animation-delay="4000" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="3,3" d="M4,9.57c0,0,40.589,36.871,83.192-1.084"/>
													<path class="line-mask" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-dasharray="3,3" d="M4,9.57c0,0,40.589,36.871,83.192-1.084"/>
													<circle class="circle appear-animation" data-appear-animation="line-circle-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="4700" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="3,3" cx="91.01" cy="5.486" r="4.627"/>
													<circle class="circle-mask" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-dasharray="3,3" cx="91.01" cy="5.486" r="4.627"/>
												</svg>
											</div>
										</div>

										<div class="custom-box-icon">
											<div class="wrap-dashed-lines">
												<svg version="1.1" id="share" x="0px" y="0px" width="65px" height="65px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
													<path class="icon appear-animation" data-appear-animation="icons-anim" data-appear-animation-duration="3000ms" data-appear-animation-delay="3500" fill="#F1645B" 
													d="M27.9,25.4c-0.2,0-0.4-0.2-0.4-0.4c0,0,0,0,0,0v-3.6c0-0.2,0.2-0.4,0.4-0.4s0.4,0.2,0.4,0.4V25
														C28.3,25.2,28.1,25.4,27.9,25.4C27.9,25.4,27.9,25.4,27.9,25.4z
														M25.6,17.3c-1.2,0-2.1-0.9-2.1-2.1s0.9-2.1,2.1-2.1c1.2,0,2.1,0.9,2.1,2.1c0,0,0,0,0,0C27.7,16.4,26.7,17.3,25.6,17.3z
														M25.6,13.9c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3c0.7,0,1.3-0.6,1.3-1.3c0,0,0,0,0,0C26.8,14.5,26.3,13.9,25.6,13.9z
														M23.3,25.4c-0.2,0-0.4-0.2-0.4-0.4c0,0,0,0,0,0v-3.6c0-0.2,0.2-0.4,0.4-0.4s0.4,0.2,0.4,0.4V25
														C23.7,25.2,23.5,25.4,23.3,25.4C23.3,25.4,23.3,25.4,23.3,25.4z
														M27.9,35h-1.7c-0.2,0-0.4-0.2-0.4-0.4v-7.1c0,0,0-0.1-0.1-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.1,0.1-0.1,0.2v7
														c0,0.2-0.2,0.4-0.4,0.4h-1.7c-0.2,0-0.4-0.2-0.4-0.4c0,0,0,0,0,0V25c0-0.2,0.2-0.4,0.4-0.4s0.4,0.2,0.4,0.4l0,0v9.2h0.9v-6.6
														c0-0.5,0.3-0.9,0.8-1c0.3,0,0.6,0,0.8,0.2c0.2,0.2,0.3,0.5,0.3,0.7v6.7h0.9V25c0-0.2,0.2-0.4,0.4-0.4c0.2,0,0.4,0.2,0.4,0.4l0,0
														v9.6C28.3,34.8,28.1,35,27.9,35C27.9,35,27.9,35,27.9,35z
														M23.3,26.2h-1.6c-0.2,0-0.4-0.2-0.4-0.4v-5.2c0-1.4,1.1-2.6,2.5-2.8c0.2-0.1,0.5,0.1,0.5,0.3s-0.1,0.5-0.3,0.5
														c0,0-0.1,0-0.1,0c-1,0.1-1.7,0.9-1.7,1.9v4.8h0.8v-2.7c0-0.2,0.2-0.4,0.4-0.4s0.4,0.2,0.4,0.4v3.1C23.7,26,23.5,26.2,23.3,26.2
														C23.3,26.2,23.3,26.2,23.3,26.2z
														M29.5,26.2h-1.6c-0.2,0-0.4-0.2-0.4-0.5c0-0.2,0.2-0.4,0.4-0.4H29v-4.8c0-1-0.7-1.8-1.7-1.9c-0.2,0-0.4-0.2-0.4-0.4
														c0-0.2,0.2-0.4,0.4-0.4c0,0,0.1,0,0.1,0c1.4,0.2,2.5,1.3,2.5,2.8v5.2C29.9,26,29.7,26.2,29.5,26.2C29.5,26.2,29.5,26.2,29.5,26.2z

														M35.2,19.5c-0.8,0-1.4-0.6-1.4-1.3c0-0.2,0.2-0.4,0.5-0.4c0.2,0,0.4,0.2,0.4,0.4c0,0.3,0.2,0.6,0.5,0.6
														c0.3,0,0.6-0.2,0.6-0.5c0-0.3-0.2-0.6-0.5-0.6c0,0,0,0-0.1,0c-0.7,0-1.3-0.7-1.3-1.4c0-0.7,0.7-1.3,1.4-1.3c0.7,0,1.3,0.6,1.3,1.3
														c0,0.2-0.2,0.4-0.5,0.4c-0.2,0-0.4-0.2-0.4-0.4c0-0.3-0.2-0.6-0.5-0.6c-0.3,0-0.6,0.2-0.6,0.5c0,0.3,0.2,0.6,0.5,0.6
														c0,0,0,0,0.1,0c0.7,0,1.4,0.5,1.4,1.3s-0.5,1.4-1.3,1.4C35.4,19.5,35.3,19.5,35.2,19.5z
														M35.2,20.8c-2,0-3.6-1.6-3.6-3.6c0-2,1.6-3.6,3.6-3.6s3.6,1.6,3.6,3.6v0C38.8,19.2,37.2,20.8,35.2,20.8z M35.2,14.5
														c-1.5,0-2.7,1.2-2.7,2.7c0,1.5,1.2,2.7,2.7,2.7c1.5,0,2.7-1.2,2.7-2.7C38,15.7,36.8,14.5,35.2,14.5C35.2,14.5,35.2,14.5,35.2,14.5
														L35.2,14.5z
														M35.2,32.5c-0.8,0-1.4-0.6-1.4-1.3c0-0.2,0.1-0.4,0.4-0.5c0.2,0,0.4,0.1,0.5,0.4c0,0,0,0.1,0,0.1c0,0.3,0.2,0.6,0.5,0.6
														c0.3,0,0.6-0.2,0.6-0.5c0-0.3-0.2-0.6-0.5-0.6c0,0,0,0-0.1,0c-0.7,0-1.3-0.7-1.3-1.4c0-0.7,0.7-1.3,1.4-1.3c0.7,0,1.3,0.6,1.3,1.3
														c0,0.2-0.2,0.4-0.5,0.4c-0.2,0-0.4-0.2-0.4-0.4c0-0.3-0.2-0.6-0.5-0.6c-0.3,0-0.6,0.2-0.6,0.5s0.2,0.6,0.5,0.6c0,0,0,0,0.1,0
														c0.7,0,1.3,0.6,1.3,1.3C36.6,31.9,36,32.5,35.2,32.5z
														M35.2,33.8c-2,0-3.6-1.6-3.6-3.6c0-2,1.6-3.6,3.6-3.6c2,0,3.6,1.6,3.6,3.6c0,0,0,0,0,0C38.8,32.2,37.2,33.8,35.2,33.8z
														M35.2,27.5c-1.5,0-2.7,1.2-2.7,2.7c0,1.5,1.2,2.7,2.7,2.7c1.5,0,2.7-1.2,2.7-2.7C38,28.7,36.8,27.5,35.2,27.5L35.2,27.5z
														M32.1,30.7c-0.1,0-0.1,0-0.2-0.1L29,29.1c-0.2-0.1-0.3-0.4-0.2-0.6c0.1-0.2,0.4-0.3,0.6-0.2c0,0,0,0,0,0l2.9,1.5
														c0.2,0.1,0.3,0.4,0.2,0.6C32.4,30.6,32.3,30.7,32.1,30.7z
														M30.2,18.6c-0.2,0-0.4-0.2-0.4-0.4c0-0.2,0.1-0.3,0.2-0.4l1.9-1c0.2-0.1,0.5,0,0.6,0.2c0.1,0.2,0,0.4-0.2,0.5l-1.9,1
														C30.3,18.6,30.2,18.6,30.2,18.6z
														M15.9,19.5c-0.8,0-1.4-0.6-1.4-1.4c0-0.2,0.2-0.4,0.5-0.4c0.2,0,0.4,0.2,0.4,0.4c0,0.3,0.2,0.6,0.5,0.6
														c0.3,0,0.6-0.2,0.6-0.5c0-0.3-0.2-0.6-0.5-0.6c0,0,0,0-0.1,0c-0.7,0-1.3-0.7-1.3-1.4s0.7-1.3,1.4-1.3c0.7,0,1.3,0.6,1.3,1.3
														c0,0.2-0.2,0.4-0.5,0.4c-0.2,0-0.4-0.2-0.4-0.4c0-0.3-0.2-0.6-0.5-0.6c-0.3,0-0.6,0.2-0.6,0.5c0,0.3,0.2,0.6,0.5,0.6
														c0,0,0,0,0.1,0c0.7,0,1.4,0.5,1.4,1.3c0,0.7-0.5,1.4-1.3,1.4C16,19.5,16,19.5,15.9,19.5L15.9,19.5z
														M15.9,20.8c-2,0-3.6-1.6-3.6-3.6c0-2,1.6-3.6,3.6-3.6s3.6,1.6,3.6,3.6C19.5,19.2,17.9,20.8,15.9,20.8z M15.9,14.5
														c-1.5,0-2.7,1.2-2.7,2.7s1.2,2.7,2.7,2.7s2.7-1.2,2.7-2.7C18.6,15.7,17.4,14.5,15.9,14.5C15.9,14.5,15.9,14.5,15.9,14.5L15.9,14.5
														z
														M15.9,32.5c-0.8,0-1.4-0.6-1.4-1.4c0-0.2,0.1-0.4,0.4-0.5c0.2,0,0.4,0.1,0.5,0.4c0,0,0,0.1,0,0.1c0,0.3,0.2,0.6,0.5,0.6
														c0.3,0,0.6-0.2,0.6-0.5c0-0.3-0.2-0.6-0.5-0.6c0,0,0,0-0.1,0c-0.7,0-1.3-0.7-1.3-1.4c0-0.7,0.7-1.3,1.4-1.3c0.7,0,1.3,0.6,1.3,1.3
														c0,0.2-0.2,0.4-0.5,0.4c-0.2,0-0.4-0.2-0.4-0.4c0-0.3-0.2-0.6-0.5-0.6c-0.3,0-0.6,0.2-0.6,0.5c0,0.3,0.2,0.6,0.5,0.6
														c0,0,0,0,0.1,0c0.7,0,1.3,0.6,1.3,1.3S16.7,32.5,15.9,32.5L15.9,32.5z
														M15.9,33.8c-2,0-3.6-1.6-3.6-3.6s1.6-3.6,3.6-3.6c2,0,3.6,1.6,3.6,3.6C19.5,32.2,17.9,33.8,15.9,33.8z M15.9,27.5
														c-1.5,0-2.7,1.2-2.7,2.7c0,1.5,1.2,2.7,2.7,2.7s2.7-1.2,2.7-2.7l0,0C18.6,28.7,17.4,27.5,15.9,27.5L15.9,27.5z
														M19,30.7c-0.2,0-0.3-0.1-0.4-0.2c-0.1-0.2,0-0.5,0.2-0.6c0,0,0,0,0,0l2.9-1.5c0.2-0.1,0.5,0,0.6,0.2c0,0,0,0,0,0
														c0.1,0.2,0,0.5-0.2,0.6l-2.9,1.5C19.2,30.7,19.1,30.7,19,30.7z
														M21,18.6c-0.1,0-0.1,0-0.2,0l-1.9-1c-0.2-0.1-0.3-0.4-0.2-0.6c0.1-0.2,0.4-0.3,0.6-0.2l1.9,1c0.2,0.1,0.3,0.4,0.2,0.6
														C21.3,18.6,21.1,18.6,21,18.6z"/>
													<circle class="icons-circle appear-animation" data-appear-animation="icons-circle-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="5300" fill="none" stroke="#F1645B" stroke-width="2" stroke-miterlimit="50" cx="25.027" cy="25.092" r="24.062"/>
												</svg>
												<span class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="5800">Fature mais</span>
											</div>
										</div>

										<div class="custom-box-icon">
											<div class="wrap-dashed-lines">
												<svg version="1.1" id="share2" x="0px" y="0px" width="65px" height="65px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
													<path class="icon appear-animation" data-appear-animation="icons-anim" data-appear-animation-duration="3000ms" data-appear-animation-delay="5500" fill="#F1645B" 
													d="M38.3,34.1H13.9c-0.2,0-0.4-0.1-0.4-0.4s0.1-0.4,0.4-0.4c0,0,0.1,0,0.1,0h24.4c0.2,0,0.4,0.1,0.4,0.4
														c0,0.2-0.1,0.4-0.4,0.4C38.4,34.1,38.4,34.1,38.3,34.1L38.3,34.1z
														M38.3,36.1H13.9c-0.2,0-0.4-0.1-0.4-0.4s0.1-0.4,0.4-0.4c0,0,0.1,0,0.1,0h24.4c0.2,0,0.4,0.1,0.4,0.4
														c0,0.2-0.1,0.4-0.4,0.4C38.4,36.1,38.4,36.1,38.3,36.1L38.3,36.1z
														M19.2,34.1h-3.7c-0.2,0-0.4-0.2-0.4-0.4V22.9c0-0.2,0.2-0.4,0.4-0.4h3.7c0.2,0,0.4,0.2,0.4,0.4v10.8
														C19.6,33.9,19.4,34.1,19.2,34.1z M15.9,33.3h2.9v-10h-2.9V33.3z
														M25.1,34.1h-3.7c-0.2,0-0.4-0.2-0.4-0.4V20c0-0.2,0.2-0.4,0.4-0.4c0,0,0,0,0,0h3.7c0.2,0,0.4,0.2,0.4,0.4l0,0v13.7
														C25.5,33.9,25.3,34.1,25.1,34.1z M21.8,33.3h2.9V20.4h-2.9V33.3z
														M31,34.1h-3.7c-0.2,0-0.4-0.2-0.4-0.4V21.5c0-0.2,0.2-0.4,0.4-0.4H31c0.2,0,0.4,0.2,0.4,0.4v12.2
														C31.4,33.9,31.2,34.1,31,34.1z M27.7,33.3h2.9V21.9h-2.9V33.3z
														M36.9,34.1h-3.7c-0.2,0-0.4-0.2-0.4-0.4V16c0-0.2,0.2-0.4,0.4-0.4h3.7c0.2,0,0.4,0.2,0.4,0.4v17.7
														C37.3,33.9,37.1,34.1,36.9,34.1z M33.6,33.3h2.9V16.4h-2.9V33.3z
														M12.2,19.9L12.2,19.9c-0.1-0.2,0-0.5,0.2-0.6L24.6,13c0.2-0.1,0.3-0.1,0.5,0l3.5,2.5c0.2,0.1,0.5,0.1,0.6-0.1l5.4-5.4
														c0.2-0.2,0.5-0.2,0.7,0l0,0c0.2,0.2,0.2,0.5,0,0.7c0,0,0,0,0,0l-5.9,6c-0.2,0.2-0.4,0.2-0.6,0.1L25,14.1c-0.1-0.1-0.3-0.1-0.5,0
														l-11.7,6C12.6,20.2,12.3,20.1,12.2,19.9C12.2,19.9,12.2,19.9,12.2,19.9z"/>
													<circle class="icons-circle appear-animation" data-appear-animation="icons-circle-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="7300" fill="none" stroke="#F1645B" stroke-width="2" stroke-miterlimit="50" cx="25.027" cy="25.092" r="24.062"/>
												</svg>
												<span class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="6800">Decole sua empresa</span>
												<svg version="1.1" id="5" class="dashed-line _left" x="0px" y="0px" width="98.5px" height="26.5px" viewBox="0 0 98.5 26.5" enable-background="new 0 0 98.5 26.5" xml:space="preserve">
													<path class="line" data-appear-animation="line-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="6500" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="3,3" d="M4,16.93c0,0,40.589-36.872,83.192,1.084"/>
													<path class="line-mask" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-dasharray="3,3" d="M4,16.93c0,0,40.589-36.872,83.192,1.084"/>
													<circle class="circle appear-animation" data-appear-animation="line-circle-anim" data-appear-animation-duration="700ms" data-appear-animation-delay="7000" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="3,3" cx="91.01" cy="21.014" r="4.627"/>
													<circle class="circle-mask" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-dasharray="3,3" cx="91.01" cy="5.486" r="4.627"/>
												</svg>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="col-12">
                                <hr class="solid custom-tall">
                            </div>
						</div>
					</div>
				</section>

                <section id="key-features2" class="section bg-color-light m-0 pt-0 pb-0">
					<div class="container">
						<div class="row mb-5 pb-5 justify-content-center">
							<div class="col-lg-5 text-center">
								<img src="{{ asset('img/em/mercado-1.png') }}" data-appear-animation="fadeInLeft" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
							</div>
							<div class="col-md-10 col-lg-7 text-center text-lg-left">
								<h2 class="custom-bar _left text-color-dark">Quer criar um site para ter seu supermercado online?</h2>
								<h4 class="font-weight-normal">A Espaço Mercado é especialista em e-commerce para o setor supermercadista e oferecemos uma solução completa e integrada para a sua loja!</h4>
							</div>
						</div>
						<div class="row mb-5 pb-5 justify-content-center">
							<div class="col-md-10 col-lg-7 order-2 order-lg-1 text-center text-lg-right">
								<h2 class="custom-bar _right text-color-dark">Site e app para Android e iOS</h2>
								<h4 class="font-weight-normal">Tenha seu site e app em Android e iOS exclusivo para seu supermercado com o melhor custo benefício do mercado!</h4>
							</div>
							<div class="col-lg-5 order-1 order-lg-2 text-center">
								<img src="{{ asset('img/em/mercado-2.png') }}" data-appear-animation="fadeInRight" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
							</div>
						</div>
						<div class="row mb-5 pb-5 justify-content-center">
							<div class="col-lg-5 text-center">
								<img src="{{ asset('img/em/mercado-3.png') }}" data-appear-animation="fadeInLeft" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
							</div>
							<div class="col-md-10 col-lg-7 text-center text-lg-left">
								<h2 class="custom-bar _left text-color-dark">+100 mil produtos categorizados</h2>
								<h4 class="font-weight-normal">Oferecemos a melhor solução de vendas integrada com seu sistema e com mais de 100 mil produtos categorizados e imagens além de app exclusivo para a sua loja online! </h4>
							</div>
						</div>
                        <div class="row mb-5 pb-5 justify-content-center">
							<div class="col-md-10 col-lg-7 order-2 order-lg-1 text-center text-lg-right">
								<h2 class="custom-bar _right text-color-dark">Venda mais com um supermercado online</h2>
								<h4 class="font-weight-normal">Não importa o tamanho do seu negócio. Nos preocupamos com tudo do seu site para que você venda ainda mais online!</h4>
							</div>
							<div class="col-lg-5 order-1 order-lg-2 text-center">
								<img src="{{ asset('img/demos/app-landing/product/features-product-image-2.png') }}" data-appear-animation="fadeInRight" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
							</div>
						</div>
						
						<hr class="solid custom-tall">
					</div>
				</section>

                <section class="section bg-color-light m-0 pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="custom-bar _center text-color-dark">Funcionalidades que a sua loja online terá com a Espaço Mercado</h2>
                            </div>
							<div class="col-12 mb-4">
								<h2 class="custom-bar _center text-color-dark h4">Sistema e Infra Estrutura</h2>
							</div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-calendar-check text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Apenas mensalidade</h4>
                                        <p>Cobrança simplificada e sem surpresas! Pague um valor único mensal, sem cobranças adicionais por pedidos, comissões ou taxas extras, apenas uma mensalidade de valor fixo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-mobile-alt text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Aplicativo Personalizado</h4>
                                        <p>Já pensou em oferecer aos seus clientes um aplicativo próprio personalizado de sua loja online em Android e IOS? Com a nossa tecnologia, você tem todos os recursos para personalizar o visual e as funcionalidades do seu app de forma exclusiva com a cara da sua loja.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-cloud-upload-alt text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Website e hospedagem</h4>
                                        <p>Nós fazemos a gestão da hospedagem do seu site! Tenha sua página exclusiva de delivery completo e vendas online. Seus clientes poderão fazer compras de forma segura e fácil, 24 horas por dia, 7 dias na semana.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-users-cog text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Manutenção e melhorias constantes</h4>
                                        <p>Fazemos toda a gestão e a manutenção do seu sistema. A nossa equipe de desenvolvimento está constantemente à procura de novas tecnologias além de disponibilizar novas funcionalidades proporcionando uma plataforma robusta cada vez mais completa. Usufrua de tudo isso sem custo adicional!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-wrench text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Domínio próprio</h4>
                                        <p>Se você já tem um domínio próprio, não se preocupe. Você conseguirá utilizá-lo junto com a sua loja online. Fazemos toda essa configuração pra você.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-network-wired text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Visitas ilimitadas</h4>
                                        <p>Receba o máximo de clientes possíveis no seu site e app sem custo adicional ou limitação de quantidade. Nosso objetivo é fazer com que você venda mais!</p>
                                    </div>
                                </div>
                            </div>
							<div class="container text-center mb-5">
								<button type="button" id="verMaisFuncionalidades1" class="btn custom-btn-style-1 text-color-light m-auto">Ver Mais <i class="fas fa-chevron-right ml-1 rotate-reset"></i></button>
							</div>
							<div class="row div-mais-sistema-e-infra mt-3">
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-users text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Responsividade</h4>
											<p>Com a nossa tecnologia, você pode vender online com uma interface de fácil acesso e design responsivo que se adapta perfeitamente a dispositivos como: tablets, celulares, televisões, pc, desktop, dentre outros. E ainda oferece uma compra prática e amigável ao seu cliente.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-palette text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Layout customizável</h4>
											<p>Altere o design de sua loja virtual e deixe ela com a mesma cara da sua loja física!</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-sitemap text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Integração de produtos</h4>
											<p>Realizamos a integração do nosso sistema com seu sistema atual de ERP. Isso fará com que sua loja online fique em sincronia com a loja física. Tudo o que acontece em sua loja física será refletido na loja online e vice-versa como exemplo as atualizações de preços e quantidade de produtos em estoque, promoções e novos produtos.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-magic text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Mais de 100 mil produtos cadastrados</h4>
											<p>Oferecemos mais de 100 mil itens já padronizados com imagem, nome, descrição, código de barras e categoria. Você não precisará cadastrar nada! E não se preocupe, caso você mesmo queira fazer os cadastros, a plataforma é flexível e permitirá que você cadastre quantos produtos quiser!</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-tags text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Cadastro de Produtos Ilimitados</h4>
											<p>Você pode ter quantos produtos quiser na plataforma sem pagar nada além por isso!</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-search text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Ferramenta de Pesquisa inteligente Auto-Complete</h4>
											<p>Ofereça mais facilidade para quem compra em seu app ou loja online. Nossa plataforma auto completa a descrição do que o cliente está digitando durante uma pesquisa aumentando a interação com o cliente e proporcionando uma experiência de compra diferenciada e mais ágil.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-globe-americas text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Ferramenta de Pesquisa inteligente Palavra Chave</h4>
											<p>Crie a vontade palavras chave relacionadas a produtos específicos da loja, isso fará com que os clientes encontrem o que estão precisando com mais facilidade ou exibindo produtos que eles não pensariam em comprar. Com esse recurso seu app potencializa a conversão de  vendas, deixando para trás a concorrência.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-store text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Direcionamento de pedidos pra uma loja mais próxima</h4>
											<p>Você possui uma rede com mais de uma loja? Nossa plataforma permite com que você tenha várias lojas ligadas a uma única rede, assim você pode trabalhar na divulgação de um único domínio (endereço do site) para todos os seus clientes, independente de onde eles estejam localizados.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-barcode text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Separação de produtos via leitor de código de barras</h4>
											<p>Acabe com os erros de operação durante a coleta de produtos do carrinho de compras. Utilize nosso app exclusivo para a leitura do código de barras proporcionando a coleta dos produtos muito mais fácil e acertiva. Ganhe tempo de operação e elimine os erros e prejuízos.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-percentage text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Crie suas próprias promoções</h4>
											<p> Defina frete grátis para um determinado valor de compras por um período definido; <br>
												Crie promoções por tempo determinado para vários produtos; <br>
												Destaque os produtos estratégicos na página principal de sua loja.
											</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-user-cog text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Plataforma de gestão de pedidos</h4>
											<p>Disponibilizamos um painel de gestão da loja fácil e intuitivo, que pode ser acessado pela web em desktops, tablets ou celulares! Não é necessário fazer download ou instalar nada no seu computador.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-bell text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Notificações de pedidos</h4>
											<p>Não precisa alguém monitorar pedidos o dia todo! Quando um pedido chega, uma notificação visual e sonora é enviada para o computador da loja e por e-mail. Assim quem está na frente de loja ou na gestão do ecommerce será facilmente alertado.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fab fa-whatsapp text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Notificações de pedidos para a loja pelo whatsapp</h4>
											<p>Organização é fundamental para o sucesso de qualquer negócio! Além de poder acessar a relação de pedidos pelo painel administrativo ou por email, disponibilizamos também a opção de notificações das vendas pelo whatsapp. Assim você terá o controle de todos os seus pedidos em tempo real sem deixar passar nada!</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-comment text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Notificação de pedidos para os clientes pelo whatsapp</h4>
											<p>Nada melhor que comunicar seus clientes automaticamente pelo whatsapp não acha? Disponibilizamos a opção de notificação dos status do pedido pelo whatsapp, assim você melhora a comunicação com o cliente, evitando falhas e retrabalhos. Alem disso, impacte os clientes com novidades e promoções de produtos quando quiser.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-envelope text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Acompanhamento do status do pedido</h4>
											<p>Notifique o cliente em tempo real durante todas as etapas do processo de vendas, desde a realização do pedido até o recebimento dos produtos.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-user-cog text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Defina como quer vender seus produtos</h4>
											<p>A plataforma da Espaço Mercado possui uma vasta relação de produtos sem códigos de barras como os de hortifruti ou açougue com categorias, descrições e imagens personalizadas. Além disso você terá flexibilidade em escolher se quer vender seus produtos por kg, por unidade com peso aproximado ou simplesmente pela unidade.</p>
										</div>
									</div>
								</div>
								<div class="col-12 mb-4">
									<h2 class="custom-bar _center text-color-dark h4">Integração com Meios de Pagamento</h2>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-money-bill-wave text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Pagamento via Picpay</h4>
											<p>Um dos meios de pagamento mais utilizados na atualidade e você não pode ficar fora desta né? Oferecemos a opção de utilização do Picpay integrado a sua loja. Mais facilidade e comodidade pra quem compra!</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-money-check-alt text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Pagamento via Mercado Pago</h4>
											<p>Aliado ao Mercado Livre, também reconhecido por ser um meio de pagamento com bastante benefícios como cashback e descontos. Oferecemos a opção de utilização do Mercado Pago integrado a sua loja. Mais facilidade e comodidade pra quem compra!</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-hand-holding-usd text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Pagamento via PIX</h4>
											<p>Receba pagamentos pelo PIX de sua loja e acompanhe os status de pagamento através do seu dashboard.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-credit-card text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Pagamento via boleto e cartão de crédito</h4>
											<p>Disponibilize um meio de pagamento online por boleto ou cartão de crédito, a vista ou parcelado, com as principais bandeiras de cartão de crédito do mercado. Seus clientes terão a possibilidade de pagar da forma como quiserem!</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 mb-4 mt-5">
								<h2 class="custom-bar _center text-color-dark h4">Marketing Digital e Integração com Redes Sociais</h2>
							</div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fab fa-searchengin text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Otimizações para Google (SEO)</h4>
                                        <p>Ter uma página sendo exibida nos primeiros resultados de pesquisa do Google é fundamental para o sucesso do seu negócio. Hoje cerca de 95% das pessoas utilizam o Google para fazerem suas buscas na internet.
											<br>
											Nós oferecemos muito mais que simplesmente um app e uma página de vendas online. Você terá incluído em nossos serviços a otimização de sua página para que apareça nos resultados de pesquisas no Google de forma orgânica, sem investimentos extras, com o foco na região onde atua e tipo de loja.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-percent text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Cupom de desconto</h4>
                                        <p>Trabalhar o marketing digital é fundamental para se ter sucesso nas vendas online, para isso desenvolvemos uma ferramenta exclusiva para a utilização nas campanhas promocionais onde você mesmo poderá criar cupons de desconto e enviar para a captura de novos clientes!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-users text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Noficiações Push</h4>
                                        <p>Envie notificações Push para o aplicativo dos clientes. Aumente as vendas de seus produtos e atinja mais clientes com notificações personalizadas!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-mail-bulk text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">E-mail Marketing Integrado</h4>
                                        <p>Programe o envio recorrente de emails com os produtos que quiser! Escolha diversos temas específicos, defina o período de início e fim das camapanhas e a frequência de envios! Tudo isso numa única ferramenta, você não precisará se preocupar em contratar nenhum sistema de disparo de emails para fazer isso para você. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-tag text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Integração com o Google Tag Manager</h4>
                                        <p>Criamos uma interface de comunicação com campanhas de marketing entre sua loja e app e qualquer outra ferramenta de rastreamento na web. Através do Google tag manager integrado à plataforma, você conseguirá rastrear e monitorar qualquer campanha de marketing digital.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-chart-line text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Integração Google Analytics</h4>
                                        <p>Saiba quantas pessoas acessam pelo seu site e app em tempo real, por seguimentação, região e muito mais! Nossa plataforma é integrada com o Google Analytics, assim você consegue usufruir de todos os benefícios que essa ferramenta de análise consegue oferecer.</p>
                                    </div>
                                </div>
                            </div>
							<div class="container text-center mb-5">
								<button type="button" id="verMaisFuncionalidades3" class="btn custom-btn-style-1 text-color-light m-auto">Ver Mais <i class="fas fa-chevron-right ml-1 rotate-reset"></i></button>
							</div>
							<div class="row div-mais-marketing-digital mt-3">
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fab fa-facebook-f text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Integração Facebook Ads</h4>
											<p>Conecte facilmente suas campanhas de facebook ads a sua página e app!</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fab fa-whatsapp text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Integração WhatsApp</h4>
											<p>Disponibilize em seu app ou site um canal via whatsapp para que seus clientes falem com você quando quiserem.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-comments text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Integração com Chat on-line</h4>
											<p>Disponibilize em seu app e site um canal de chat para que seus clientes falem com você quando quiserem. Configure bots (robos) ou tenha colaboradores disponíveis para atendimento online de seus clientes. Você poderá usar qualquer ferramenta de chat, como o jivochat, tawk.to, tidio e muitos outros.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fab fa-instagram text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Integração com o Facebook e Instagram</h4>
											<p>Disponibilizamos uma conexão com o facebook e instagram de sua loja! Você poderá manter todos os produtos de sua loja online sincronizados com suas contas do facebook e instagram.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-paint-brush text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Mídias digitais para Instagram, Facebook e Whatsapp</h4>
											<p>Fornecemos frequentemente material digital padronizado para a divulgação em suas redes sociais. Potencialize ainda mais seu time de marketing.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class="fas fa-photo-video text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Encarte Digital</h4>
											<p>Já pensou em levar seus produtos aos seus clientes através do celular e ainda reduzir seus custos com papel e serviços? Faça o envio recorrente e programado de seus encartes ou tabloides aos seus clientes diretamente por notificação pelo seu app!</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<div class="feature-box-icon">
											<i class=" text-color-primary"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="font-weight-bold mb-2">Envio de mensagens automáticas de re-marketing</h4>
											<p>Configure o tempo para o envio de mensagens automáticas aos clientes que compraram determinados produtos. Impacte mais clientes com essa ferramenta poderosa de recorrência e re-marketing.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 mb-4 mt-5">
								<h2 class="custom-bar _center text-color-dark h4">Integração com Market Places, Parceiros e Programas de Fidelidade</h2>
							</div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-newspaper text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Tindeo</h4>
                                        <p>A Tindeo é uma plataforma líder global em catálogos, folhetos e cupons digitais com mais de 75 milhões de usuários, que dispõe de uma poderosa ferramenta de SEO e que promove diversas campanhas de promoções pagas pela empresa. Você conseguirá expor seus produtos, suas promoções e ofertas de forma muito mais dinâmica com mais resultados.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-cart-plus text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Integração com Market Place Ifood</h4>
                                        <p>Participe de um dos principais market places do Brasil! Estamos integrados com o Ifood, assim todos os produtos que disponibilizar na plataforma estarão sincronizados com o ifood também! Sua loja aparecerá para muito mais pessoas além de reforçar ainda mais sua classificação nas pesquisas orgânicas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class=" text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Integração com Market Place Rappi</h4>
                                        <p>Participe de um dos principais market places do Brasil! Estamos integrados com o Rappi, assim todos os produtos que disponibilizar na plataforma estarão sincronizados com o Rappi também! Sua loja aparecerá para muito mais pessoas além de reforçar ainda mais sua classificação nas pesquisas orgânicas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class=" text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Integração com Market Place Magazine Luiza</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class=" text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Integração com Market Place Mercado Livre</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fab fa-cc-amex text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Integração com programa de fidelidade AME</h4>
                                        <p>Fidelize os clientes de sua loja num dos maiores programas de fidelidade  do Brasil. Pertencentes ao grupo B2W, o programa de fidelidade AME é utilizado atualmente por milhões de pessoas em todo o país.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fab fa-medium-m text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Integração com programa de fidelidade Meliuz</h4>
                                        <p>Fidelize os clientes de sua loja num dos maiores programas de fidelidade  do Brasil, o programa de fidelidade Meliuz é nacionalmente reconhecido e utilizado também por milhões de pessoas em todo o país.</p>
                                    </div>
                                </div>
                            </div>
							<div class="col-12 mb-4">
								<h2 class="custom-bar _center text-color-dark h4">Suporte Técnico</h2>
							</div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-envelope text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Por e-mail</h4>
                                        <p>Tire suas dúvidas e faça consultas do suporte por mensagens por email.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-comment-dots text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Por chat</h4>
                                        <p>Tire suas dúvidas e faça consultas do em nosso chat de forma rápida e fácil!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-phone-alt text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Por telefone</h4>
                                        <p>Prefere conversar com nossa equipe de suporte?, Fique a vontade, falaremos com você pelo telefone, nosso intuito é ter o cliente 100% satisfeito e atendido!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="planos" class="section bg-color-light m-0 pt-0">
                    <div class="container">
                        <div class="row" id="listaDasPrincipaisFuncionalidades">
                            <div class="col-12">
                                <h2 class="custom-bar _center text-color-dark">Planos para seu supermercado online!</h2>
                            </div>

                            <div class="col-md-4 border-0 card"></div>
                            <div class="col-md-2 card text-center">
                                <h2 class="mb-5 mt-4"><strong>Básico</strong></h2>
                                <h1><strong><span class="h6">R$</span>449,90</strong></h1>
                                <span class="h6 text-dark font-weight-semibold">por mês</span>
                                <a href="{{ route('contato') }}" class="btn btn-rounded btn-primary mt-3 mb-3">Criar Loja</a>
                            </div>
                            <div class="col-md-2 card text-center d-none">
                                <span class="badge badge-primary badge-xs badge-pill text-uppercase px-2 py-1 mr-1 mt-2">mais vendido</span>
                                <h2 class="mb-5"><strong>Básico ERP</strong></h2>
                                <h1><strong><span class="h6">R$</span>149,90</strong></h1>
                                <span class="h6 text-dark font-weight-semibold">por mês</span>
                                <a href="{{ route('contato') }}" class="btn btn-rounded btn-primary mt-3 mb-3">Criar Loja</a>
                            </div>
                            <div class="col-md-2 card text-center">
                                <h2 class="mb-5 mt-4"><strong>Avançado</strong></h2>
                                <h1><strong><span class="h6">R$</span>549,90</strong></h1>
                                <span class="h6 text-dark font-weight-semibold">por mês</span>
                                <a href="{{ route('contato') }}" class="btn btn-rounded btn-primary mt-3 mb-3">Criar Loja</a>
                            </div>
                            <div class="col-md-2 card text-center d-none">
                                <h2 class="mb-5 mt-4"><strong>Avançado ERP</strong></h2>
                                <h1><strong><span class="h6">R$</span>199,90</strong></h1>
                                <span class="h6 text-dark font-weight-semibold">por mês</span>
                                <a href="{{ route('contato') }}" class="btn btn-rounded btn-primary mt-3 mb-3">Criar Loja</a>
                            </div>
                        </div>
						<div class="row" id="todosRecursos">
							<div class="col-12 p-0">
								<div class="accordion without-bg without-borders" id="accordion8">
									<div class="card card-default">
										<div class="card-header">
											<div class="col-12 text-center">
												<button type="button" id="btnTodosOsRecursos" class="accordion-toggle mb-1 mt-3 mr-1 btn-rounded btn btn-primary" data-toggle="collapse" data-parent="#accordion8" href="#collapse8One"><span class="text-btn-todos-recursos h6">Clique e conheça todos os recursos</span> <i class="fas fa-chevron-right ml-1 rotate-reset"></i> </button>
											</div>
										</div>
										<div id="collapse8One" class="collapse">
											<div class="card-body">
												<div class="col-12">
													<div class="row">
														<div class="col-12 p-0">
															<div class="row">
																<div class="col-12">
																	<div class="toggle toggle-minimal toggle-primary" data-plugin-toggle>
																		<section class="toggle active">
																			<h2 class="text-color-primary h4 toggle-title">Sistema e Infra Estrutura</h2>
																			<div class="toggle-content" id="funcionalidadesSistemaEInfraEstrutura"></div>
																		</section>
																	</div>
																</div>
																<div class="col-12">
																	<div class="toggle toggle-minimal toggle-primary" data-plugin-toggle>
																		<section class="toggle active">
																			<h2 class="text-color-primary h4 toggle-title">Integração com Meios de Pagamento</h2>
																			<div class="toggle-content" id="funcionalidadesIntegracaoComMeiosDePagamentos"></div>
																		</section>
																	</div>
																</div>
																<div class="col-12">
																	<div class="toggle toggle-minimal toggle-primary" data-plugin-toggle>
																		<section class="toggle active">
																			<h2 class="text-color-primary h4 toggle-title">Marketing Digital e Integração com Redes Sociais</h2>
																			<div class="toggle-content" id="funcionalidadeMarketingDigitalEIntegracaoComRedesSociais"></div>
																		</section>
																	</div>
																</div>
																<div class="col-12">
																	<div class="toggle toggle-minimal toggle-primary" data-plugin-toggle>
																		<section class="toggle active">
																			<h2 class="text-color-primary h4 toggle-title">Integração com Market Places, Parceiros e Programas de Fidelidade</h2>
																			<div class="toggle-content" id="funcionalidadeIntegracaoComMarketPlaces"></div>
																		</section>
																	</div>
																</div>
																<div class="col-12">
																	<div class="toggle toggle-minimal toggle-primary" data-plugin-toggle>
																		<section class="toggle active">
																			<h2 class="text-color-primary h4 toggle-title">Suporte Técnico</h2>
																			<div class="toggle-content" id="funcionalidadeSuporteTecnico"></div>
																		</section>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </section>

				<div class="p-relative mt-3">
					<section id="downloads" class="section section-parallax bg-color-secondary m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="../img/demos/app-landing/parallax/downloads-parallax.png">
						<div class="container">
							<div class="row">
								<div class="col-lg-7">
									<h2 class="custom-bar _left _color-light text-color-light">Downloads</h2>
									<p class="text-color-light custom-font-secondary text-4 mb-0">Criamos app para o seu supermercado online tanto para a Android quanto para iOS.</p>
									<p class="text-2 text-color-light custom-font-secondary mb-4 pb-3">Venha conferir o aplicativo exemplo dos nossos supermercados disponível na PlayStore!</p>
									<div class="row">
										<div class="col-sm-6 text-left">
											<a href="https://play.google.com/store/apps/details?id=com.espacomercado.supexemplo" class="text-decoration-none" target="_blank" title="Download na Google Play">
												<img src="{{ asset('img/demos/app-landing/buttons/android-download.png') }}" alt class="custom-shadow-on-hover custom-xs-image-center img-fluid" />
											</a>
										</div>
										<div class="col-sm-6 text-left">
											<a href="#" class="text-decoration-none" target="_blank" title="Download na App Store">
												<img src="{{ asset('img/demos/app-landing/buttons/apple-download.png') }}" alt class="custom-shadow-on-hover custom-xs-image-center img-fluid" />
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<img src="{{ asset('img/demos/app-landing/product/downloads-product-image-1.png') }}" data-appear-animation="fadeInRight" data-appear-animation-delay="100" data-plugin-options="{'accY': 200}" alt="" class="custom-product-image-pos-2 img-fluid d-none d-lg-block" />
					<img src="{{ asset('img/demos/app-landing/product/downloads-product-image-2.png') }}" data-appear-animation="fadeInRight" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt="" class="custom-product-image-pos-2 _litle-small img-fluid d-none d-lg-block" />
				</div>

				<section class="section bg-color-light pt-2 pb-2">
					<div class="container text-center">
						<a href="{{ route('contato') }}" class="btn custom-btn-style-1 text-color-light m-auto" data-hash>Contato</a>
					</div>
				</section>

				<div id="planosFlutuante" class="w-100">
					<div class="container desktop">
						<div class="row">
							<div class="col-md-4 border-0 card bg-transparent"></div>
                            <div class="col-md-2 card text-center">
                                <h4 class="mb-2 mt-4"><strong>Básico</strong></h4>
                                <h2 class="m-0"><strong><span class="h6">R$</span>449,90</strong></h2>
                                <span class="h6 text-dark font-weight-semibold">por mês</span>
                                <a href="{{ route('contato') }}" class="btn btn-rounded btn-primary mt-1 mb-2">Criar Loja</a>
                            </div>
                            <div class="col-md-2 card text-center d-none">
                                <span class="badge badge-primary badge-xs badge-pill text-uppercase px-2 py-1 mr-1 mt-2">mais vendido</span>
                                <h4 class="mb-2"><strong>Básico ERP</strong></h4>
                                <h2 class="m-0"><strong><span class="h6">R$</span>149,90</strong></h2>
                                <span class="h6 text-dark font-weight-semibold">por mês</span>
                                <a href="{{ route('contato') }}" class="btn btn-rounded btn-primary mt-1 mb-2">Criar Loja</a>
                            </div>
                            <div class="col-md-2 card text-center">
                                <h4 class="mb-2 mt-4"><strong>Avançado</strong></h4>
                                <h2 class="m-0"><strong><span class="h6">R$</span>549,90</strong></h2>
                                <span class="h6 text-dark font-weight-semibold">por mês</span>
                                <a href="{{ route('contato') }}" class="btn btn-rounded btn-primary mt-1 mb-2">Criar Loja</a>
                            </div>
                            <div class="col-md-2 card text-center d-none">
                                <h4 class="mb-2 mt-4"><strong>Avançado ERP</strong></h4>
                                <h2 class="m-0"><strong><span class="h6">R$</span>199,90</strong></h2>
                                <span class="h6 text-dark font-weight-semibold">por mês</span>
                                <a href="{{ route('contato') }}" class="btn btn-rounded btn-primary mt-1 mb-2">Criar Loja</a>
                            </div>
						</div>
					</div>
					<div class="container mobile">
						<div class="row">
							<div class="owl-carousel custom-arrows-style-1 _custom-nav-bottom _big mb-0" data-plugin-options="{'items': 1, 'responsive': {'479': {'items': 1}, '979': {'items': 2}, '1199': {'items': 2}}, 'margin': 80, 'loop': true, 'dots': false, 'nav': true, 'autoplay': true, 'autoplayTimeout': 5000}">
								<div>
									<div class="col-12 card text-center">
										<h2 class="mb-0 mt-4"><strong>Básico</strong></h2>
										<h2 class="m-0"><strong><span class="h6">R$</span>449,90</strong></h2>
										<span class="h6 text-dark font-weight-semibold">por mês</span>
										<div class="col-12 text-center">
											<a href="{{ route('contato') }}" class="btn btn-rounded btn-xs w-50 btn-primary mt-1 mb-2">Criar Loja</a>
										</div>
									</div>
								</div>
								<div>
									<div class="col-12 card text-center d-none">
										<div class="col-12 text-center">
											<span class="badge badge-primary badge-xs badge-pill w-50 text-uppercase px-2 py-1 mr-1 mt-2">mais vendido</span>
										</div>
										<h2 class="mb-0"><strong>Básico ERP</strong></h2>
										<h2 class="m-0"><strong><span class="h6">R$</span>149,90</strong></h2>
										<span class="h6 text-dark font-weight-semibold">por mês</span>
										<div class="col-12 text-center">
											<a href="{{ route('contato') }}" class="btn btn-rounded btn-xs w-50 btn-primary mt-1 mb-2">Criar Loja</a>
										</div>
									</div>
								</div>
								<div>
									<div class="col-12 card text-center">
										<h2 class="mb-0 mt-4"><strong>Avançado</strong></h2>
										<h2 class="m-0"><strong><span class="h6">R$</span>549,90</strong></h2>
										<span class="h6 text-dark font-weight-semibold">por mês</span>
										<div class="col-12 text-center">
											<a href="{{ route('contato') }}" class="btn btn-rounded btn-xs w-50 btn-primary mt-1 mb-2">Criar Loja</a>
										</div>
									</div>
								</div>
								<div>
									<div class="col-12 card text-center d-none">
										<h2 class="mb-0 mt-4"><strong>Avançado ERP</strong></h2>
										<h2 class="m-0"><strong><span class="h6">R$</span>199,90</strong></h2>
										<span class="h6 text-dark font-weight-semibold">por mês</span>
										<div class="col-12 text-center">
											<a href="{{ route('contato') }}" class="btn btn-rounded btn-xs w-50 btn-primary mt-1 mb-2">Criar Loja</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				@include('includes.btn-whatsapp')
			</div>
			@include('includes.footer')
		</body>

        @include('includes.scripts', array('pagina' => 'supermercado'))
	</body>
</html>