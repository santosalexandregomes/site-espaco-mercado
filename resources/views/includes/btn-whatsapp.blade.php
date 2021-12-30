<div id="divBtnWhatsApp" class="col-12">
    <div class="row row-btn-whatsapp">
        <div class="col-12 p-0 chat-whatsapp">
            <div class="col-10 col-md-4 mb-1 float-right">
                <div class="row">
                    <div class="col-12 bg-whatsapp">
                        <div class="row">
                            <div class="col-3 pl-0">
                                <img src="https://images.pexels.com/photos/1804036/pexels-photo-1804036.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="rounded-circle m-auto w-100 p-3">
                            </div>
                            <div class="col-8 m-auto pl-0">
                                <div class="row">
                                    <div class="col-12"><p class="text-white mb-0 font-weight-semibold text-name-whatsapp">Mariana | Espaço Mercado</p></div>
                                    <div class="col-12"><p class="text-white mb-1">Online</p></div>
                                </div>
                            </div>
                            <div class="col-1 mb-auto mt-4 p-0">
                                <i class="fas fa-times text-white text-5" id="fecharWhasApp"></i>
                            </div>
                        </div>
                    </div>
                    <form id="formWhatsApp" class="col-12 p-3" style="background: url({{ asset('img/background/fundo-whatsapp.png') }});">
                        <div class="row">
                            <div class="col-9 form-group card bg-white ml-3 p-2">
                                <span class="outgoing-left"></span>
                                <p class="text-quaternary mb-0">Oi, sou Mariana, consultora da Espaço Mercado. <strong>Quer saber mais sobre nossos serviços?</strong> Me envia seu nome, e-mail e telefone que vou tirar suas dúvidas!</p>
                            </div>
                            <div class="col-10 form-group mb-1 ml-auto">
                                <span class="outgoing"></span>
                                <input type="text" class="form-control" name="nomeFormWhatsApp" id="nomeFormWhatsApp" required placeholder="Nome *">
                            </div>
                            <div class="col-10 form-group mb-1 ml-auto">
                                <input type="email" class="form-control" name="emailFormWhatsApp" id="emailFormWhatsApp" required placeholder="E-mail *">
                            </div>
                            <div class="col-10 form-group mb-1 ml-auto">
                                <input type="text" class="form-control" name="telefoneFormWhatsApp" id="telefoneFormWhatsApp" required placeholder="Telefone *">
                            </div>
                            <div class="form-group col-10 ml-auto mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="receberComunicacoesFormWhatsApp">
                                    <label class="custom-control-label text-2 text-quaternary" for="receberComunicacoesFormWhatsApp">Eu concordo em receber comunicações.</label>
                                </div>
                            </div>
                            <div class="col-10 form-group ml-auto mb-0">
                                <p class="text-quaternary text-2 mb-1">Ao informar meus dados, eu concordo com a <a href="#" class="text-quaternary text-underline">Política de Privacidade</a> e com os <a href="#" class="text-quaternary text-underline">Termos de Uso</a>.</p>
                            </div>
                            <div class="col-12 ml-auto">
                                <button id="iniciarConversaFormWhatsApp" type="button" class="btn btn-outline btn-rounded btn-primary float-right btn-with-arrow" href="#">Iniciar conversa<span><i class="fas fa-chevron-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 p-0">
            <img id="btnWhatsApp" src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" class="float-right">
        </div>
    </div>
</div>