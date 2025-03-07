<div class="sobre-nos">
    <div class="container">
        <div class="background-white">
            <div class="row content">
                <div class="col-12 col-sm-12 col-md-2"></div>
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="bordas-laranjas fale-conosco">
                        <h4 class="titulos azul-escuro alinhado-esquerda">FNa SOS Cadeiras, acreditamos que cada ambiente de trabalho tem o poder de transformar a forma como as pessoas se sentem, trabalham e se conectam. </h4>
                        <p>Desde 2017, nosso propósito vai além de fornecer cadeiras; nosso compromisso é transformar espaços para promover saúde, conforto e bem-estar, criando lugares que inspirem produtividade e qualidade de vida, enquanto garantimos economia e sustentabilidade para empresas e pessoas.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3">
                    <img src="<?= base_url('dist/image/gifs/animado_cadeira.gif'); ?>" />
                </div>
            </div>
        </div>
    </div>
    <div class="background-dark-blue">
        <div class="missao-visao">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2"></div>
                <div class="col-12 col-sm-12 col-md-3">
                    <div class="missao">
                        <h4 class="titulos azul-escuro">Nossa Missão</h4>
                        <p class="branco">Com transparência e dedicação, transformamos espaços para promover saúde, conforto e bem-estar, com o melhor em ergonomia e economia.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 d-flex justify-content-center">
                    <div class="imagem-mao-sobre-nos">
                        <img src="<?= base_url('dist/image/sobrenos/mao.png'); ?>" />
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3">
                    <div class="visao">
                        <h4 class="titulos azul-escuro">Visão de futuro</h4>
                        <p class="branco">Expandir com inovação e sustentabilidade, sendo referência em soluções de conforto e qualidade no setor de cadeiras de escritório.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background-white">
        <div class="jornada content">
            <div class="row">
                <div class="col-3 col-sm-12 col-md-1"></div>
                <div class="col-6 col-sm-12 col-md-3">
                    <img src="<?= base_url('dist/image/gifs/gif_video.gif'); ?>" alt="Vídeo da Jornada">
                </div>
                <div class="col-12 col-sm-12 col-md-7">
                    <h4 class="titulos azul-escuro">A Jornada da SOS Cadeiras</h4>
                    <ul class="lista-jornada">
                        <li class="item">
                            <span class="bullet-jornada seta"></span>
                            <p>O que começou como uma pequena oficina, ao longo dos anos, se transformou em uma empresa em constante evolução, dedicada a oferecer soluções de conforto e ergonomia.</p>
                        </li>
                        <li class="item">
                            <span class="bullet-jornada cadeira"></span>
                            <p>Cada cadeira que reformamos, vendemos ou alugamos é mais do que um simples móvel: ela transforma espaços, é ergonômica e eficiente, atendendo às necessidades de quem a utiliza.</p>
                        </li>
                        <li class="item">
                            <span class="bullet-jornada ferramenta"></span>
                            <p>Com o tempo, nosso compromisso com reformas e manutenções em cadeiras giratórias cresceu, e hoje oferecemos serviços completos, sempre uma alternativa econômica e ambientalmente responsável, beneficiando tanto empresas quanto pessoas.</p>
                        </li>
                        <li class="item">
                            <span class="bullet-jornada planta"></span>
                            <p>Acreditamos que qualidade e sustentabilidade são essenciais. Adotamos práticas eco-conscientes em todas as etapas, desde a escolha dos materiais até os nossos processos de produção. Nosso compromisso com a qualidade vai além da durabilidade e do design; ele se estende à nossa responsabilidade com o planeta.</p>
                        </li>
                        <li class="item">
                            <span class="bullet-jornada lampada"></span>
                            <p>Na SOS Cadeiras, a inovação guia nosso caminho. Estamos sempre atentos às tendências do mercado, buscando integrar novas tecnologias e soluções que atendam não só às necessidades de hoje, mas também se antecipem aos desafios do amanhã.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background-custom">
        <div class="row content">
            <div class="col-12 col-sm-12 col-md-4"></div>
            <div class="col-12 col-sm-12 col-md-5 text-center">
                <h4 class="titulos azul-claro">3Cs</h4>
                <p class="branco com-bold">Na SOS Cadeiras, nossos valores são a base de tudo o que fazemos. Os 3 principais pilares que orientam nosso trabalho estão presentes em cada detalhe, desde o ajuste minucioso de uma cadeira até o atendimento personalizado que prestamos a cada cliente.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-2"></div>
            <?php foreach ($cards as $card): ?>
                <div class="col-12 col-sm-12 col-md-3 d-flex justify-content-center">
                    <div class="card-blue-general">
                        <h5 class="card-blue-title"><?= $card['title'] ?></h5>
                        <div class="card-blue">
                            <div class="card-body-blue">
                                <p class="card-blue-text"><?= $card['text'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-12 col-sm-12 col-md-2 content"></div>
        </div>
    </div>
</div>