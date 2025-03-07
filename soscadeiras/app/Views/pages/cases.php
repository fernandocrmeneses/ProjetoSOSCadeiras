<div class="background-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3"></div>
            <div class="col-12 col-sm-12 col-md-7">
                <h4 class="titulos azul-claro content">
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
        <div class="row">
            <div class="col-4 col-sm-4 col-md-1"></div>
            <div class="col-4 col-sm-4 col-md-2"></div>
            <div class="col-12 col-sm-4 col-md-12">
                <section id="portfolio" class="portfolio">
                    <ul id="portfolio-flters" class="d-flex justify-content-center flex-wrap">
                        <?php foreach ($casesFilters as $filter): ?>
                            <li data-filter="<?= esc($filter['dataFilter']) ?>" class="<?= esc($filter['class']) ?>">
                                <?= esc($filter['title']) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="row portfolio-container">
                        <?php foreach ($casesConteudos as $dado): ?>
                            <!--TODO Incluir na controller as imagens e o nome das classes e trazer junto na foreach. -->
                            <div class="col-md-2 portfolio-item <?= esc($dado['categoriaFilter']) ?>">
                                <div class="portfolio-img"><img src="<?= esc($dado['imagemGaleria']) ?>" class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <p><?= esc($dado['descricaoThumb']) ?></p>
                                    <a href="<?= esc($dado['imagemGaleria']) ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= esc($dado['description']) ?>"><i class="bx bx-expand"></i></a>
                                    <!-- <a href="portfolio-endomarketing.html" class="details-link" title="Mais detalhes"><i class="bx bx-plus"></i></a> -->
                                </div>
                            </div>
                            
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>