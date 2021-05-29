<!DOCTYPE html>
<html lang="<?= bloginfo("language") ?>">

<head>
    <meta charset="<?= bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Union Solutions Serra/ES</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/vendors/fontawesome512pro/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/custom.css">

    <?= wp_head() ?>
</head>

<body <?= body_class() ?> style="position:relative;">
    <?= wp_body_open() ?>
    <div class="page" style="overflow-x: hidden;">

        <h1 class="d-none">Union Solutions Serra/ES Vistoria Veicular Especializada</h1>

        <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="<?= home_url() ?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/logo-union-solutions-serra.svg" alt="" style="height:3rem; width:auto;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#apresentacao">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#quemsomos">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#servicos">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#alerta"><i class="fas fa-shield me-1"></i>Proteja-se!</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#oferta">Ofertas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contato">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <section id="apresentacao" class="d-flex align-items-strectch pb-0">
            <div class="container d-flex align-items-stretch">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-6 text-center text-lg-start mb-4 mb-lg-0 lazzy from-left delay-1">
                        <h2 class="mb-3">Referência de qualidade e segurança em vistoria veicular</h2>
                        <p class="mb-3">A <strong style="color:#fff;">Union Solutions em Serra/ES</strong> é um empresa credenciada ao <strong style="color:#fff;">Detran/ES</strong> especializada em vistorias veiculares cautelares e eletrônicas, oferecendo serviços com qualidade garantida.</p>
                        <a class="button button-light" href="#quemsomos"><i class="fas fa-plus me-2"></i>Saiba mais</a>
                    </div>
                    <div class="col-12 col-lg-6 text-center align-self-end">
                        <img src="<?= get_template_directory_uri() ?>/assets/union-apresentacao-ator.png" style="width:100%; height: auto;" class="lazzy from-right">
                    </div>
                </div>
            </div>
        </section>

        <section id="quemsomos" class="d-flex align-items-stretch">
            <div class="container d-flex align-items-center">
                <div class="row">
                    <div class="col-12 col-lg-6 text-center text-lg-start lazzy from-left">
                        <h2>Quem somos</h2>
                        <p>A <strong style="color:#fff;">Union Solutions em Serra/ES</strong>, é uma empresa integrante da maior franquia do setor de vistoria automotivas do país, atuante em todos os Estados da federação e atentendo à pessoas físicas e jurídicas.</p>
                        <p>Temos o compromisso de oferecer atendimento de qualidade, aliado a serviços com alta capacidade técnica, afim de atender aos nossos clientes com seriedade, lisura e laudos técnicos totalmente verídicos e imparciais.</p>
                        <a class="button button-secondary" href="#servicos"><i class="fas fa-search me-2"></i>Conheça nossos serviços</a>
                    </div>
                </div>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/divider-turquoize.svg" class="divider-turquoize">
        </section>

        <!-- Seção SERVIÇOS -->
        <section id="servicos" class="d-flex align-items-center">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 col-lg-6 text-center mx-auto lazzy from-top">
                        <h2 style="font-size:3rem;">Nossos serviços</h2>
                        <p>A <strong>Union Solutions em Serra/ES</strong> oferece serviços de vistoria eletrônica e cautelar para concessionárias e revendas de veículos, pessoas físicas e jurídicas em geral, autarquias, empresas de seguro e prefeituras.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 lazzy from-bottom delay-1">
                        <div class="text-center px-4">
                            <img src="<?= get_template_directory_uri() ?>/assets/union-icone-eletronica.svg" style="width:55%;height:auto;margin-bottom:1.25rem;" alt="">
                            <h3 style="margin-bottom:1.5rem;font-size:2rem;"><i class="fad fa-search me-2"></i>Vistoria eletrônica</h3>
                            <p style="font-size:.9rem;">A vistoria eletrônica é realizada <strong style="color:#fff;">através de credenciamento junto ao Detran/ES</strong>, atendendo as demandas do órgão nos processos em que a vistoria veicular se torna compulsória, como transferência de propriedade, domicílio, alteração de características do veículo entre outras.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 lazzy from-bottom delay-2">
                        <div class="text-center px-4">
                            <img src="<?= get_template_directory_uri() ?>/assets/union-icone-cautelar.svg" style="width:55%;height:auto;margin-bottom:1.25rem;" alt="">
                            <h3 style="margin-bottom:1.5rem;font-size:2rem;"><i class="fad fa-check me-2"></i>Vistoria Cautelar</h3>
                            <p style="font-size:.9rem;">A vistoria cautelar é <strong style="color:#fff;">voltada para os clientes de pretendem vender ou comprar</strong> um veículo seminovo e desejam ter em mãos um panorama detalhado antes de concluir o negócio, seja para obter um poder maior de negociação ou para se proteger contra fraudes e adulterações.</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/divider-grey.svg" class="divider-grey">
        </section>
        <!-- Fim Seção SERVIÇOS -->

        <!-- Seção ALERTA -->
        <section id="alerta" class="d-flex align-items-center">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-6 lazzy from-left text-center text-lg-start mb-4 mb-lg-0">
                        <h2 style="font-size:3rem;color:#00566b;">Não caia em golpes!</h2>
                        <p style="font-size: 1.5rem; font-weight:700; line-height:2rem;">Os golpes com veículos estão cada dia mais sofisticados e ousados.</p>
                        <p>Veículos que <strong>frutos de leilões judiciais ou que foram sinistrados</strong>, são utilizados em golpes onde suas reais condições são ocultadas de quem o está comprando.</p>
                        <p>Esses veículos sofrem <strong>perda de no mínimo 25% do valor de mercado</strong>, além de ficar impedido de contratar seguros e ainda a possibilidade de existir algum dano estrutural que coloque <strong>em risco a segurança dos usuários</strong>.</p>
                        <a href="#oferta" class="button button-primary mt-2"><i class="fas fa-shield me-2"></i>Veja como se proteger!</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="<?= get_template_directory_uri() ?>/assets/alerta-golpe.png" style="width:100%; height: auto;" class="lazzy from-right">
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim Seção ALERTA -->

        <!-- Seção OFERTAS -->
        <section id="oferta" class="d-flex align-items-center">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-6">
                        <img src="<?= get_template_directory_uri() ?>/assets/oferta-cautelar.png" style="width:100%; height: auto;" class="lazzy from-left">
                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-column align-items-center align-items-lg-start">
                        <div class="lazzy from-right delay-1 text-center text-lg-start">
                            <h2 class="mb-3" style="line-height: 2.75rem;">O melhor serviço de vistoria, com o melhor preço da região.</h2>
                            <p>Aqui na <strong>Union Solutions em Serra/ES</strong>, você pode se proteger contra fraudes, adulterações ou dívidas sem precisar gastar muito.</p>
                            <p class="mb-4">Solicite um <strong>Laudo Cautelar Union</strong> antes de concluir a compra do seminovo e tenha acesso ao histórico completo e transparente do veículo</p>
                        </div>
                        <div class="valor-oferta lazzy from-bottom delay-2">
                            <p class="legenda">Laudo Cautelar por apenas</p>
                            <p class="valor">R$ 100,00</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/divider-grey.svg" class="divider-grey">
        </section>
        <!-- FIM Seção OFERTAS -->

        <!-- Seção CONTATO -->
        <section id="contato" class="d-flex align-items-center">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                        <h2 class="mb-3">Contato</h2>
                        <ul class="contato-list-links">
                            <li class="mb-3">
                                R. Homero Pimentel Lopes, 360, Rosário de Fátima<br />
                                Serra/ES &bullet; 29161-109
                            </li>
                            <li><a href="tel:552734416191" target="_blank"><i class="fas fa-fw fa-phone me-1" style="color:#168B87;"></i>+55 <strong>(27) 3441.6191</strong></a></li>
                            <li><a href="tel:5527997776878" target="_blank"><i class="fas fa-fw fa-mobile-alt me-1" style="color:#168B87;"></i>+55 <strong>(27) 99777.6878</strong></a></li>
                            <li><a href="#" target="_blank"><i class="fas fa-fw fa-envelope me-1" style="color:#168B87;"></i>E-mail</a></li>
                            <li><a class="me-2" href="#" target="_blank"><i class="fab fa-2x fa-whatsapp"></i></a>
                                <a class="me-2" href="#" target="_blank"><i class="fab fa-2x fa-instagram"></i></a>
                                <a class="me-2" href="#" target="_blank"><i class="fab fa-2x fa-facebook-square"></i></a>
                            </li>
                        </ul>
                        <h4 class="mb-3">Expediente</h4>
                        <p><i class="fas fa-clock me-1" style="color:#168B87;"></i><strong>Segunda à sexta</strong>, das 08h às 17h</p>
                        <p><i class="fas fa-clock me-1" style="color:#168B87;"></i><strong>Sábados</strong>, das 08h às 12h</p>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="border rounded shadow-sm p-3">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h3><i class="fas fa-envelope-open-text me-2" style="color:#168B87;"></i>Deixe a sua mensagem</h3>
                                        <p>Utilize os campos abaixo para tirar dúvidas ou solicitar mais informações sobre os serviços oferecidos pela Union Solutions.</p>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-12 form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" id="nome" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" name="email" id="email" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" name="telefone" id="telefone" class="form-control form-control-sm mask-telefone">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-12 form-group">
                                        <label for="mensagem">Mensagem</label>
                                        <textarea class="form-control form-control-sm" name="mensagem" id="mensagem" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 form-group text-center">
                                        <button type="submit" class="button button-primary"><i class="fas fa-check me-1"></i>Enviar</button>
                                        <button type="cancel" class="button button-secondary"><i class="fas fa-times me-1"></i>Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim Seção CONTATO -->

        <div id="mapa">
            <iframe class="mapa-google" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14974.553332717971!2d-40.2719961!3d-20.2323446!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1fb0efb7d0abe64c!2sVis%C3%A3o%20Total%20-%20Vistoria%20Veicular%20Especializada%20-%20Serra%2FES!5e0!3m2!1spt-BR!2sbr!4v1621980514441!5m2!1spt-BR!2sbr" style="border:0;" loading="lazzy" allowfullscreen=""></iframe>
        </div>

        <footer>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-6">
                        Union Solutions Serra/ES &copy; <?= date('Y') ?> &bullet; Direitos reservados
                    </div>
                    <div class="col-12 col-lg-6 text-end">
                        <a href="<?= home_url() ?>">
                            <img src="<?= get_template_directory_uri() ?>/assets/logo-union-solutions-serra.svg" alt="" style="height:3rem; width:auto;">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- <div class="emodal">
        <div class="emodal-dialog">
            <div class="emodal-dialog__title">
                Título do modal
                <span class="emodal-dialog__close"><i class="fa fa-times"></i></span>
            </div>
            <div class="emodal-dialog__body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut vero repudiandae officia!
            </div>
            <div class="emodal-dialog__ui">
                <a href="#modal" class="emodal-dialog__button"><i class="fas fa-times me-2"></i>Fechar</a>
            </div>
        </div>
    </div> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri() ?>/js/custom.js"></script>
    <?= wp_footer() ?>
</body>

</html>