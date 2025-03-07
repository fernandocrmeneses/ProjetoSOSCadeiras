<div class="contato-home">
    <div class="contato-home-content container">
        <?php if (!empty($textoContato['tituloContato'])): ?>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <h4 class="titulos branco"><?= esc($textoContato['tituloContato']) ?></h4>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 text-center">
                    <h6 class="branco"><?= esc($textoContato['subtituloContato']) ?></h6>
                </div>
            </div>
            <div class="content"></div>
        <?php endif; ?>
        <div class="row background-claro">
            <div class="col-6 col-sm6 col-md-6">
                <div class="textos-contato">
                    <span class="titulos-laranjas">Entre em contato!</span>
                    <p class="paragrafo-contato">
                        Preencha o formulário e vamos encontrar a solução ideal para você!
                    </p>
                </div>
                <img src="<?= base_url('dist/image/forms/imagen_cadeiras.png'); ?>" />
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form container">
                    <span class="rotulo">Tipo de cliente</span>
                    <form>
                        <div class="row mb-3">
                            <div class="col-6 d-flex align-items-center">
                                <div class="checkbox">
                                    <input type="checkbox" id="pessoa_fisica">
                                    <label class="label-default" for="pessoa_fisica">Pessoa Física</label>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <div class="checkbox">
                                    <input type="checkbox" id="pessoa_juridica">
                                    <label class="label-default" for="pessoa_juridica">Pessoa Jurídica</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nome" class="label-default">Nome Completo</label>
                            <input type="text" id="nome" class="form-control" placeholder="Seu nome completo" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="label-default">E-mail</label>
                            <input type="email" id="email" class="form-control" placeholder="seuemail@exemplo.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="rotulo" class="label-default">Rótulo</label>
                            <input type="text" id="rotulo" class="form-control" placeholder="DDD + Número de telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="assunto" class="label-default">Assunto</label>
                            <select id="assunto" class="form-select" required>
                                <option selected>Selecione uma opção:</option>
                                <option value="1">Visita para Orçamento (10+ cadeiras)</option>
                                <option value="2">Reforma de Cadeiras</option>
                                <option value="3">Outros</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="label-default">Mensagem</label>
                            <textarea id="mensagem" class="form-control" rows="4" placeholder="Descreva sua solicitação ou dúvida" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning btn-lg text-white">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>