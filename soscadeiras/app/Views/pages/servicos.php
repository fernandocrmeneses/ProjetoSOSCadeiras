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
        <div class="row cards-content-blue text-center ">
            <?php foreach ($cards as $card): ?>
                <div class="col-12 col-sm-12 col-md-5 d-flex justify-content-center">
                    <div class="card-blue-general">
                        <h5 class="card-title"><?= $card['title'] ?></h5>
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
<div class="background-white">
    <div class="container">
        <div class="pergunta-frequente-content">
            <div class="row">
                <div class="col-4 col-md-4"></div>
                <div class="col-12 col-sm-6 col-md-8">
                    <h4 class="content">
                        <img src="<?= esc($perguntasFrequentes) ?>" />
                    </h4>
                </div>
                <div class="col-12 col-sm-6 col-md-3"></div>
                <div class="col-12 col-sm-6 col-md-8">
                    <div class="box-toggle-general">
                        <?php foreach ($perguntas as $index => $pergunta): ?>
                            <div class="box-toggle">
                                <!-- Input escondido para controlar o toggle -->
                                <input type="checkbox" id="toggle-<?= $index ?>" class="toggle-input" checked>
                                <label for="toggle-<?= $index ?>" class="box-toggle-title">
                                    <h6><?= esc($pergunta['title']) ?></h6>
                                    <i class="btn-title"></i>
                                </label>
                                <div class="box-toggle-body">
                                    <div class="image-toggle">
                                        <img src="<?= esc($pergunta['icon']) ?>" alt="Ícone">
                                    </div>
                                    <div class="text-toggle">
                                        <p><?= esc($pergunta['text']) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 content"></div>
            </div>
        </div>
    </div>
</div>
</div>