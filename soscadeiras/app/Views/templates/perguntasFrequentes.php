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
            </div>
            <div class="row d-flex">
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