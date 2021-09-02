$("#telefoneFormWhatsApp").mask('(99) 99999-9999');
$("#planosFlutuante").hide();
$(".div-mais-sistema-e-infra").hide();
$(".div-mais-gestao-de-vendas").hide();
$(".div-mais-marketing-digital").hide();
$("#btnWhatsApp").on("click", function(){
    $("#divBtnWhatsApp").toggleClass("open");
});

$("#fecharWhasApp").on("click", function(){
    $("#divBtnWhatsApp").removeClass('open');
});

$("#verMaisFuncionalidades1").on('click', function(){
    $("#verMaisFuncionalidades1 i").toggleClass('rotate');
    $("#verMaisFuncionalidades1 i").toggleClass('rotate-reset');
    $(".div-mais-sistema-e-infra").slideToggle();
});

$("#verMaisFuncionalidades2").on('click', function(){
    $("#verMaisFuncionalidades2 i").toggleClass('rotate');
    $("#verMaisFuncionalidades2 i").toggleClass('rotate-reset');
    $(".div-mais-gestao-de-vendas").slideToggle();
});

$("#verMaisFuncionalidades3").on('click', function(){
    $("#verMaisFuncionalidades3 i").toggleClass('rotate');
    $("#verMaisFuncionalidades3 i").toggleClass('rotate-reset');
    $(".div-mais-marketing-digital").slideToggle();
});

$("#iniciarConversaFormWhatsApp").on('click', function(){
    if(!$("#formWhatsApp").valid()){
        return false;
    }

    var url = `https://web.whatsapp.com/send?phone=+5527996286964&text=Oi, Quero saber mais sobre os serviços da Espaço Mercado`;
    window.open(
        url,
        '_blank'
    );
    $("#divBtnWhatsApp").removeClass('open');

    $.ajax({
        type:'POST',
        url: '#',
        data: {
            nomeFormWhatsApp: $("#nomeFormWhatsApp").val(),
            emailFormWhatsApp: $("#emailFormWhatsApp").val(),
            telefoneFormWhatsApp: $("#telefoneFormWhatsApp").val(),
            receberComunicacoesFormWhatsApp: $("#receberComunicacoesFormWhatsApp").is(':checked')
        },
        success: function(){
        },
        error: function(){    
        },
        complete: function(){
        }
    });
    

});

$(".card-cases").on('click', function(){
    window.location.href = $(this).attr("data-action");
});

$("#btnTodosOsRecursos").on("click", function(){
    $("#btnTodosOsRecursos i").toggleClass('rotate');
    $("#btnTodosOsRecursos i").toggleClass('rotate-reset');
    if($("#btnTodosOsRecursos i").hasClass('rotate')){
        $(".text-btn-todos-recursos").text('Ocultar vantagens');
    }else{
        $(".text-btn-todos-recursos").text('Clique e conheça todos os recursos');
    }
});

$(document).ready(function(){
    $(window).on('scroll', function() {
        if($("#collapse8One").hasClass('show')){
            if($(this).scrollTop() > ($("#btnTodosOsRecursos").offset().top - $(window).height()) && $(this).scrollTop() < ($("#downloads").offset().top - $(window).height())) {
                $("#planosFlutuante").fadeIn();
            }else{
                $("#planosFlutuante").fadeOut();
            }
        }else{
            $("#planosFlutuante").fadeOut();
        }
    });
});

setInterval(() => {
    if(!$("#divBtnWhatsApp").hasClass('open')){
        setTimeout(() => {
            $("#btnWhatsApp").css('margin-right', '10%');
            setTimeout(() => {
                $("#btnWhatsApp").css('margin-right', '5%');
                setTimeout(() => {
                    $("#btnWhatsApp").css('margin-right', '10%');
                    setTimeout(() => {
                        $("#btnWhatsApp").css('margin-right', '5%');
                    }, 200);
                }, 200);
            }, 200);
        }, 200);
    }
}, 5000);

