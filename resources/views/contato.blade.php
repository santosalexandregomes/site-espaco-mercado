<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		@include('includes.head', array(
            'title' => 'Fale com um representante', 
            'keywords' => 'Consultor, Representante',
            'description' => 'Interessado em nossos serviços? Entre em contato conosco que nossos consultores e representantes estão aqui para te ajudar.'
        ))
	</head>
	<body>
		<body data-spy="scroll" data-target=".header-nav-main nav" data-offset="65">
			@include('includes.topbar')

			<div role="main" class="main">
				<section class="section bg-color-tertiary m-0">
                    <div class="container">
                        <div class="row justify-content-center py-5">
                            <div class="col-lg-6 text-center pt-5">
								<h1 style="font-size: 2rem;">A equipe da Espaço Mercado está pronta para te ajudar!</h1>
                                <form id="formContato" class="mt-4" method="POST">
									<div class="col-12">
										<div class="row">
											<div class="col-12 form-group">
												<input type="text" class="form-control" placeholder="Nome" name="name" id="name" required>
											</div>
											<div class="col-md-6 form-group">
												<input type="text" class="form-control" placeholder="Celular" name="celular" id="celular" required>
											</div>
											<div class="col-md-6 form-group">
												<input type="email" class="form-control" placeholder="E-mail" name="email" id="email" required>
											</div>
											<div class="col-md-6 form-group">
												<input type="text" class="form-control" placeholder="Empresa" name="empresa" id="empresa" required>
											</div>
											<div class="col-md-6 form-group">
												<select class="form-control" name="segmento_da_empresa" id="segmento_da_empresa" required>
													<option hidden>Segmento da Empresa</option>
													<option value="mercado">Mercado</option>
													<option value="farmacia">Farmácia</option>
													<option value="outros">Outros</option>
												</select>
											</div>
											<div class="col-md-6 form-group">
												<select class="form-control" name="tamanho_da_empresa" id="tamanho_da_empresa" required>
													<option hidden>Tamanho da Empresa</option>
													<option value="pequeno">Pequeno</option>
													<option value="medio">Médio</option>
													<option value="grande">Grande</option>
												</select>
											</div>
											<div class="col-md-6 form-group">
												<input type="text" class="form-control" placeholder="Cargo que ocupa" name="carga_que_ocupa" id="carga_que_ocupa" required>
											</div>
											<div class="col-12 form-group">
												<textarea class="form-control" name="como_conheceu_a_em" placeholder="Como conheceu a EM" id="como_conheceu_a_em" cols="30" required></textarea>
											</div>
											<div class="col-12 form-group">
												<textarea class="form-control" name="feedback_sobre_nossa_empresa" placeholder="Feedback sobre nossa empresa" id="feedback_sobre_nossa_empresa" cols="30" required></textarea>
											</div>
											<div class="col-12 form-group">
												<button type="button" id="enviarContato" class="mb-1 mt-3 mr-1 btn-rounded btn btn-primary"><span class="h6">Enviar</span> <i class="fas fa-chevron-right ml-1"></i> </button>
											</div>
										</div>
									</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

				@include('includes.btn-whatsapp')
			</div>
			@include('includes.footer')
		</body>

        @include('includes.scripts', array('pagina' => 'false'))

	</body>
</html>