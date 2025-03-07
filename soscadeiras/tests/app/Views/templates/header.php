<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Cadeiras</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@800&display=swap" rel="stylesheet">
    <!-- Link para o CSS compilado -->
    <link rel="stylesheet" href="<?= base_url('dist/css/main.css'); ?>">

</head>

<body>
    <header>
        <div class="top-header">
            <div class="top-header__bar container">
                <div>
                    <div class="contatos">
                        <div class="info">
                            <div><span>Telefone: 55 11 3656-3310</div>
                            <div><span>E-mail: <a href="mailto:contato@soscadeiras.com" class="links">contato@soscadeiras.com</a></div>
                        </div>
                    </div>
                    <div class="social">
                        <!--Instagram-->
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="bi bi-instagram">
                                        <svg viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="objects">
                                                <g id="Group">
                                                    <path id="Vector" d="M25.5 13.0003C25.5 19.9042 19.9035 25.5006 12.9997 25.5006C6.09645 25.5 0.5 19.9035 0.5 13.0003C0.5 6.09645 6.09645 0.5 13.0003 0.5C19.9042 0.5 25.5006 6.09645 25.5006 13.0003H25.5Z" fill="#183149" />
                                                    <path id="Vector_2" d="M16.3915 6.44312H9.60846C7.86063 6.44312 6.44312 7.86063 6.44312 9.60846V16.3915C6.44312 18.1394 7.86063 19.5569 9.60846 19.5569H16.3915C18.1394 19.5569 19.5569 18.1394 19.5569 16.3915V9.60846C19.5569 7.86063 18.1394 6.44312 16.3915 6.44312ZM18.4263 16.1657C18.4263 17.4139 17.4133 18.4269 16.165 18.4269H9.83433C8.58606 18.4269 7.5731 17.4139 7.5731 16.1657V9.83496C7.5731 8.58669 8.58606 7.57373 9.83433 7.57373H16.165C17.4133 7.57373 18.4263 8.58669 18.4263 9.83496V16.1657Z" fill="white" />
                                                    <path id="Vector_3" d="M13.0066 9.60852C11.1348 9.60852 9.61536 11.128 9.61536 12.9997C9.61536 14.8715 11.1348 16.391 13.0066 16.391C14.8783 16.391 16.3978 14.8715 16.3978 12.9997C16.3978 11.128 14.8783 9.60852 13.0066 9.60852ZM13.0066 15.261C11.7608 15.261 10.7453 14.2455 10.7453 12.9997C10.7453 11.754 11.7608 10.7385 13.0066 10.7385C14.2523 10.7385 15.2678 11.754 15.2678 12.9997C15.2678 14.2455 14.2523 15.261 13.0066 15.261Z" fill="white" />
                                                    <path id="Vector_4" d="M16.6243 10.0608C16.2506 10.0608 15.946 9.75631 15.946 9.38259C15.946 9.00886 16.2506 8.70435 16.6243 8.70435C16.998 8.70435 17.3025 9.00886 17.3025 9.38259C17.3025 9.75631 16.998 10.0608 16.6243 10.0608Z" fill="white" />
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                </a>
                            </li>
                            <li>
                                <!--Facebook-->
                                <a href="#">
                                    <i class="bi bi-facebook">
                                        <svg viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="objects">
                                                <g id="Group">
                                                    <path id="Vector" d="M25.5 13.0003C25.5 19.9042 19.9035 25.5006 12.9997 25.5006C6.09645 25.5 0.5 19.9035 0.5 13.0003C0.5 6.09645 6.09645 0.5 13.0003 0.5C19.9042 0.5 25.5006 6.09645 25.5006 13.0003H25.5Z" fill="#183149" />
                                                    <path id="Vector_2" d="M16.7036 12.0302L16.4954 13.7025C16.4601 13.9818 16.2236 14.192 15.9429 14.192H13.2344V21.1839C12.9487 21.2097 12.6593 21.2229 12.3668 21.2229C11.7124 21.2229 11.0738 21.1575 10.4566 21.0329V14.192H8.37342C8.18216 14.192 8.02612 14.0353 8.02612 13.8434V11.7508C8.02612 11.5589 8.18216 11.4022 8.37342 11.4022H10.4566V8.26395C10.4566 6.33807 12.0113 4.7771 13.9296 4.7771H16.3601C16.5514 4.7771 16.7074 4.93376 16.7074 5.12566V7.21827C16.7074 7.41017 16.5514 7.56683 16.3601 7.56683H14.6236C13.8566 7.56683 13.235 8.19097 13.235 8.9617V11.4029H16.1518C16.4865 11.4029 16.7451 11.6973 16.7042 12.0308L16.7036 12.0302Z" fill="white" />
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <!--LinkedIn-->
                                    <i class="bi bi-linkedin">
                                        <svg viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="objects">
                                                <g id="Group">
                                                    <path id="Vector" d="M25.5 13.0003C25.5 19.9042 19.9035 25.5006 12.9997 25.5006C6.09645 25.5 0.5 19.9035 0.5 13.0003C0.5 6.09645 6.09645 0.5 13.0003 0.5C19.9042 0.5 25.5006 6.09645 25.5006 13.0003H25.5Z" fill="#183149" />
                                                    <g id="Group_2">
                                                        <path id="Vector_2" d="M8.57281 9.65819C9.46201 9.65819 10.1829 8.93735 10.1829 8.04815C10.1829 7.15895 9.46201 6.43811 8.57281 6.43811C7.68361 6.43811 6.96277 7.15895 6.96277 8.04815C6.96277 8.93735 7.68361 9.65819 8.57281 9.65819Z" fill="white" />
                                                        <path id="Vector_3" d="M9.79407 10.7316H7.35101C7.28464 10.7316 7.23083 10.7854 7.23083 10.8517V18.661C7.23083 18.7273 7.28464 18.7811 7.35101 18.7811H9.79407C9.86043 18.7811 9.91424 18.7273 9.91424 18.661V10.8517C9.91424 10.7854 9.86043 10.7316 9.79407 10.7316Z" fill="white" />
                                                        <path id="Vector_4" d="M19.0377 13.683V18.2444C19.0377 18.5395 18.7961 18.7811 18.5011 18.7811H16.891C16.5959 18.7811 16.3543 18.5395 16.3543 18.2444V14.4877C16.3543 13.7471 15.7535 13.1463 15.0129 13.1463C14.2724 13.1463 13.6716 13.7471 13.6716 14.4877V18.2444C13.6716 18.5395 13.43 18.7811 13.1349 18.7811H11.5248C11.2298 18.7811 10.9882 18.5395 10.9882 18.2444V11.2676C10.9882 10.9725 11.2298 10.7309 11.5248 10.7309H13.1349C13.43 10.7309 13.6716 10.9725 13.6716 11.2676V11.6111C14.2082 10.9159 15.0966 10.4629 16.0863 10.4629C17.5674 10.4629 19.0377 11.5363 19.0377 13.683Z" fill="white" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <!--Whatsapp-->
                                    <i class="bi bi-whatsapp">
                                        <svg viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="objects">
                                                <g id="Group">
                                                    <path id="Vector" d="M25.5 13.0003C25.5 19.9042 19.9035 25.5006 12.9997 25.5006C6.09645 25.5 0.5 19.9035 0.5 13.0003C0.5 6.09645 6.09645 0.5 13.0003 0.5C19.9042 0.5 25.5006 6.09645 25.5006 13.0003H25.5Z" fill="#183149" />
                                                    <path id="Vector_2" d="M12.955 4.99039C9.09195 5.1156 5.90081 8.24445 5.70765 12.105C5.63781 13.4967 5.94485 14.8123 6.54193 15.9543L5.70325 19.7104C5.66801 19.8803 5.81839 20.0307 5.98826 19.9954L9.7444 19.1567H9.74691C10.8813 19.7494 12.1831 20.0565 13.5647 19.9923C17.419 19.8136 20.5579 16.647 20.707 12.7914C20.8756 8.42502 17.3164 4.84883 12.9557 4.99039H12.955ZM13.2048 18.4477C12.1126 18.4477 11.0896 18.1526 10.21 17.6373C10.1269 17.5907 10.047 17.5417 9.96901 17.4894L7.56936 18.1287L8.2086 15.729C7.60271 14.7972 7.251 13.6868 7.251 12.4932C7.251 9.21085 9.92245 6.5394 13.2048 6.5394C16.4872 6.5394 19.1586 9.21085 19.1586 12.4932C19.1586 15.7756 16.4872 18.447 13.2048 18.447V18.4477Z" fill="white" />
                                                    <path id="Vector_3" d="M16.7357 15.1143C16.6319 15.2703 16.523 15.4156 16.3487 15.5893C15.9675 15.9706 15.4377 16.1631 14.9004 16.1084C13.9378 16.0096 12.57 15.4779 11.394 14.3045C10.2181 13.1286 9.68649 11.7608 9.59022 10.7982C9.53549 10.2609 9.72801 9.73174 10.1093 9.34984C10.2829 9.17619 10.4283 9.06671 10.5843 8.96038C10.8725 8.76597 11.2644 8.89558 11.3733 9.22274L11.7678 10.4062C11.8766 10.7309 11.8275 10.936 11.6872 11.0731L11.3733 11.3902C11.2173 11.5463 11.1915 11.7872 11.311 11.9741C11.4846 12.2465 11.8118 12.6825 12.4139 13.2847C13.016 13.8868 13.4521 14.2139 13.7245 14.3876C13.9114 14.5071 14.153 14.4813 14.3084 14.3253L14.6255 14.0113C14.7632 13.871 14.9684 13.822 15.2924 13.9308L16.4758 14.3253C16.803 14.4341 16.9326 14.8261 16.7357 15.1143Z" fill="white" />
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex justify-content-center bloco-menu">
                <div class="logo">
                    <a href="<?= base_url('/'); ?>" class="navbar-brand">
                        <img src="<?= base_url('dist/image/logosvg.svg'); ?>">
                    </a>
                </div>
                <!-- Botão para menu colapsável em dispositivos menores -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" id="menu-toggle"></span>
                </button>
                <div class="navbar-collapse navbar-collapse-mobile row">
                    <div class="col-sm-2 col-md-2 col-lg-2"></div>
                    <ul class="navbar-nav col-sm-11 col-md-11 col-lg-11">
                        <li class="nav-item">
                            <a href="<?= base_url('/'); ?>" class="menu-button item-menu-mobile dark">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="menu-button white" href="<?= base_url('sobre-nos'); ?>">Sobre nós</a>
                        </li>
                        <li class="menu-item with-icon" id="dropdownTudoCadeiras">
                            Tudo para cadeiras
                            <span class="arrow"></span>
                            <ul class="submenu" id="dropdownMenu">
                                <li><a class="azul-escuro" href="<?= base_url('sosexpress'); ?>">SOS Cadeiras Express</a></li>
                                <li><a class="azul-escuro" href="<?= base_url('aluguel-cadeiras'); ?>">Aluguel de Cadeiras</a></li>
                                <li><a class="azul-escuro" href="<?= base_url('compra-cadeiras'); ?>">Compra de Cadeiras</a></li>
                                <li><a class="azul-escuro" href="<?= base_url('manutencao-corretiva'); ?>">Manutenção Corretiva</a></li>
                                <li><a class="azul-escuro" href="<?= base_url('manutencao-preventiva'); ?>">Manutenção Preventiva</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="menu-button white" href="#">Cases</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('contato'); ?>" class="menu-button white">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('contato'); ?>" class="menu-button btn-custom orange item-menu-mobile">Faça sua cotação</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>