var principaisFuncionalidades = [
    {
        nome: 'Apenas mensalidade',
        descricao: 'Cobrança simplificada e sem surpresas! Pague um valor único mensal, sem cobranças adicionais por pedidos, comissões ou taxas extras, apenas uma mensalidade de valor fixo.',
        plano_basico: true,
        plano_avancado: true,
    },
    {
        nome: 'Aplicativo personalizado',
        descricao: 'Já pensou em oferecer aos seus clientes um aplicativo próprio personalizado de sua loja online em Android e IOS? Com a nossa tecnologia, você tem todos os recursos para personalizar o visual e as funcionalidades do seu app de forma exclusiva com a cara da sua loja.',
        plano_basico: false,
        plano_avancado: true,
    },
    {
        nome: 'Responsividade',
        descricao: 'Com a nossa tecnologia, você pode vender online com uma interface de fácil acesso e design responsivo que se adapta perfeitamente a dispositivos como: tablets, celulares, televisões, pc, desktop, dentre outros. E ainda oferece uma compra prática e amigável ao seu cliente. ',
        plano_basico: true,
        plano_avancado: true,
    },
    {
        nome: 'Layout customizável',
        descricao: 'Altere o design de sua loja virtual e deixe ela com a mesma cara da sua loja física!',
        plano_basico: true,
        plano_avancado: true,
    },
    {
        nome: 'Integração de produtos',
        descricao: 'Realizamos a integração do nosso sistema com seu sistema atual de ERP. Isso fará com que sua loja online fique em sincronia com a loja física. Tudo o que acontece em sua loja física será refletido na loja online e vice-versa como exemplo as atualizações de preços e quantidade de produtos em estoque, promoções e novos produtos.',
        plano_basico: true,
        plano_avancado: true,
    },
    {
        nome: 'Mais de 100 mil produtos cadastrados',
        descricao: 'Oferecemos mais de 100 mil itens já padronizados com imagem, nome, descrição, código de barras e categoria. Você não precisará cadastrar nada! E não se preocupe, caso você mesmo queira fazer os cadastros, a plataforma é flexível e permitirá que você cadastre quantos produtos quiser!',
        plano_basico: true,
        plano_avancado: true,
    },
    {
        nome: 'Crie suas próprias promoções',
        descricao: `Defina frete grátis para um determinado valor de compras por um período definido;
                    Crie promoções por tempo determinado para vários produtos;
                    Destaque os produtos estratégicos na página principal de sua loja.`,
        plano_basico: true,
        plano_avancado: true,
    },
    {
        nome: 'Cupom de desconto',
        descricao: 'Trabalhar o marketing digital é fundamental para se ter sucesso nas vendas online, para isso desenvolvemos uma ferramenta exclusiva para a utilização nas campanhas promocionais onde você mesmo poderá criar cupons de desconto e enviar para a captura de novos clientes!',
        plano_basico: false,
        plano_avancado: true,
    },
    {
        nome: 'Mídias digitais para Instagram, Facebook e Whatsapp',
        descricao: 'Fornecemos frequentemente material digital padronizado para a divulgação em suas redes sociais. Potencialize ainda mais seu time de marketing.',
        plano_basico: false,
        plano_avancado: true,
    }
];

