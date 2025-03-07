<footer>
    <div class="rodape container">
        <div class="row">
            <!-- Logo e Texto -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="logo-texto">
                    <img src="<?= base_url('dist/image/footer/logo_footer.svg'); ?>" alt="Logo SOS Cadeiras" />
                    <p>Décadas de tradição em soluções para cadeiras de escritório. Comprometidos com a qualidade, conforto e saúde dos colaboradores.</p>
                </div>
            </div>
            <!-- Páginas -->
            <div class="col-12 col-sm-6 col-md-3">
                <h3 class="titulos-laranjas">
                    <i class="bullet bullet-planet"></i> Páginas
                </h3>
                <ul class="list-paginas">
                    <li><a href="<?= base_url('/'); ?>">Início</a></li>
                    <li><a href="<?= base_url('sobre-nos'); ?>">Sobre nós</a></li>
                    <li><a href="#">Tudo para cadeiras</a></li>
                    <li><a href="<?= base_url('sosexpress'); ?>">SOS Cadeiras Express</a></li>
                    <li><a href="<?= base_url('aluguel-cadeiras'); ?>">Aluguel de Cadeiras</a></li>
                    <li><a href="#">Compra de Cadeiras</a></li>
                    <li><a href="<?= base_url('manutencao-corretiva'); ?>">Manutenção Corretiva</a></li>
                    <li><a href="<?= base_url('manutencao-preventiva'); ?>">Manutenção Preventiva</a></li>
                    <li><a href="#">Cases</a></li>
                    <li><a href="<?= base_url('contato'); ?>">Contato</a></li>
                </ul>
            </div>
            <!-- Downloads -->
            <div class="col-12 col-sm-6 col-md-3">
                <h3 class="titulos-laranjas">
                    <i class="bullet bullet-download"></i> Downloads
                </h3>
                <ul class="list-paginas">
                    <li><a href="<?= base_url('dist/files/catalogo_sos.pdf'); ?>">Catálogo Linha de Cadeiras</a></li>
                    <li><a href="#">SOS Custom</a></li>
                    <li><a href="#">Apresentação SOS Cadeiras</a></li>
                </ul>
                <h3 class="titulos-laranjas mt-4">
                    <i class="bullet bullet-politica"></i> Políticas
                </h3>
                <ul class="list-paginas">
                    <li><a href="#">Privacidade</a></li>
                    <li><a href="#">Termos de Uso</a></li>
                </ul>
            </div>
            <!-- Informações de Contato -->
            <div class="col-12 col-sm-6 col-md-3">
                <h3 class="titulos-laranjas">
                    <i class="bullet bullet-contrato"></i> Informações de Contato
                </h3>
                <p>
                    <span class="texto-azul-escuro">Endereço:</span> <br />Rua São José do Rio Pardo 184<br />
                    Rochdale, Osasco.
                </p>
                <p><span class="texto-azul-escuro">Telefone:</span><br /> +55 (11) 9966-6191</p>
                <p><span class="texto-azul-escuro">E-mail:</span><br /> <a href="mailto:contato@soscadeiras.com">contato@soscadeiras.com</a></p>
                <h3 class="mt-4 social-titulo">Siga-nos:</h3>
                <div class="d-flex gap-3 social-footer">
                    <a href="#"><img src="<?= base_url('dist/image/common/instagram.svg'); ?>" alt="Instagram"></a>
                    <a href="#"><img src="<?= base_url('dist/image/common/facebook.svg'); ?>" alt="Facebook"></a>
                    <a href="https://br.linkedin.com/company/sos-cadeiras"><img src="<?= base_url('dist/image/common/linkedin.svg'); ?>" alt="LinkedIn"></a>
                    <a href="#"><img src="<?= base_url('dist/image/common/whatsapp.svg'); ?>" alt="LinkedIn"></a>
                </div>
            </div>
        </div>
        <!-- Direitos Reservados -->
        <div class="row mt-4 copyright">
            <div class="col-12 text-center texto-azul-escuro">
                <p>© 2024 SOS Cadeiras. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>
<a href="https://wa.me/5511996661891?text=Olá! Gostaria de mais informações."
    class="whatsapp-float"
    target="_blank"
    rel="noopener noreferrer">
    <img src="<?= base_url('dist/image/common/whatsapp_icon.svg'); ?>" alt="WhatsApp" />
</a>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Controlar o Toggle do Menu Principal
        $("#menu-toggle").on("click", function() {
            $(".navbar-collapse-mobile").slideToggle(300);
            $(".item-menu-mobile")
                .removeClass("dark")
                .removeClass("btn-custom")
                .removeClass("orange");
        });

        // Dropdown para submenus
        $("#dropdownMenu").on("click", function(e) {
            $(this).next(".dropdown-menu").slideToggle();
        });
    });
</script>
<!-- Vendor JS Files -->
<script src="<?= base_url('dist/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
<script src="<?= base_url('dist/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('dist/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
<script src="<?= base_url('dist/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
<script src="<?= base_url('dist/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
<script src="<?= base_url('dist/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
<script src="<?= base_url('dist/js/galeria.js'); ?>"></script>
</body>

</html>