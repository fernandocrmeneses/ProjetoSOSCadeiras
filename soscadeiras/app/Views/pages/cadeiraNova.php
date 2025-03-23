<div class="background-gray">
    <div class="container">
        <div class="row servicos">
            <div class="col-4 col-sm-4 col-md-1"></div>
            <div class="col-4 col-sm-4 col-md-2"></div>
            <div class="col-4 col-sm-4 col-md-8">
                <div class="banner-servicos">
                    <img src="<?= base_url(esc($banner)) ?>" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3"></div>
            <div class="col-12 col-sm-12 col-md-7">
                <h4 class="titulos azul-claro">
                    <?= esc($tituloPagina) ?>
                </h4>
            </div>
            <div class="col-12 col-sm-12 col-md-2"></div>
        </div>
        <div class="row paragrafos">
            <div class="col-4 col-sm-4 col-md-1"></div>
            <div class="col-4 col-sm-4 col-md-2"></div>
            <div class="col-12 col-sm-12 col-md-7">
                <?php if (!empty($paragrafos)): ?>
                    <?php foreach ($paragrafos as $paragrafo): ?>
                        <p><?= esc($paragrafo) ?></p>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Nenhum texto disponível no momento.</p>
                <?php endif; ?>
            </div>
            <div class="col-4 col-sm-4 col-md-2"></div>
        </div>
    </div>
</div>
<div class="background-white">
    <div class="container">
        <div class="row content">
            <div class="col-2 col-sm-2 col-md-6"></div>
            <div class="col-12 col-sm-12 col-md-12">
                <ul class="cadeiras-thumbs">
                    <li class="item-thumbs cadeira-1"><a href="#"></a></li>
                    <li class="item-thumbs cadeira-2"><a href="#"></a></li>
                    <li class="item-thumbs cadeira-3"><a href="#"></a></li>
                    <li class="item-thumbs cadeira-4"><a href="#"></a></li>
                    <li class="item-thumbs cadeira-5"><a href="#"></a></li>
                    <li class="item-thumbs cadeira-6"><a href="#"></a></li>
                </ul>
            </div>
        </div>
        <?php foreach ($conteudoCadeiras as $cadeira): ?>
            <div class="conteudo_cadeiras <?= esc($cadeira["itemAtivo"]) ?>">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <h4 class="titulos laranja">
                            <?= esc($cadeira['subTituloCadeiras']) ?>
                        </h4>
                    </div>
                </div>
                <div class="row content">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner_cadeira">
                            <img src="<?= base_url(esc($cadeira['bannerCadeira'])) ?>" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2"></div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="image_cadeira">
                            <img src="<?= base_url(esc($cadeira['imageCadeira'])) ?>" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <p><strong><?= esc($cadeira["textoNegrito"]) ?></strong></p>
                        <?php foreach ($cadeira["textos"] as $texto): ?>
                            <p><?= esc($texto) ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="background-custom">
    <div class="row content">
        <div class="col-12 col-sm-12 col-md-4"></div>
        <div class="col-12 col-sm-12 col-md-5 text-center">
            <h4 class="branco com-bold">Nos contate agora mesmo e conte com a consultoria gratuita de um especialista.</h4>
        </div>
        <div class="col-12 col-sm-12 col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-2"></div>
        <?php foreach ($cardsCadeiraNova as $card): ?>
            <div class="col-12 col-sm-12 col-md-3 d-flex justify-content-center">
                <div class="card-blue-general">
                    <h5 class="card-blue-title"></h5>
                    <div class="card-blue">
                        <div class="card-body-blue">
                            <p class="card-blue-text"><strong><?= $card['text'] ?></strong></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col-12 col-sm-12 col-md-2 content"></div>
    </div>
</div>
<div class="background-white">
    <div class="container">
        <div class="row servicos">
            <div class="principais-caracteristicas">
                <?php if (!empty(esc($textoExplicacao))): ?>
                    <div class="row explicacao-servico">
                        <div class="col-4 col-sm-4 col-md-2"></div>
                        <div class="col-4 col-sm-2 col-md-12">
                            <h4 class="titulos escuro"><?= esc($textoExplicacao['titulo']) ?></h4>
                        </div>
                        <div class="col-4 col-sm-4 col-md-2"></div>
                    </div>
                    <div class="row content-30">
                        <div class="col-4 col-sm-2 col-md-2"></div>
                        <div class="col-4 col-sm-2 col-md-8">
                            <?php foreach ($textoExplicacao['paragrafo'] as $explicacao): ?>
                                <p class="escuro">
                                    <?= esc($explicacao) ?>
                                </p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-2"></div>
                    <div class="col-4 col-sm-2 col-md-6">
                        <h4 class="titulos azul-escuro text-center">Principais Características</h4>
                        <ul class="lista-caracteristicas">
                            <?php foreach ($features as $feature): ?>
                                <li>
                                    <i class="bullet <?= esc($feature['icon']) ?>"></i>
                                    <strong><?= esc($feature['title']) ?></strong>
                                    <?= esc($feature['description']) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-4 col-sm-2 col-md-4">
                        <img src="<?= base_url(esc($animacao)) ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="background-blue">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="titulos azul-claro text-center titulo-grande content">
                    Como Funciona?
                </h4>
            </div>
        </div>
        <div class="row cards-content-blue justify-content-center d-flex">
            <?php foreach ($cards as $card): ?>
                <div class="col-12 col-sm-12 col-md-5 d-flex justify-content-center">
                    <div class="card-blue-general">
                        <h5 class="card-blue-title"><?= $card['title'] ?></h5>
                        <div class="card-blue">
                            <div class="card-number"><?= $card['number'] ?></div>
                            <div class="card-body-blue">
                                <p class="card-blue-text"><?= $card['text'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="content"></div>
</div>