var funcionalidadesSistemaEInfraEstrutura = [
    {
        nome: 'Apenas mensalidade',
        descricao: 'Cobrança simplificada e sem surpresas! Pague um valor único mensal, sem cobranças adicionais por pedidos, comissões ou taxas extras, apenas uma mensalidade de valor fixo.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Aplicativo personalizado',
        descricao: 'Já pensou em oferecer aos seus clientes um aplicativo próprio personalizado de sua loja online em Android e IOS? Com a nossa tecnologia, você tem todos os recursos para personalizar o visual e as funcionalidades do seu app de forma exclusiva com a cara da sua loja.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Website e hospedagem',
        descricao: 'Nós fazemos a gestão da hospedagem do seu site! Tenha sua página exclusiva de delivery completo e vendas online. Seus clientes poderão fazer compras de forma segura e fácil, 24 horas por dia, 7 dias na semana.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Manutenção e melhorias constantes',
        descricao: 'Fazemos toda a gestão e a manutenção do seu sistema. A nossa equipe de desenvolvimento está constantemente à procura de novas tecnologias além de disponibilizar novas funcionalidades proporcionando uma plataforma robusta cada vez mais completa. Usufrua de tudo isso sem custo adicional!',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Domínio próprio',
        descricao: 'Se você já tem um domínio próprio, não se preocupe. Você conseguirá utilizá-lo junto com a sua loja online. Fazemos toda essa configuração pra você.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Visitas ilimitadas',
        descricao: 'Receba o máximo de clientes possíveis no seu site e app sem custo adicional ou limitação de quantidade. Nosso objetivo é fazer com que você venda mais! ',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Responsividade',
        descricao: 'Com a nossa tecnologia, você pode vender online com uma interface de fácil acesso e design responsivo que se adapta perfeitamente a dispositivos como: tablets, celulares, televisões, pc, desktop, dentre outros. E ainda oferece uma compra prática e amigável ao seu cliente. ',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Layout customizável',
        descricao: 'Altere o design de sua loja virtual e deixe ela com a mesma cara da sua loja física!',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração de produtos',
        descricao: 'Realizamos a integração do nosso sistema com seu sistema atual de ERP. Isso fará com que sua loja online fique em sincronia com a loja física. Tudo o que acontece em sua loja física será refletido na loja online e vice-versa como exemplo as atualizações de preços e quantidade de produtos em estoque, promoções e novos produtos.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Mais de 100 mil produtos cadastrados',
        descricao: 'Oferecemos mais de 100 mil itens já padronizados com imagem, nome, descrição, código de barras e categoria. Você não precisará cadastrar nada! E não se preocupe, caso você mesmo queira fazer os cadastros, a plataforma é flexível e permitirá que você cadastre quantos produtos quiser!',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Cadastro de produtos ilimitados',
        descricao: 'Você pode ter quantos produtos quiser na plataforma sem pagar nada além por isso!',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Ferramenta de Pesquisa inteligente Auto-Complete',
        descricao: 'Ofereça mais facilidade para quem compra em seu app ou loja online. Nossa plataforma auto completa a descrição do que o cliente está digitando durante uma pesquisa aumentando a interação com o cliente e proporcionando uma experiência de compra diferenciada e mais ágil.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Ferramenta de Pesquisa inteligente Palavra Chave',
        descricao: 'Crie a vontade palavras chave relacionadas a produtos específicos da loja, isso fará com que os clientes encontrem o que estão precisando com mais facilidade ou exibindo produtos que eles não pensariam em comprar. Com esse recurso seu app potencializa a conversão de  vendas, deixando para trás a concorrência.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Venda para todo o Brasil',
        descricao: 'Estamos integrados a várias plataformas de frete e logística. Você consegue vender facilmente para qualquer lugar do Brasil com os melhores preços e transportadoras do mercado.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: true,
    },
    {
        nome: 'Direcionamento de pedidos pra uma loja mais próxima',
        descricao: 'Você possui uma rede com mais de uma loja? Nossa plataforma permite com que você tenha várias lojas ligadas a uma única rede, assim você pode trabalhar na divulgação de um único domínio (endereço do site) para todos os seus clientes, independente de onde eles estejam localizados.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Direcionamento de pedidos pra uma loja mais próxima',
        descricao: 'Você possui uma rede com mais de uma loja? Nossa plataforma permite com que você tenha várias lojas ligadas a uma única rede, assim você pode trabalhar na divulgação de um único domínio (endereço do site) para todos os seus clientes, independente de onde eles estejam localizados.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Separação de produtos via leitor de código de barras',
        descricao: 'Acabe com os erros de operação durante a coleta de produtos do carrinho de compras. Utilize nosso app exclusivo para a leitura do código de barras proporcionando a coleta dos produtos muito mais fácil e acertiva. Ganhe tempo de operação e elimine os erros e prejuízos.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Crie suas próprias promoções',
        descricao: `Defina frete grátis para um determinado valor de compras por um período definido;
                    Crie promoções por tempo determinado para vários produtos;
                    Destaque os produtos estratégicos na página principal de sua loja.`,
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Plataforma de gestão de pedidos',
        descricao: 'Disponibilizamos um painel de gestão da loja fácil e intuitivo, que pode ser acessado pela web em desktops, tablets ou celulares! Não é necessário fazer download ou instalar nada no seu computador.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Notificações de pedidos',
        descricao: 'Não precisa alguém monitorar pedidos o dia todo! Quando um pedido chega, uma notificação visual e sonora é enviada para o computador da loja e por e-mail. Assim quem está na frente de loja ou na gestão do ecommerce será facilmente alertado.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Notificações de pedidos para a loja pelo whatsapp',
        descricao: 'Organização é fundamental para o sucesso de qualquer negócio! Além de poder acessar a relação de pedidos pelo painel administrativo ou por email, disponibilizamos também a opção de notificações das vendas pelo whatsapp. Assim você terá o controle de todos os seus pedidos em tempo real sem deixar passar nada!',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Notificação de pedidos para os clientes pelo whatsapp',
        descricao: 'Nada melhor que comunicar seus clientes automaticamente pelo whatsapp não acha? Disponibilizamos a opção de notificação dos status do pedido pelo whatsapp, assim você melhora a comunicação com o cliente, evitando falhas e retrabalhos. Alem disso, impacte os clientes com novidades e promoções de produtos quando quiser.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Acompanhamento do status do pedido',
        descricao: 'Notifique o cliente em tempo real durante todas as etapas do processo de vendas, desde a realização do pedido até o recebimento dos produtos.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Defina como quer vender seus produtos',
        descricao: 'A plataforma da Espaço Mercado possui uma vasta relação de produtos sem códigos de barras como os de hortifruti ou açougue com categorias, descrições e imagens personalizadas. Além disso você terá flexibilidade em escolher se quer vender seus produtos por kg, por unidade com peso aproximado ou simplesmente pela unidade.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: true,
        exclusivo_supermercado: false,
    },
];

var funcionalidadesIntegracaoComMeiosDePagamentos = [
    {
        nome: 'Pagamento via Picpay',
        descricao: 'Um dos meios de pagamento mais utilizados na atualidade e você não pode ficar fora desta né? Oferecemos a opção de utilização do Picpay integrado a sua loja. Mais facilidade e comodidade pra quem compra!',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Pagamento via Mercado Pago',
        descricao: 'Aliado ao Mercado Livre, também reconhecido por ser um meio de pagamento com bastante benefícios como cashback e descontos. Oferecemos a opção de utilização do Mercado Pago integrado a sua loja. Mais facilidade e comodidade pra quem compra!',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Pagamento via PIX',
        descricao: 'Receba pagamentos pelo PIX de sua loja e acompanhe os status de pagamento através do seu dashboard.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Pagamento via boleto e cartão de crédito',
        descricao: 'Disponibilize um meio de pagamento online por boleto ou cartão de crédito, a vista ou parcelado, com as principais bandeiras de cartão de crédito do mercado. Seus clientes terão a possibilidade de pagar da forma como quiserem!',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
];

var funcionalidadeMarketingDigitalEIntegracaoComRedesSociais = [
    {
        nome: 'Otimizações para Google (SEO)',
        descricao: `Ter uma página sendo exibida nos primeiros resultados de pesquisa do Google é fundamental para o sucesso do seu negócio. Hoje cerca de 95% das pessoas utilizam o Google para fazerem suas buscas na internet.
                    Nós oferecemos muito mais que simplesmente um app e uma página de vendas online. Você terá incluído em nossos serviços a otimização de sua página para que apareça nos resultados de pesquisas no Google de forma orgânica, sem investimentos extras, com o foco na região onde atua e tipo de loja.`,
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Cupom de desconto',
        descricao: 'Trabalhar o marketing digital é fundamental para se ter sucesso nas vendas online, para isso desenvolvemos uma ferramenta exclusiva para a utilização nas campanhas promocionais onde você mesmo poderá criar cupons de desconto e enviar para a captura de novos clientes!',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Noficiações Push',
        descricao: 'Envie notificações Push para o aplicativo dos clientes. Aumente as vendas de seus produtos e atinja mais clientes com notificações personalizadas!',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'E-mail Marketing Integrado',
        descricao: 'Programe o envio recorrente de emails com os produtos que quiser! Escolha diversos temas específicos, defina o período de início e fim das camapanhas e a frequência de envios! Tudo isso numa única ferramenta, você não precisará se preocupar em contratar nenhum sistema de disparo de emails para fazer isso para você.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração com o Google Tag Manager',
        descricao: 'Criamos uma interface de comunicação com campanhas de marketing entre sua loja e app e qualquer outra ferramenta de rastreamento na web. Através do Google tag manager integrado à plataforma, você conseguirá rastrear e monitorar qualquer campanha de marketing digital.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração Google Analytics',
        descricao: 'Saiba quantas pessoas acessam pelo seu site e app em tempo real, por seguimentação, região e muito mais! Nossa plataforma é integrada com o Google Analytics, assim você consegue usufruir de todos os benefícios que essa ferramenta de análise consegue oferecer.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração Facebook Ads',
        descricao: 'Saiba quantas pessoas acessam pelo seu site e app em tempo real, por seguimentação, região e muito mais! Nossa plataforma é integrada com o Google Analytics, assim você consegue usufruir de todos os benefícios que essa ferramenta de análise consegue oferecer.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração Facebook Ads',
        descricao: 'Conecte facilmente suas campanhas de facebook ads a sua página e app!',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração WhatsApp',
        descricao: 'Disponibilize em seu app ou site um canal via whatsapp para que seus clientes falem com você quando quiserem.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração com chat on-line',
        descricao: 'Disponibilize em seu app e site um canal de chat para que seus clientes falem com você quando quiserem. Configure bots (robos) ou tenha colaboradores disponíveis para atendimento online de seus clientes. Você poderá usar qualquer ferramenta de chat, como o jivochat, tawk.to, tidio e muitos outros.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração com o Facebook e Instagram',
        descricao: 'Disponibilizamos uma conexão com o facebook e instagram de sua loja! Você poderá manter todos os produtos de sua loja online sincronizados com suas contas do facebook e instagram.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Mídias digitais para Instagram, Facebook e Whatsapp',
        descricao: 'Fornecemos frequentemente material digital padronizado para a divulgação em suas redes sociais. Potencialize ainda mais seu time de marketing.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Encarte Digital',
        descricao: 'Já pensou em levar seus produtos aos seus clientes através do celular e ainda reduzir seus custos com papel e serviços? Faça o envio recorrente e programado de seus encartes ou tabloides aos seus clientes diretamente por notificação pelo seu app!',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Envio de mensagens automáticas de re-marketing',
        descricao: 'Configure o tempo para o envio de mensagens automáticas aos clientes que compraram determinados produtos. Impacte mais clientes com essa ferramenta poderosa de recorrência e re-marketing.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
];

var funcionalidadeIntegracaoComMarketPlaces = [
    {
        nome: 'Tindeo',
        descricao: 'A Tindeo é uma plataforma líder global em catálogos, folhetos e cupons digitais com mais de 75 milhões de usuários, que dispõe de uma poderosa ferramenta de SEO e que promove diversas campanhas de promoções pagas pela empresa. Você conseguirá expor seus produtos, suas promoções e ofertas de forma muito mais dinâmica com mais resultados.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração com Market Place Ifood',
        descricao: 'Participe de um dos principais market places do Brasil! Estamos integrados com o Ifood, assim todos os produtos que disponibilizar na plataforma estarão sincronizados com o ifood também! Sua loja aparecerá para muito mais pessoas além de reforçar ainda mais sua classificação nas pesquisas orgânicas.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: true,
    },
    {
        nome: 'Integração com Market Place Rappi',
        descricao: 'Participe de um dos principais market places do Brasil! Estamos integrados com o Rappi, assim todos os produtos que disponibilizar na plataforma estarão sincronizados com o Rappi também! Sua loja aparecerá para muito mais pessoas além de reforçar ainda mais sua classificação nas pesquisas orgânicas.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: true,
    },
    {
        nome: 'Integração com Market Place Magazine Luiza',
        descricao: '',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração com Market Place B2W: Americanas, Submarino e Shoptime',
        descricao: '',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: true,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração com Market Place Via Varejo: Casas Bahia, Ponto Frio e Extra.com.br',
        descricao: '',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: true,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração com Market Place Mercado Livre',
        descricao: '',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração com Market Place Consulta Remédios',
        descricao: 'Participe de um dos principais market places do Brasil! Estamos integrados com o consulta remédios, assim todos os produtos que disponibilizar na plataforma estarão sincronizados com o eles! Sua loja aparecerá para muito mais pessoas além de reforçar ainda mais sua classificação nas pesquisas orgânicas.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: true,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração com programa de fidelidade AME',
        descricao: 'Fidelize os clientes de sua loja num dos maiores programas de fidelidade  do Brasil. Pertencentes ao grupo B2W, o programa de fidelidade AME é utilizado atualmente por milhões de pessoas em todo o país.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Integração com programa de fidelidade Meliuz',
        descricao: 'Fidelize os clientes de sua loja num dos maiores programas de fidelidade  do Brasil, o programa de fidelidade Meliuz é nacionalmente reconhecido e utilizado também por milhões de pessoas em todo o país.',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
];

var funcionalidadeSuporteTecnico = [
    {
        nome: 'Por e-mail',
        descricao: 'Tire suas dúvidas e faça consultas do suporte por mensagens por email.',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Por chat',
        descricao: 'Tire suas dúvidas e faça consultas do em nosso chat de forma rápida e fácil!',
        plano_basico: true,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
    {
        nome: 'Por telefone',
        descricao: 'Prefere conversar com nossa equipe de suporte?, Fique a vontade, falaremos com você pelo telefone, nosso intuito é ter o cliente 100% satisfeito e atendido!',
        plano_basico: false,
        plano_avancado: true,
        exclusivo_farmacia: false,
        exclusivo_supermercado: false,
    },
];

$.each(principaisFuncionalidades, function(){
    var podeAdicionar = true;
    if(pagina == 'farmacia' && !this.exclusivo_farmacia && this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(pagina == 'supermercado' && this.exclusivo_farmacia && !this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(podeAdicionar){
        var htmlFuncionalidade = `<div class="col-12">
                                    <div class="row">
                                        <div class="col-md-4 card border-bottom-0 pb-2 pt-2">
                                            <div class="row">
                                                <div class="col-10 m-auto">
                                                    <h5>${this.nome}</h5>
                                                </div>
                                                <div class="col-2 ${!this.descricao ? 'visibility-hidden' : ''}">
                                                    <span 
                                                        class="badge badge-primary badge-xs badge-pill text-uppercase px-2 py-1"
                                                        data-toggle="tooltip" data-placement="top" title="${this.descricao}"
                                                    >!</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-2 text-center">
                                            <h3><i class="${this.plano_basico ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-2 text-center">
                                            <h3><i class="${this.plano_avancado ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                    </div>
                                </div>`;
        $("#listaDasPrincipaisFuncionalidades").append(htmlFuncionalidade);
        $('[data-toggle="tooltip"]').tooltip();
    }
});

$.each(funcionalidadesSistemaEInfraEstrutura, function(){
    var podeAdicionar = true;
    if(pagina == 'farmacia' && !this.exclusivo_farmacia && this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(pagina == 'supermercado' && this.exclusivo_farmacia && !this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(podeAdicionar){
        var htmlFuncionalidade = `<div class="col-12">
                                    <div class="row">
                                        <div class="col-md-4 card border-bottom-0 pb-2 pt-2">
                                            <div class="row">
                                                <div class="col-10 m-auto">
                                                    <h5>${this.nome}</h5>
                                                </div>
                                                <div class="col-2 ${!this.descricao ? 'visibility-hidden' : ''}">
                                                    <span 
                                                        class="badge badge-primary badge-xs badge-pill text-uppercase px-2 py-1"
                                                        data-toggle="tooltip" data-placement="top" title="${this.descricao}"
                                                    >!</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-3 m-0 text-center">
                                            <h3><i class="${this.plano_basico ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-3 m-0 text-center">
                                            <h3><i class="${this.plano_avancado ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                    </div>
                                </div>`;
        $("#funcionalidadesSistemaEInfraEstrutura").append(htmlFuncionalidade);
        $('[data-toggle="tooltip"]').tooltip();
    }
});

$.each(funcionalidadesIntegracaoComMeiosDePagamentos, function(){
    var podeAdicionar = true;
    if(pagina == 'farmacia' && !this.exclusivo_farmacia && this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(pagina == 'supermercado' && this.exclusivo_farmacia && !this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(podeAdicionar){
        var htmlFuncionalidade = `<div class="col-12">
                                    <div class="row">
                                        <div class="col-md-4 card border-bottom-0 pb-2 pt-2">
                                            <div class="row">
                                                <div class="col-10 m-auto">
                                                    <h5>${this.nome}</h5>
                                                </div>
                                                <div class="col-2 ${!this.descricao ? 'visibility-hidden' : ''}">
                                                    <span 
                                                        class="badge badge-primary badge-xs badge-pill text-uppercase px-2 py-1"
                                                        data-toggle="tooltip" data-placement="top" title="${this.descricao}"
                                                    >!</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-3 m-0 text-center">
                                            <h3><i class="${this.plano_basico ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-3 m-0 text-center">
                                            <h3><i class="${this.plano_avancado ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                    </div>
                                </div>`;
        $("#funcionalidadesIntegracaoComMeiosDePagamentos").append(htmlFuncionalidade);
        $('[data-toggle="tooltip"]').tooltip();
    }
});

$.each(funcionalidadeMarketingDigitalEIntegracaoComRedesSociais, function(){
    var podeAdicionar = true;
    if(pagina == 'farmacia' && !this.exclusivo_farmacia && this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(pagina == 'supermercado' && this.exclusivo_farmacia && !this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(podeAdicionar){
        var htmlFuncionalidade = `<div class="col-12">
                                    <div class="row">
                                        <div class="col-md-4 card border-bottom-0 pb-2 pt-2">
                                            <div class="row">
                                                <div class="col-10 m-auto">
                                                    <h5>${this.nome}</h5>
                                                </div>
                                                <div class="col-2 ${!this.descricao ? 'visibility-hidden' : ''}">
                                                    <span 
                                                        class="badge badge-primary badge-xs badge-pill text-uppercase px-2 py-1"
                                                        data-toggle="tooltip" data-placement="top" title="${this.descricao}"
                                                    >!</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-3 m-0 text-center">
                                            <h3><i class="${this.plano_basico ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-3 m-0 text-center">
                                            <h3><i class="${this.plano_avancado ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                    </div>
                                </div>`;
        $("#funcionalidadeMarketingDigitalEIntegracaoComRedesSociais").append(htmlFuncionalidade);
        $('[data-toggle="tooltip"]').tooltip();
    }
});

$.each(funcionalidadeIntegracaoComMarketPlaces, function(){
    var podeAdicionar = true;
    if(pagina == 'farmacia' && !this.exclusivo_farmacia && this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(pagina == 'supermercado' && this.exclusivo_farmacia && !this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(podeAdicionar){
        var htmlFuncionalidade = `<div class="col-12">
                                    <div class="row">
                                        <div class="col-md-4 card border-bottom-0 pb-2 pt-2">
                                            <div class="row">
                                                <div class="col-10 m-auto">
                                                    <h5>${this.nome}</h5>
                                                </div>
                                                <div class="col-2 ${!this.descricao ? 'visibility-hidden' : ''}">
                                                    <span 
                                                        class="badge badge-primary badge-xs badge-pill text-uppercase px-2 py-1"
                                                        data-toggle="tooltip" data-placement="top" title="${this.descricao}"
                                                    >!</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-3 m-0 text-center">
                                            <h3><i class="${this.plano_basico ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-3 m-0 text-center">
                                            <h3><i class="${this.plano_avancado ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                    </div>
                                </div>`;
        $("#funcionalidadeIntegracaoComMarketPlaces").append(htmlFuncionalidade);
        $('[data-toggle="tooltip"]').tooltip();
    }
});

$.each(funcionalidadeSuporteTecnico, function(){
    var podeAdicionar = true;
    if(pagina == 'farmacia' && !this.exclusivo_farmacia && this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(pagina == 'supermercado' && this.exclusivo_farmacia && !this.exclusivo_supermercado){
        podeAdicionar = false;
    }
    if(podeAdicionar){
        var htmlFuncionalidade = `<div class="col-12">
                                    <div class="row">
                                        <div class="col-md-4 card border-bottom-0 pb-2 pt-2">
                                            <div class="row">
                                                <div class="col-10 m-auto">
                                                    <h5>${this.nome}</h5>
                                                </div>
                                                <div class="col-2 ${!this.descricao ? 'visibility-hidden' : ''}">
                                                    <span 
                                                        class="badge badge-primary badge-xs badge-pill text-uppercase px-2 py-1"
                                                        data-toggle="tooltip" data-placement="top" title="${this.descricao}"
                                                    >!</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-3 m-0 text-center">
                                            <h3><i class="${this.plano_basico ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                        <div class="col-3 col-md-2 card border-top-0 border-radius-0 pb-2 pt-3 m-0 text-center">
                                            <h3><i class="${this.plano_avancado ? 'fas fa-check text-success' : 'fas fa-times text-danger'}"></i></h3>
                                        </div>
                                    </div>
                                </div>`;
        $("#funcionalidadeSuporteTecnico").append(htmlFuncionalidade);
        $('[data-toggle="tooltip"]').tooltip();
    }
});